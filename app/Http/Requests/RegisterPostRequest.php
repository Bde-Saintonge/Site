<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class RegisterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (
            !Gate::allows('verified-role', ['admin'])
            && ($this->user()->office->code_name !== $this->office || $this->user()->office->code_name !== $this->route('post')->office->code_name)
        ) {
            return false;
        }

        // TODO: Create Post policy/ies

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'required', 'max:255'],
            'image_url' => ['sometimes', 'required', 'url'],
            'office' => ['sometimes', 'required', 'exists:offices,code_name', 'regex:/^[a-z-]{3,8}/'],
            'text' => ['sometimes', 'required'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // TODO: Verif strip tags et verif transfo en html entitites
        $filters = [
            'title' => trim(
                filter_var($this->title, FILTER_SANITIZE_STRING, [
                    FILTER_FLAG_ENCODE_AMP,
                    FILTER_FLAG_STRIP_LOW,
                    FILTER_FLAG_STRIP_HIGH,
                ]),
            ),
            'image_url' => trim(
                filter_var($this->image_url, FILTER_SANITIZE_URL),
            ),
            'office' => trim(
                filter_var($this->office, FILTER_SANITIZE_STRING, [
                    FILTER_FLAG_ENCODE_AMP,
                    FILTER_FLAG_STRIP_LOW,
                    FILTER_FLAG_STRIP_HIGH,
                ])
            ),
            // TODO: do sanitization of text in priority with https://github.com/tgalopin/html-sanitizer
            'text' => $this->text,
        ];

        // Take shared keys between filtered data and request input.
        $sharedInputs = array_intersect_key($this->all(), $filters);

        // Replace the 'text' key name by 'content' for validation.
//        if (array_key_exists('text', $sharedInputs)) {
//            $keys = array_keys($sharedInputs);
//            $keys[array_search('text', $keys)] = 'content';
//
//            $editedInputs = array_combine($keys, $sharedInputs);
//        }

        $this->replace($sharedInputs);
    }
}

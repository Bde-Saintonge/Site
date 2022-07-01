<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class RegisterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'required', 'max:255'],
            'image_url' => ['sometimes', 'required', 'url'],
            'office' => ['sometimes', 'required', 'exists:offices,code_name', 'regex:/^[a-z-]{3,8}/'],
            'content' => ['sometimes', 'required'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // TODO: do sanitization of text in priority with https://github.com/tgalopin/html-sanitizer
        // TODO: Verif strip tags et verif transfo en html entitites
        $this->merge([
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
            'content' => $this->text,
        ]);
    }
}

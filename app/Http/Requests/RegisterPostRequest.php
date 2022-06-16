<?php

namespace App\Http\Requests;

use App\Models\Office;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class RegisterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        if (
            !Gate::allows('verified-role', ['admin']) &&
            !Gate::allows('verified-office', [$this->route('office')->code_name])
        ) {
            return false;
        }
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        //TODO: do sanitization of text in priority with https://github.com/tgalopin/html-sanitizer

        //dd($this->text);
        $this->merge([
            'title' => trim(filter_var($this->title,FILTER_SANITIZE_SPECIAL_CHARS)),
            'image_url' => trim(filter_var($this->image_url, FILTER_SANITIZE_URL)),
            'text' => $this->text,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|required|max:255',
            'image_url' => 'sometimes|required|url',
            'text' => 'sometimes|required',
        ];
    }
}

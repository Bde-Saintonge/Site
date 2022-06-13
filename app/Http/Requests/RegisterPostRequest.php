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
    public function authorize()
    {
        //TODO: Revoir obtention last url
        $url = explode('/', session('_previous')['url']);
        $office_code_name = end($url);
        $office = Office::search($office_code_name);

        if (
            !Gate::allows('verified-role', ['admin']) &&
            !Gate::allows('verified-office', [$office_code_name])
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
//        $this->merge([
//            'slug' => Str::slug($this->slug),
//        ]);
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
            'content' => 'sometimes|required',
        ];
    }
}

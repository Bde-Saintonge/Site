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
        //        $office = Office::search($office_code_name);

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
        //        dd($this->text);
        //        $this->merge([
        //            'title' => null,
        //            'image_url' => null,
        //            'text' => null,
        //        ]);

        $FILTERS = [
            'string' => [FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS],
            'string[]' => [
                'filter' => FILTER_SANITIZE_STRING,
                'flags' => FILTER_REQUIRE_ARRAY,
            ],
            'email' => FILTER_SANITIZE_EMAIL,
            'int' => [
                'filter' => FILTER_SANITIZE_NUMBER_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'int[]' => [
                'filter' => FILTER_SANITIZE_NUMBER_INT,
                'flags' => FILTER_REQUIRE_ARRAY,
            ],
            'float' => [
                'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
                'flags' => FILTER_FLAG_ALLOW_FRACTION,
            ],
            'float[]' => [
                'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
                'flags' => FILTER_REQUIRE_ARRAY,
            ],
            'url' => FILTER_SANITIZE_URL,
        ];

        /**
         * Recursively trim strings in an array
         * @param array $items
         * @return array
         */
        function array_trim(array $items): array
        {
            return array_map(function ($item) {
                if (is_string($item)) {
                    return trim($item);
                } elseif (is_array($item)) {
                    return array_trim($item);
                } else {
                    return $item;
                }
            }, $items);
        }

        /**
         * Sanitize the inputs based on the rules an optionally trim the string
         * @param array $inputs
         * @param array $fields
         * @param array $filters FILTERS
         * @param bool $trim
         * @return array
         */
        function sanitize(
            array $inputs,
            array $fields,
            array $filters,
            bool $trim = true
        ): array {
            $options = array_map(function ($field) use ($filters) {
                return $filters[$field];
            }, $fields);
            $data = filter_var_array($inputs, $options);

            return $trim ? array_trim($data) : $data;
        }

        $fields = [
            'title' => 'string',
            'image_url' => 'url',
        ];


        $inputs = [
            'title' => 'joe<script>',
            'image_url' => 'chrome-extension://😅jaekigmcljkkalnicnjoafgfjoefkpeg/suspended.html#ttl=php%20-%20What%20is%20%22enough%20sanitization%22%20for%20a%20URL%20-%20Stack%20Overflow&pos=0&uri=https://stackoverflow.com/questions/2046270/what-is-enough-sanitization-for-a-url',
        ];

        $sanitized = sanitize($inputs, $fields, $FILTERS);
        dd('hey');
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

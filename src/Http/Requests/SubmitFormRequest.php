<?php

namespace Creativeorange\PrettyErrorPages\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code'        => 'required',
            'first_name'  => 'nullable',
            'last_name'   => 'nullable',
            'email'       => 'nullable|email',
            'description' => 'required',
        ];
    }
}

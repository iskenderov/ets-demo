<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:companies,name',
            'phone' => 'required|string',
            'email' => 'required|string',
            'isActive' => 'required|boolean'
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                        'companies_id' => 'required|integer|exists:companies,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
                        'name' => [
                            'required',
                            Rule::unique('companies')->ignore($this->name, 'name') //должен быть уникальным, за исключением себя же
                        ]
                    ] + $rules; // и берем все остальные правила
            // case 'PATCH':
            case 'DELETE':
                return [
                    'companies_id' => 'required|integer|exists:companies,id'
                ];
        }
    }
    public function all($keys = null)
    {
        // return $this->all();
        $data = parent::all($keys);
        switch ($this->getMethod())
        {
            // case 'PUT':
            // case 'PATCH':
            case 'DELETE':
                $data['date'] = $this->route('day');
        }
        return $data;
    }
}

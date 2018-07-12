<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStoreIn extends FormRequest
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
    public function rules()
    {
        return [
            'f_montant_in'=>'required|numeric',
            'f_motif_in'=>'required',
            'f_remarque_in'=>'required|min:3'

        ];
    }
}

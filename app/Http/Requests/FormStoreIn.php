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

    public function messages()
    {
        return [

                'f_montant_in.required'=>'Le montant est requis',
                'f_montant_in.numeric'=>'Le montant doit être numerique',
                'f_motif_in.required'=>'Le motif est requis',
                'f_remarque_in.required'=>'La remarque est requise',
                'f_remarque_in.min'=>'La remarque doit avoir au minimum 3 caractères',
        ];
    }
}

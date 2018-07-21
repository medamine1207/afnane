<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStoreOut extends FormRequest
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
            'f_montant_out'=>'required|numeric',
            'f_motif_out'=>'required',
            'f_remarque_out'=>'required|min:3'

        ];
    }


    public function messages()
    {
        return [

                'f_montant_out.required'=>'Le montant est requis',
                'f_montant_out.numeric'=>'Le montant doit être numerique',
                'f_motif_out.required'=>'Le motif est requis',
                'f_remarque_out.required'=>'La remarque est requise',
                'f_remarque_out.min'=>'La remarque doit avoir au minimum 3 caractères',
        ];
    }
}

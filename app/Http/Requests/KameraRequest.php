<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KameraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode' => 'required',
            'tipe' => 'required',
            'id_merek' => 'required',
            'deskripsi' => 'required',
            'harga_sewa' => 'required'
        ];
    }
}

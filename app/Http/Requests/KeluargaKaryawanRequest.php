<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KeluargaKaryawanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'karyawan_id'   => 'required',
            'nama'          => 'required',
            'hub_keluarga'  => 'required',
            'jns_kelamin'   => 'required|boolean',
            'status'        => 'boolean'
        ];
    }
}

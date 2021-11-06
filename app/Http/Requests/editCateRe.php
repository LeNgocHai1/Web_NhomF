<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editCateRe extends FormRequest
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
            'name'=>'unique:categories,category_name,'.$this->segment(3).'id',
        ];
    }
    public function message()
    {
        return [
            'name.unique'=>'Ten Danh Muc Bi Trung!'
        ];
    }
}

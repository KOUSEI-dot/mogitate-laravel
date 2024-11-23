<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'integer|min:0|max:150',
            'image' => 'required',
            'season'=> 'required',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'price.integer' => '値段を入力してください',
            'price.min' => '数値で入力してください',
            'price.max' => '０−１００００円以内で入力してください',
            'image' => '商品画像を登録してください、「.png」または「.jpeg」形式でアップロードしてください',
            'season.required' => '季節を選択してください',
            'description' => '商品説明を入力してください、１２０文字以内で入力してください',
        ];
    }
}

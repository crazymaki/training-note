<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'weight' => 'required|numeric',
            'sets' => 'required|integer',
            // 'reps' => 'required|integer',
            'exercises' => 'required|exists:exercises_masters,id',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'weight.required' => '重量は必須です。',
            'weight.numeric' => '重量は数値でなければなりません。',
            'sets.required' => 'セット数は必須です。',
            'sets.integer' => 'セット数は整数でなければなりません。',
            // 'reps.required' => 'レップ数は必須です。',
            // 'reps.integer' => 'レップ数は整数でなければなりません。',
            'exercises.required' => 'メニューは必須です。',
            'exercises.exists' => '選択されたメニューは無効です。',
            'date.required' => '日付は必須です。',
            'date.date' => '日付は有効な日付形式でなければなりません。',
        ];
    }
}

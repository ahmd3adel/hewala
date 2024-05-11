<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // You can define authorization logic here if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recipient' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'sent_currency' => 'required|string|max:255',
            'amount_sent' => 'required|numeric',
            // Add other validation rules for your fields here
        ];
    }
}

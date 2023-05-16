<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sender_firstname' => 'required|string',
            'sender_lastname' => 'required|string',
            'sender_phone' => 'required|string',
            'sender_email' => 'nullable|email',
            'recipient' => 'required|string',
            'recipient_phone' => 'required|string',
            'recipient_email' => 'nullable|email',
            'recipient_address' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'sender_firstname.required' => 'Veuillez renseigner votre prénom.',
            'sender_lastname.required' => 'Veuillez renseigner votre nom.',
            'sender_phone.required' => 'Veuillez renseigner votre numéro de téléphone.',
            'recipient.required' => 'Veuillez renseigner le nom du destinataire du cadeau.',
            'recipient_phone.required' => 'Veuillez renseigner le numéro de téléphone du destinataire du cadeau.',
            'recipient_address.required' => "Veuillez renseigner l'adresse  du destinataire du cadeau."
        ];
    }
}

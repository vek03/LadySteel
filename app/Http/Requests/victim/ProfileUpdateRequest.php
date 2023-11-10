<?php

namespace App\Http\Requests\victim;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id_device' => ['int', 'max:11', 'exists:dispositivos,id', Rule::unique(User::class)->ignore($this->user()->id)],
            'name' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
            'username' => ['string', 'max:15', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'birthday' => ['date', 'max:10', 'before:'.Carbon::now()->subYears(18)->toDateString()],
            'img' => ['string', 'max:255'],
            'contact' => ['numeric', 'digits:11'],
            'contact2' => ['numeric', 'digits:11'],
            'message' => ['string', 'max:255'],
        ];
    }
}

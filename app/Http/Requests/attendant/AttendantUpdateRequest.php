<?php

namespace App\Http\Requests\attendant;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class AttendantUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
            'username' => ['string', 'max:15', Rule::unique(User::class)->ignore($this->attendant)],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->attendant)],
            'birthday' => ['date', 'max:10', 'before:'.Carbon::now()->subYears(18)->toDateString()],
            'img' => ['string', 'max:255'],
        ];
    }
}

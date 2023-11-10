<?php

namespace App\Http\Requests\victim;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class VictimCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id_device' => ['required', 'int', 'exists:dispositivos,id', 'unique:'.User::class],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:128'],
            'username' => ['required', 'string', 'max:15', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'birthday' => ['required', 'date', 'max:10', 'before:'.Carbon::now()->subYears(18)->toDateString()],
            'contact' => ['numeric', 'digits:11'],
            'contact2' => ['numeric', 'digits:11'],
            'message' => ['required', 'string', 'max:255'],
        ];
    }
}

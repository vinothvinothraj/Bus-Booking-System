<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public $confirm_password;
    public $nic_id;
    public $gender;

    public $title = '';
    public $description = '';

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'confirm_password' => 'required|string|min:8',
        'nic_id' => 'required|string|max:20|unique:user_information,nic_id',
        'gender' => 'required|string|in:male,female',
    ];
    public function submitForm()
    {
        
        $user = User::create([
            'name' => $this->first_name . ' ' . $this->last_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $userInformationData = [
            'user_id' => $user->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'nic_id' => $this->nic_id,
            'gender' => 'male',
            'loyalty_points' => 0, 
            'loyalty_tier' => 'basic', 
        ];

        UserInformation::create($userInformationData);

        $this->reset([
            'first_name', 'last_name', 'email', 'password', 'confirm_password', 'nic_id'
        ]);

        session()->flash('message', 'User and associated information created successfully.');
    }

    public function render()
    {
        return view('livewire.user.user-create')->layout('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserManagement extends Component
{
    public $role;
    public $username;
    public $email;
    public $password;
    public $phone;
    // public $user = '';

    use WithPagination;

    public function render()
    {
        $this->role   = Role::all();
        $user   = User::with(['roles'])->latest()->paginate(10);
        return view('livewire.laravel-examples.user-management', compact('user'));
    }

    public function resetInputFields()
    {
        $this->role = '';
        $this->username = '';
        $this->email    = '';
        $this->password = '';
        $this->phone    = '';
    }

    public function store(Request $request)
    {

        $validate = $this->validate([
            'username'  => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string',
            'phone'     => 'required|numeric|unique:users,phone',
            'role'      => 'required'
        ]);

        $create     = new User();
        $create->name       = $this->username;
        $create->email      = $this->email;
        $create->phone      = $this->phone;
        $create->password   = Hash::make($this->password);
        $create->save();
        $create->assignRole($this->role);
        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();
    }

    public function mount()
    {
    }
}

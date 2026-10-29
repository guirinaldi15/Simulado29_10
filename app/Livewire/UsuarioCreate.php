<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UsuarioCreate extends Component
{
    public $email;
    public $password;
    public $name;

    public function entrar()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),

        ]);

        session()->flash('message', 'Cadastro realizado com sucesso! Faça o login.');
        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.usuario-create');
    }
}

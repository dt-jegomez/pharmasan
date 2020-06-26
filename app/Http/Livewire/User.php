<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User as Usuarios;
use App\Role;
use Illuminate\Support\Facades\Hash;

class User extends Component
{
    public $data, $name, $email, $selected_id, $rol;
    public $updateMode = false;
    
    public function render()
    {
        $this->data = Usuarios::with('roles')->get();
        return view('livewire.user');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->rol = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'rol' => 'required',
        ]);
        $role = Role::whereId($this->rol)->first();
        $user = Usuarios::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($role->nombre),

        ]);
        $user->roles()->attach($role);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Usuarios::whereId($id)->with('roles')->first();
        $role = $record->roles->first();
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->rol = $role->id;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'rol' => 'required',

        ]);
        if ($this->selected_id) {
            $record = Usuarios::find($this->selected_id);
            
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            \DB::table('role_user')->where([['role_id',$this->rol],['user_id', $this->selected_id]])->delete();

            $record->roles()->attach(Role::whereId($this->rol)->first());

            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Usuarios::where('id', $id);
            $record->delete();
        }
    }
}

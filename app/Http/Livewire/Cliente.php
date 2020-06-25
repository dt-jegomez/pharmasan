<?php

namespace App\Http\Livewire;

use App\Cliente as Clientes;
use Livewire\Component;

class Cliente extends Component
{
    public $data, $nombre, $documento, $correo, $direccion, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->data = Clientes::all();
        return view('livewire.cliente');
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->documento = null;
        $this->correo = null;
        $this->direccion = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'documento' => 'required|min:5',
            'correo' => 'required|email:rfc,dns',
            'direccion' => 'required|min:5'
        ]);
        Clientes::create([
            'nombre' => $this->nombre,
            'documento' => $this->documento,
            'correo' => $this->correo,
            'direccion' => $this->direccion
        ]);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Clientes::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->documento = $record->documento;
        $this->correo = $record->correo;
        $this->direccion = $record->direccion;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'documento' => 'required|min:5',
            'correo' => 'required|email:rfc,dns',
            'direccion' => 'required|min:5'
        ]);
        if ($this->selected_id) {
            $record = Clientes::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'documento' => $this->documento,
                'correo' => $this->correo,
                'direccion' => $this->direccion,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Clientes::where('id', $id);
            $record->delete();
        }
    }
}

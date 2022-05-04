<?php

namespace App\Http\Livewire\Universidad;

use App\Models\Universidad;
use Livewire\Component;

class UniversidadEditarComponent extends Component
{   
    public $universidad =null;

    protected $rules = [
        'universidad.nombre' => 'required|min:3|max:100',
        'universidad.ddireccion' => 'required|min:3|max:100',
        'universidad.telefono' => 'required|min:3|max:100',
        'universidad.email' => 'required|min:3|max:100',
    ];

    public function mount(){
        $universidad = request()->id;

        $this->universidad = Universidad::findOrfail($universidad);
    }
    public function render()
    {
        return view('livewire.universidad.universidad-editar-component');
    }
}

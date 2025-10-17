<?php

namespace App\Livewire;
use App\Models\Inventario;

use Livewire\Component;

class BuscadorAutomatico extends Component
{
     public $nombre = '';

    public function render()
    {
          $inventarios = Inventario::where('nombre', 'like', '%' . $this->nombre . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.buscador-automatico', compact('inventarios'));
    }
}

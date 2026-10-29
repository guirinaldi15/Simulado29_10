<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithPagination;

class ProdutoIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $produtos = Produto::all();
        return view('livewire.produto-index',
        compact('produtos'));
    }
}

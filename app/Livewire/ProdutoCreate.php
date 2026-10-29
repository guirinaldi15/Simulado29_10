<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $preco_custo;
    public $preco_venda;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'preco_custo' => 'required',
            'preco_venda' => 'required'
        ]);
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
        ]);
        session()->flash(
            'sucess',
            'produto cadastrado com sucesso'
        );
        
    return $this->redirect('/produtos');
    }
    public function render()
    {
        return view('livewire.produto-create');
    }
}

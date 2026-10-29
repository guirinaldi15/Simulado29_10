<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class Movimentacao extends Component
{
    public $produto_id;
    public $quantidade;
    public $data;
    public $tipo='entrada';

       protected $rules = [
        'produto_id' => 'required|exists:produto,id',
        'tipo' => 'required|in:entrada,saida',
        'quantidade' => 'required|integer|min:1',
        'data' => 'required|date',
    ];

      public function processar()
    {
        $this->validate();

        $produto = Produto::findOrFail($this->produto_id);

        if ($this->tipo === 'saida' && $produto->estoque_atual < $this->quantidade) {
            $this->addError('quantidade', 'Estoque insuficiente para esta saída.');
            return;
        }}

             DB::transaction(function () use ($produto) {
            MovimentacaoEstoque::create([
                'produto_id' => $this->produto_id, 
                'tipo'       => $this->tipo,
                'quantidade' => $this->quantidade,
                'data'       => $this->data,
            ]);

            if ($this->tipo === 'entrada') {
                $produto->increment('quantidade', $this->quantidade);
            } else {
                $produto->decrement('quantidade', $this->quantidade);
            }
        });


        session()->flash('message', 'Movimentação de estoque registrada com sucesso!');
        
       $this->reset(['quantidade']);
        $this->data = now()->format('Y-m-d');
    }


    public function render()
    {
        return view('livewire.movimentacao');
    }
}

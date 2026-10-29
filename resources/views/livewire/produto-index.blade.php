<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Preço de Custo</th>
                <th>Preço de Venda</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>{{ $produto->marca }}</td>
                <td>{{ $produto->preco_custo }}</td>
                <td>{{ $produto->preco_venda }}</td>
                <td>{{ $produto->descricao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
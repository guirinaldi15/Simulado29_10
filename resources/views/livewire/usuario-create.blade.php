<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form wire:submit="entrar">
                <div class="mb-3">

                     <label class="form-label">Nome</label>
                    <input type="name" class="form-control" wire:model="name">

                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" wire:model="email">


                    <label class="form-label">Senha</label>

                    <input type="password" class="form-control" wire:model="password">
                    @error('password')
                        <small class="text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary w-100" type="submit">
                    Cadastrar Novo Usuário
                </button>
            </form>

        </div>
    </div>
</div>

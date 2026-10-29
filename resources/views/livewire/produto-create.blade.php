<div>
    <form class="grid grid-cols-1 gap-5" wire:submit="salvar">
        <div class="grid gap-5">



            <div class="form-field md:g-col-6">
                <label for="validationServer01" class="form-label">Nome</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="nome" wire:model="nome"
                    aria-describedby="validationServer01Valid validationServer01Invalid">
                <div id="validationServer01Invalid" class="invalid-feedback">Full name is required</div>
            </div>
            <div class="form-field md:g-col-6">
                <label for="validationServer01" class="form-label">Marca</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="marca"
                    wire:model="marca" aria-describedby="validationServer01Valid validationServer01Invalid">
                <div id="validationServer01Invalid" class="invalid-feedback">Full name marca is required</div>
            </div>
            <div class="form-field md:g-col-6">
                <label for="validationServer01" class="form-label">Categoria</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="categoria"
                    wire:model="categoria" aria-describedby="validationServer01Valid validationServer01Invalid">
                <div id="validationServer01Invalid" class="invalid-feedback">Full name categoria is required</div>
            </div>
            <div class="form-field md:g-col-6">
                <label for="validationServer01" class="form-label">Descrição</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="decricao"
                    wire:model="descricao" aria-describedby="validationServer01Valid validationServer01Invalid">
            </div>

            <div class="form-field md:g-col-6">
                <label for="validationServerDonation" class="form-label">Preço de Custo</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend3">$</span>
                    <input type="number" class="form-control is-invalid" value="preco_custo" wire:model="preco_custo"
                        id="validationServerDonation"
                        aria-describedby="inputGroupPrepend3 serverDonateFeedbackValid serverDonateFeedbackInvalid">
                </div>
            </div>

            <div class="form-field md:g-col-6">
                <label for="validationServerDonation" class="form-label">Preço de Venda</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend3">$</span>
                    <input type="number" class="form-control is-invalid" value="preco_venda" wire:model="preco_venda"
                        id="validationServerDonation"
                        aria-describedby="inputGroupPrepend3 serverDonateFeedbackValid serverDonateFeedbackInvalid">
                </div>
            </div>
            <br>
            <button class="btn-solid theme-primary justify-self-start" type="submit">Enviar Cadastro de
                Produto</button>
    </form>
</div>

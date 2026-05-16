<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="nome" type="text" name="nome" value="{{ isset($linha->nome) ? $linha->nome : '' }}" required>
        <label for="nome" class="{{ isset($linha->nome) ? 'active' : '' }}">Nome do Tripulante</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">settings_cell</i>
        <input id="cel" type="text" name="cel" value="{{ isset($linha->cel) ? $linha->cel : '' }}"
            required>
        <label for="cel" class="{{ isset($linha->cel) ? 'active' : '' }}">Frequência do Comlink</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">group_work</i>
        <select name="faccao" required>
            <option value="" disabled {{ !isset($linha->faccao) ? 'selected' : '' }}>Escolha seu lado</option>
            <option value="Jedi" {{ isset($linha->faccao) && $linha->faccao == 'Jedi' ? 'selected' : '' }}>Ordem
                Jedi</option>
            <option value="Sith" {{ isset($linha->faccao) && $linha->faccao == 'Sith' ? 'selected' : '' }}>Lorde
                Sith</option>
            <option value="Rebelde" {{ isset($linha->faccao) && $linha->faccao == 'Rebelde' ? 'selected' : '' }}>
                Aliança Rebelde</option>
            <option value="Imperio" {{ isset($linha->faccao) && $linha->faccao == 'Imperio' ? 'selected' : '' }}>
                Império Galáctico</option>
        </select>
        <label>Aliança / Facção</label>
    </div>
</div>

<div class="file-field input-field row">
    <div class="btn blue darken-2">
        <span>Foto de Perfil</span>
        <input type="file" name="imagem" accept="image/*">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Escolha uma imagem para o tripulante">
    </div>
</div>

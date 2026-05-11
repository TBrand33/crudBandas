<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($row->titulo) ? $row->titulo : '' }}">
    <label class="{{ isset($row->titulo) ? 'active' : '' }}">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($row->descricao) ? $row->descricao : '' }}">
    <label class="{{ isset($row->descricao) ? 'active' : '' }}">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{ isset($row->valor) ? $row->valor : '' }}">
    <label class="{{ isset($row->valor) ? 'active' : '' }}">Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">

     <span>Imagem</span>
        <input type="file" name="imagem">
</div>
   
<div class="file-path-wrapper">
    <input class="file-path validate" type="text">
</div>

</div>
    @if( isset($row->imagem) )
        <div class="input-field">
        <img width="250" src="{{ asset($row->imagem) }}" />
        </div>
    @endif

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" value="checked"
            {{ isset($row->publicado) && $row->publicado == 'sim' ? 'checked' : '' }}>
            <span>Publicar?</span>
        </label>
    </p>
    <br><br>
</div>
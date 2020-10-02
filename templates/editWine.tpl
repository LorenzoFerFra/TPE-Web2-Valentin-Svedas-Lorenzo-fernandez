{include file="header.tpl"}

<div class="container">
<form action="editwine" method="post">
  <h2>Editar Vino</h2>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Vino</span>
        </div>
        <input type="text" name="input_nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$wine->nombre}">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
        </div>
        <input type="text" name="input_descripcion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$wine->descripcion}">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Año de cosecha</span>
        </div>
        <input type="text" name="input_anocosecha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$wine->ano_cosecha}">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Origen</span>
        </div>
        <input type="text" name="input_origen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$wine->origen}">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Alcohol</span>
        </div>
        <input type="text" name="input_alcohol" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$wine->alcohol}">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" name="input_stock" for="inputGroupSelect01">Stock</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="input_stock">
        <option selected value={$wine->stock}>
        {if $wine->stock eq 1}
            Hay stock disponible
          {else}
            No hay stock disponible
        {/if}
        </option>
        <option value="0">Agotado</option>
        <option value="1">Disponble</option> 
      </select>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" name="input_idcategoria" for="inputGroupSelect01">Categoria</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="input_idcategoria">
      <option selected value="{$wine->id_categoria}">Tipo</option>
      {foreach from=$categorias item=categoria}
        <option value="{$categoria->id}">{$categoria->tipo} - {$categoria->color}</option> 
      {/foreach}
        </select>
    </div>

      <button type="sumbit" name="input_id" class="btn btn-secondary" value="{$wine->id}">Editar vino</button>
</form>


</div>

{include file="footer.tpl"}
<div class="container">

<form action="insert" method="post" enctype="multipart/form-data">
  <h2>Añadir nuevo Vino</h2>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Vino</span>
        </div>
        <input type="text" class="form-control" name="input_nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="input_descripcion" rows="3"></textarea>
  </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Año de cosecha</span>
        </div>
        <input type="date" class="form-control" aria-label="Sizing example input" name="input_anocosecha" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Origen</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" name="input_origen" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Alcohol</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" name="input_alcohol" aria-describedby="inputGroup-sizing-default">
      </div>
      
       <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" name="input_stock" for="inputGroupSelect01">Stock</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="input_stock">
        <option selected value="0"></option>
        <option value="0">Sin stock</option>
        <option value="1">Con stock</option> 
      </select>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" name="input_idcategoria" for="inputGroupSelect01">Categoria</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01" name="input_idcategoria">
      <option selected value="0">Tipo </option>
      {foreach from=$categorias item=categoria}
        <option value="{$categoria->id}">{$categoria->id} {$categoria->tipo} - {$categoria->color}</option> 
      {/foreach}
        </select>
    </div>
      <div class="form-group">
        <input type="file" name="input_image" id="imageToUpload">
      </div>

      <button type="sumbit" class="btn btn-secondary">Añadir vino</button>
</form>
</div>
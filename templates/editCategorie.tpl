{include file="header.tpl" }

<div class="container">
    <form action="editCategorie" method="post">
        <h2>Añadir nueva categoria</h2>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">tipo</span>
            </div>
            <input type="text" name="input_tipo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$categoria->tipo}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">tipo</span>
            </div>
            <input type="text" name="input_color" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{$categoria->color}">
        </div>
        <button type="sumbit" name="input_id" class="btn btn-secondary" value="{$categoria->id}">Editar categoria</button>
    </form>
</div>


{include file="footer.tpl" }
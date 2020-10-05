<div class="container">
    <form action="insertCategoria" method="post">
        <h2>Añadir nueva categoria</h2>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">categoria</span>
            </div>
            <input type="text" class="form-control" name="input_nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">tipo</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" name="input_origen" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">color</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" name="input_origen" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="sumbit" class="btn btn-secondary">Crear categoria</button>
    </form>
</div>
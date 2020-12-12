{include file="header.tpl"}
    <div class="container">
        <form action="findWines" method="get">
        <div class="row">
            <div class="col">
                <input class="form-control" name="input_buscar" type="text" placeholder="Busqueda avanzada" input>
            </div>
            <div class="col">
            <select class="form-control form-control-sm" name="input_valor">
                <option value="nombre">Nombre</option>
                <option value="descripcion">Descripción</option>
                <option value="ano_cosecha">Año cosecha</option>
                <option value="origen">Origen</option>
                <option value="alcohol">Alcohol</option>
                <option value="stock">Stock</option>
            </select>
            </div>
            <div class="col">
                <button type="sumbit" class="btn btn-primary btn-sm">Buscar</button>
            </div>
        </div>
        </form>
        <ul>
    </div>
    <div>
            {foreach from=$wines item=vino}
            {if $vino->stock eq 1}
                <li class="list-group-item list-group-item-success"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a><p>{$vino->descripcion}</p> 
                {if $admin eq true}   
                    <a href="edit/{$vino->id}"><button type="button" class="btn btn-outline-danger">Editar</button></a>
                    <a href="delete/{$vino->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></li>
                {/if}
            {else}
                {if $admin eq true}
                    <li class="list-group-item"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a><p>{$vino->descripcion}</p> 
                    <a href="edit/{$vino->id}"><button type="button" class="btn btn-outline-danger">Editar</button></a>
                    <a href="delete/{$vino->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></li>
                {/if}
            {/if}
            {/foreach} 
        </ul>
    </div>
    
    
 {if $admin eq true}
{include file="insertWine.tpl" }
{/if}

{include file="footer.tpl"}
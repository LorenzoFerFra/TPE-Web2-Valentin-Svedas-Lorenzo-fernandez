{include file="header.tpl"}
    <div>
        <ul>
            {foreach from=$wines item=vino}
            {if $vino->stock eq 1}
                <li class="list-group-item list-group-item-success"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a><p>{$vino->descripcion}</p> 
            <a href="edit/{$vino->id}"><button type="button" class="btn btn-outline-danger">Editar</button></a>
            <a href="delete/{$vino->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></li>
            {else}
                <li class="list-group-item"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a><p>{$vino->descripcion}</p> 
            <a href="edit/{$vino->id}"><button type="button" class="btn btn-outline-danger">Editar</button></a>
            <a href="delete/{$vino->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></li>
            {/if}
            {/foreach} 
        </ul>
    </div>
    

{include file="insertWine.tpl" }

{include file="footer.tpl"}
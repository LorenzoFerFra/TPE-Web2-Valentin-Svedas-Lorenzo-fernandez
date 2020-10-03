{include file="header.tpl"}
    <div>
        <ul>
            {foreach from=$wines item=vino}
            <li class="list-group-item list-group-item-success"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a><span class="badge badge-primary badge-pill">{$vino->descripcion}</span> <button type="button" class="btn btn-outline-danger"><a href="edit/{$vino->id}">Editar</a></button><button type="button" class="btn btn-outline-danger"><a href="delete/{$vino->id}">Borrar</a></button></li>     
            {/foreach} 
        </ul>
    </div>
    

{include file="insertWine.tpl" }

{include file="footer.tpl"}
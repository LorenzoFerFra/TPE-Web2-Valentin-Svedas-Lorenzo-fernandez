{include file="header.tpl"}
    <div class="container" >
    <h1 >{$titulo}</h1>
    <a href="categorias" class="text-secondary">Categorias de vinos</a>
    </div>
    <div>
        <ul>
            {foreach from=$wines item=vino}
            <li class="list-group-item"><a href="detalle/{$vino->id}" class="text-light bg-dark">{$vino->nombre} </a>: <span>{$vino->descripcion}</span></li>      
            {/foreach} 
        </ul>
    </div>
    

{include file="insertWine.tpl" }


{include file="footer.tpl"}
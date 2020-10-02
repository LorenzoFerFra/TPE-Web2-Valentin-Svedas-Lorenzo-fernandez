{include file="header.tpl"}

    <div>
        <h1>Categorias de vinos:</h1>
        <ul class="list-group list-group-flush">
            {foreach from=$categorias item=categoria}
            <li class="list-group-item">{$categoria->tipo} : Color característico,  {$categoria->color}</li>      
            {/foreach} 
        </ul>
    </div>
{include file="footer.tpl"}
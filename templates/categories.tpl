{include file="header.tpl"}

    <div>
        <h2>Categorias de vinos:</h2>
        <ul class="list-group list-group-flush">
            {foreach from=$categorias item=categoria}
            <li class="list-group-item"><a href="categorie/{$categoria->id}" class="text-body">{$categoria->tipo}<a> : Color característico,  {$categoria->color} 
            {if $admin eq true}
            <a href="editCategorie/{$categoria->id}"><button type="button" class="btn btn-outline-danger">Editar</button></a>  
            <a href="deleteCategorie/{$categoria->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a>
              {/if}
            </li>      
            {/foreach} 
        </ul>

    </div>
    {if $admin eq true}
        {include file="insertCategorie.tpl" }
    {/if}
    
{include file="footer.tpl"}
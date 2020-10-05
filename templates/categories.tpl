{include file="header.tpl"}

    <div>
        <h2>Categorias de vinos:</h2>
        <ul class="list-group list-group-flush">
            {foreach from=$categorias item=categoria}
            <li class="list-group-item"><a href="categorie/{$categoria->id}" class="text-body">{$categoria->tipo}<a> : Color característico,  {$categoria->color} <a href="editCategorie/:ID"><button type="button"  class="btn btn-primary btn-sm">Editar</button></a>  <a href="deleteCategorie/:ID"><button type="button" class="btn btn-sm btn-danger">Borrar</button></a></li>      
            {/foreach} 
        </ul>

    </div>
{include file="insertCategorie.tpl" }
    
{include file="footer.tpl"}
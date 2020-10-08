{include file="header.tpl"}

    <div>
        <h2>Categorias de vinos:</h2>
        <ul class="list-group list-group-flush">
            {foreach from=$categorias item=categoria}
            <li class="list-group-item"><a href="categorie/{$categoria->id}" class="text-body">{$categoria->tipo}<a> : Color característico,  {$categoria->color} <button type="button" class="btn btn-outline-danger"><a href="edit/{$categoria->id}">Editar</a></button>  <button type="button" class="btn btn-outline-danger"><a href="delete/{$categoria->id}">Borrar</a></button></li>      
            {/foreach} 
        </ul>

    </div>
{include file="insertCategorie.tpl" }
    
{include file="footer.tpl"}
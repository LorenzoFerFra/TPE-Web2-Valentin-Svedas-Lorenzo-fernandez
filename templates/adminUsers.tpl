{include file="header.tpl"}
<div>
    <ul>
        {foreach from=$users item=user}
            <li class="list-group-item">{$user->email}
                <a href="edit/{$user->id}"><button type="button" class="btn btn-outline-danger">Hacer administrador</button></a>
                <a href="delete/{$user->id}"><button type="button" class="btn btn-outline-danger">Borrar usuario</button></a>
            </li>
        {/foreach}
    </ul>
</div>

{include file="footer.tpl"}
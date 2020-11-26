{include file="header.tpl"}
<div>
    <ul>
        {foreach from=$users item=user}
       <form action="editUser" method="post">
            <li class="list-group-item">{$user->email}
            <a href="deleteUser/{$user->id}"><button type="button" class="btn btn-outline-danger">Borrar usuario</button></a>
        {if $user->admin eq 0} 
           <button type="sumbit" name="input_id" value="{$user->id}" class="btn btn-outline-danger">Hacer administrador</button>  
            <div>
            <input type="hidden" name="input_admin" value=1>
            </div>
        {else} 
            <button type="sumbit" name="input_id" value="{$user->id}" class="btn btn-outline-danger">Revocar administrador</button> 
            <div>
            <input type="hidden" name="input_admin" value="0">
            </div>
        {/if}
            </li>
        </form> 
        {/foreach} 
         
    </ul>
</div>

{include file="footer.tpl"}
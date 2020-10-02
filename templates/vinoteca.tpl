{include file="header.tpl"}
<div class="container">

          <ul class="list-group">

              {foreach from=$vinos_s item=vino}
                    <li class="list-group-item list-group-item-success">{$vino->title|upper}<span class="badge badge-primary badge-pill">{$vino->descripcion}</span> <button type="button" class="btn btn-outline-danger"><a href="delete/{$vino->id}">Borrar</a></button></li>
              {/foreach}
          
          </ul>
          </div>

{include file="crearVinos.tpl"}      

{include file="footer.tpl"}
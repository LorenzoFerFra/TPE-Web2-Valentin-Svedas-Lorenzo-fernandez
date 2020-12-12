{include file="header.tpl"}
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" id="id_vino" id_vino="{$wine->id}">{$wine->nombre}</th>
                    <th scope="col">Año cosecha</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Graduacion alcoholica</th>
                    <th scope="col">Stock</th>
                    {if $wine->imagen neq null}
                    <th scope="col">Imagen</th>    
                    {/if}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {$wine->descripcion}
                    </td>
                    <td>
                        {$wine->ano_cosecha}
                    </td>
                    <td>
                        {$wine->origen}  
                    </td>
                    <td>
                        {$wine->alcohol}%
                    </td>
                    <td>
                        {if $wine->stock eq 1}
                            <p class="text-success">Con stock disponlibe</p>
                        {else}
                            <p class="text-danger">Sin stock</p>
                        {/if}
                    </td>
                    <td>
                        {if $wine->imagen != ''}
                            <img src="../{$wine->imagen}" class="img-fluid" class="rounded" width="20%" height="100px" alt="Responsive image"/>
                        {else}
                            Sin imagen
                        {/if}
                    </td>
                </tr>
            </tbody>
        </table>
         
            {include file="vue/comment.vue"}
         <div >
            <div class="col"> 
            {include file="insertComment.tpl"}
         </div>

    </div>
    <script src="../js/comments.js"></script>
{include file="footer.tpl"}
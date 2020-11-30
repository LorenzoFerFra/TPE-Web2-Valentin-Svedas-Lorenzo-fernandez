{include file="header.tpl"}
            
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vino</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Año cosecha</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Graduacion alcoholica</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>    
                </tr>
            </thead>
            {foreach from=$wines item=wine}
            <tbody>
                <tr>
                    <td>
                        {$wine->nombre}
                    </td>
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
                            <img src="./{$wine->imagen}" class="img-fluid" class="rounded" width="20%" height="100px" alt="Responsive image"/>
                        {else}
                            <p>Sin imagen</p>
                        {/if}
                    </td>
                </tr>
            </tbody>
            {/foreach} 
        </table>
    
</div>

{include file="footer.tpl"}
{include file="header.tpl"}
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{$wine->nombre}</th>
                    <th scope="col">Año cosecha</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Graduacion alcoholica</th>
                    <th scope="col">Stock</th>
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
                </tr>
            </tbody>
        </table>
    </div>
{include file="footer.tpl"}
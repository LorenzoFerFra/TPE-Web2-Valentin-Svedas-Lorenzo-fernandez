<!doctype html>
        <html lang="en">
            <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

            <title>{$titulo}</title>
            </head>
            <body>
<div>
        <h3>Todos los vinos {$categoria->tipo|lower}:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Año cosecha</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Graduacion alcoholica</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                
                {foreach from=$wines item=wine}
                {if $categoria->id eq $wine->id_categoria}
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
                 </tr>
                 {/if}
                {/foreach}
                
            </tbody>
        </table>
        <a href="volver"><button type="button" class="btn btn-secondary">Volver</button></a>
    </div>

{include file="footer.tpl"}
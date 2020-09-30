<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
</head>
<body>
    <div>
        <ul>
            {foreach from=$categorias item=categoria}
            <li>{$categoria->tipo} : Color característico, <span>{$categoria->color}</span></li>      
            {/foreach} 
        </ul>
    </div>
</body>
</html>
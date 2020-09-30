<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
</head>
<body>
    <div style="text-align: center;">{$titulo}</div>
    <div>
        <ul>
            {foreach from=$wines item=vino}
            <li><a href="detalle/{$vino->id}">{$vino->nombre} </a>: <span>{$vino->descripcion}</span></li>      
            {/foreach} 
        </ul>
    </div>
</body>
</html>
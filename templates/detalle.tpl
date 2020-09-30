<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <th>{$wine->nombre}</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Detalle: {$wine->descripcion}</p>
                    </td>
                    <td>
                        <p>Año cosecha: {$wine->ano_cosecha}</p>
                    </td>
                    <td>
                        <p>Origen: {$wine->origen}</p>  
                    </td>
                    
                    <td>
                        <p>Graduacion Alcoholica: {$wine->alcohol}%</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
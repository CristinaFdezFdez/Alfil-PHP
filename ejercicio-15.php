<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles.css" rel="stylesheet" type="text/css" />
    <title>Ajedrez</title>
</head>
<body>
    <style>
        table,
        th,
        td {
            border: 0px;
            text-align: center;
        }

        td.negro {
            background-color: black;
        }

        td.blanco {
            background-color: white;
        }

        tr.marron {
            background-color: brown;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
    </style>

    <h2> Movimiento de un alfil</h2>

    <?php
    $posicion = isset($_POST['posicion']) ? strtoupper($_POST['posicion']) : '';
    // Cálculo de la columna y fila basado en la posición ingresada
    if ($posicion) {
        $posicionColumna = ord(substr($posicion, 0, 1)) - ord('A');
        $posicionFila = 8 - substr($posicion, 1, 1);
    } else {
        // Definir una posición predeterminada si no se proporciona ninguna
        $posicionColumna = 0;
        $posicionFila = 0;
    }
    ?><div class="container"><?php
                            // Renderizado del tablero de ajedrez con la posición del alfil
                            $color = "blanco";
                            echo '<table><tr class="marron">';
                            echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
                            for ($fila = 0; $fila < 8; $fila++) {
                                echo '<tr><td style="text-align: right; background-color: brown;">' . (8 - $fila) . '</td>';
                                for ($columna = 0; $columna < 8; $columna++) {
                                    echo "<td class=\"$color\">";
                                    // Mostrar el alfil o celda vacía según la posición
                                    if (($posicionColumna == $columna) && ($posicionFila == $fila)) {
                                        echo '<img src="alfil.png">';
                                    } else if (abs((abs($posicionColumna) - abs($columna))) == abs((abs($posicionFila) - abs($fila)))) {
                                        echo '<img src="alfilsemitransparente.png">';
                                    } else {
                                        echo '<img src="vacio.png">';
                                    }
                                    echo "</td>";

                                    // Alternar el color de la celda
                                    if ($color == "blanco") {
                                        $color = "negro";
                                    } else {
                                        $color = "blanco";
                                    }
                                }
                                if ($color == "blanco") {
                                    $color = "negro";
                                } else {
                                    $color = "blanco";
                                }
                                echo '<td style="text-align: left; background-color: brown;">' . (8 - $fila) . '</td></tr>';
                            }
                            ?>
        <tr class="marron">
            <td></td>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>d</td>
            <td>e</td>
            <td>f</td>
            <td>g</td>
            <td>h</td>
            <td></td>
        </tr>
        </table>
    </div>
    <br>
    Introduzca las coordenadas del alfil (p. ej. d3)
    <br>
    <form action="#" method="POST">
        <input type="text" name="posicion" autofocus="" required=""><br>
        <input type="submit" value="Aceptar">
    </form>

    <body>

        <a href="../../index.html">Página principal</a>
        <br>
        <div id="footer">
            © Cristina Fernández ☺
        </div>

    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';

                $c1 = new Caneta();

                $c1 -> modelo = "BIC cristal";
                $c1 -> cor = "Azul";
                //$c1 -> ponta = 0.5;
                //$c1 -> carga = 90;
                //$c1 -> tampada = true;

                var_dump($c1);
                
                $c1 ->rabiscar();
                
                $c1 -> tampar();
                $c1 -> destampar();
            ?>
        </pre>
    </body>
</html>

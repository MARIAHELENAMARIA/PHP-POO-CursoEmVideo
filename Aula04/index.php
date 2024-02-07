<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
               require_once 'Caneta.php';

               $c1 = new Caneta("BIC", "Azul", 0.5);
               $c2 = new Caneta("Faber Castell", "Vermelha", 1.0);
               
//               $c1->setModelo("BIC");
//               $c1->setPonta(0.5);
//               
//               print_r($c1);
               
//               $c1->modelo = "BIC";;
//               $c1->ponta = 0.4;
//               
//               print_r($c1);
               
//               print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}."; 
               
               print_r($c1);
               print_r($c2);
            ?>
        </pre>
    </body>
</html>

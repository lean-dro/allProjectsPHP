<html>
<head>
    <meta charset="UTF-8">
    <title>GERADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <br><button class="btn btn-dark"><a class="text-decoration-none" href=gerador.html>Voltar para home</a></button>
   <?php
   
   $cpf = $_POST['txtCpf'];
   $cpfFormatado = $cpf;

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);

    $vetorCpf = array();

        for ($i=0; $i < (strlen($cpf)); $i++) { 
            $vetorCpf[$i] = substr($cpf,$i,1);
        }
                
                
    //Cálculos

    $contador = 10;
    $soma1 = 0;

    for ($i=0; $i < 9; $i++) { 
        $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
        $contador--;
    }
    
    $digito1 = ($soma1 % 11);

    if ($digito1<2) {
        $digito1 = 0;
    }else {
        $digito1 = 11-$digito1;
    }


    $contador = 11;
    $soma2 = 0;

    $vetorCpf[9] = $digito1;
    for ($i=0; $i < 10; $i++) { 
        $soma2 = $soma2 + ($vetorCpf[$i]*$contador);
        $contador--;
    }
    
    $digito2 = ($soma2 % 11);
    if ($digito2<2) {
        $digito2 = 0;
    }else {
        $digito2 = 11-$digito2;
    }

    $vetorCpf[10] = $digito2;

   for ($i=0; $i < 9; $i++) { 
       echo $vetorCpf[$i];
       if ($i==2 || $i==5) {
           echo ".";
       }
   }
   echo "-";
   for ($i=9; $i < 11; $i++) { 
    echo $vetorCpf[$i]; 
    }


   ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
     </div>
</body>
</html>
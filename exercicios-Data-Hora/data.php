<html>
  <head>
   
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    .caixa{
            width: 35%;
            padding: 0.5%; 
            margin: 0.1%;
        }
    </style>
    <title>Exercício 4</title>
  </head>
  <body>
    <?php    
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('h');
    $minutos = date('i');
    $dia = date('d');
    $mes = date('n');
    $ano = date('Y');
    $diaSemana = date('N');
  
    switch ($mes) {
      case 1:
       $mes ='Janeiro';
       $digitoMes = '01';
       $siglaMes = 'Jan';
        break;
      
      case 2:
       $mes ='Fevereiro';
       $digitoMes = '02';
       $siglaMes = 'Fev';
        break;

      case 3:
       $mes ='Março';
       $digitoMes ='03';
       $siglaMes = 'Mar';
        break;
        
        case 4:
         $mes ='Abril';
         $digitoMes = '04';
         $siglaMes = 'Abr';
          break;
        
      case 5:
         $mes ='Maio';
         $digitoMes = '05';
         $siglaMes = 'Mai';
          break;
  
      case 6:
         $mes ='Junho';
         $digitoMes = '06';
         $siglaMes = 'Jun';
          break;

      case 7:
           $mes ='Julho';
           $digitoMes = '07';
           $siglaMes = 'Jul';
            break;
          
      case 8:
           $mes ='Agosto';
           $digitoMes = '08';
           $siglaMes = 'Ago';
            break;
    
      case 9:
           $mes ='Setembro';
           $digitoMes = '09';
           $siglaMes = 'Set';
            break;

      case 10:
             $mes ='Outubro';
             $digitoMes = '10';
             $siglaMes = 'Out';
              break;
            
      case 11:
             $mes ='Novembro';
             $digitoMes = '11';
             $siglaMes = 'Nov';
              break;
      
      case 12:
             $mes ='Dezembro';
             $digitoMes = '12';
             $siglaMes = 'Dez';
              break;
    }

    switch ($diaSemana) {
      case 1:
        $diaSemana = 'Segunda';
        break;

      case 2:
        $diaSemana = 'Terça';
        break;

      case 3:
        $diaSemana = 'Quarta';
        break;

      case 4:
        $diaSemana = 'Quinta';
        break;

      case 5:
        $diaSemana = 'Sexta';
        break;

      case 6:
        $diaSemana = 'Sábado';
        break;

      case 7:
        $diaSemana = 'Domingo';
        break;
                  
    }
    echo '<div class="caixa bg-dark rounded-3"><p class="text-white text-break fs-4">';
    // São Paulo, 27 de fevereiro de 2020.
    echo '1) São Paulo, '. $dia.' de '.$mes.' de '.$ano;



    // 27/02/2020.
    echo '<br>2) '.$dia.'/'.$digitoMes.'/'.$ano;


    //27 fev 2020.
    echo '<br>3) '.$dia.' '.$siglaMes.' '.$ano;



    // Quinta, 27 de fevereiro de 2020
    echo '<br>4) '.$diaSemana.', '.$dia.' de '.$mes.' de '.$ano;
   


    // 27/02/2020 14h48
    echo '<br>5) '.$dia.'/'.$digitoMes.'/'.$ano.' ';
    echo $hora.'h'.$minutos;
    

    echo'</p></div>';

    ?>
    
    
    
    
    <br><button class="btn btn-dark"><a class="text-decoration-none" href=index.html>Voltar para home</a></button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
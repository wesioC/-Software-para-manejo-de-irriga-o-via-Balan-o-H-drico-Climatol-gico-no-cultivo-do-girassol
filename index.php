<?php
    //Autoload de classes
    require __DIR__.'/vendor/autoload.php';

    //Dependencias
    use \App\WebServices\OpenWeatherMap;

    //Instancia da api
    $obOpenWeatherMap = new OpenWeatherMap("8789a15340530a700025aa7fa791908a");
    
   /*  if(!isset($argv[2])){
        die('Lat e Lon são obrigatórios');
    }  */
    $lat = -17.804382150626626;
    $lon = -50.90464177459235;

    $dadosPreciptacao = $obOpenWeatherMap->preciptation($lat,$lon);
    /* echo 'Lat: '.$lat.' Lon: '.$lon."\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['0']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['0']['rain']['3h'].'mm'?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['0']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['1']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['1']['rain']['3h']?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['1']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";

    echo 'Data: ' .($dadosPreciptacao['list']['2']['dt_txt']?? 'Desconhecido')."\n";
    //echo 'Chuva: ' .($dadosPreciptacao['list']['2']['rain']['3h']?? 'Desconhecido')."\n";
    echo 'Probabilidade: ' .(($dadosPreciptacao['list']['2']['pop']*100).'%'?? 'Desconhecido')."\n";    
    echo "\n\n";
 */
   // print_r($dadosPreciptacao);40.84639167888714, -74.06476536616998?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #E0FFFF;">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/ic/index.php#">Home<span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="model/conection.php">Cenexão com BD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/phpmyadmin/index.php?route=/table/structure&db=ic&table=Valves">PHP MyAdmin</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">RaspBarry PI</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Plantações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Ver todas</a>
                  <a class="dropdown-item" href="view/cadPlatation.html">Cadastrar</a>
                  <a class="dropdown-item" href="#">Gerenciar</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>
    
      <div class="container-fluid p-0 m-0 d-flex justify-content-center inline-block">
        <div class="card text-center shadow-lg m-3" style="max-width: 18rem;">
          <div class="card-header">Localização:</div>
            <div class="card-body inline-block">
              <div class="date">Latitude:</div> <div class="latitude"><?php echo $lat?></div>
              <div class="date">Longitude:</div><div class="longitude"><?php echo $lon?></div>
          </div>
        </div>
      </div>
    <div class='row'>
      <div class="container-fluid p-0 m-0 d-flex justify-content-center inline-block">
        <!-- card 1 -->
          <div class="card text-center shadow-lg m-1" style="max-width: 24rem;">
              <div class="card-header ">CHUVA
              <div class="date"><?php echo $dadosPreciptacao['list']['0']['dt_txt']?></div>
              </div>

              <div class="card-body ">  
                  
                  <div class="probability"><?php echo ($dadosPreciptacao['list']['0']['pop']*100).'%'?></div>
                  <div class="date"><?php echo ($dadosPreciptacao['list']['0']['rain']['3h']).'mm'?></div>
                  
                  <div class="container-img">
                      <?php 
                        if(($dadosPreciptacao['list']['0']['rain']['3h'])>=0.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<10.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['0']['rain']['3h'])>=30.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<40.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['0']['rain']['3h'])>=40.0)
                        echo'<img src="view/icons/icons8-chuva-intensa-96.png" alt="">';
                        else
                        echo'<img src="view/icons/icons8-sem-chuva-80.png" alt="">';
                      ?>
                      
                      <!-- <img src="view/icons/icons8-sem-chuva-80.png" alt=""> -->
                  </div>
              </div>

              <!-- <div class="card-footer"></div> -->
          </div>

          <!-- card 2 -->
          <div class="card text-center shadow-lg m-1" style="max-width: 24rem;">
              <div class="card-header ">CHUVA
              <div class="date"><?php echo $dadosPreciptacao['list']['1']['dt_txt']?></div>
              </div>

              <div class="card-body ">  
                  
                  <div class="probability"><?php echo ($dadosPreciptacao['list']['1']['pop']*100).'%'?></div>
                  <div class="date"><?php echo ($dadosPreciptacao['list']['1']['rain']['3h']).'mm'?></div>
                  <div class="container-img">
                      <?php 
                        if(($dadosPreciptacao['list']['1']['rain']['3h'])>=0.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<10.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['1']['rain']['3h'])>=30.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<40.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['1']['rain']['3h'])>=40.0)
                        echo'<img src="view/icons/icons8-chuva-intensa-96.png" alt="">';
                        else
                        echo'<img src="view/icons/icons8-sem-chuva-80.png" alt="">';
                      ?>
                      
                      <!-- <img src="view/icons/icons8-sem-chuva-80.png" alt=""> -->
                  </div>
              </div>

              <!-- <div class="card-footer">Atualizar</div> -->
          </div>
          
          <!-- card 3 -->
          <div class="card text-center shadow-lg m-1" style="max-width: 24rem;">
              <div class="card-header ">CHUVA
              <div class="date"><?php echo $dadosPreciptacao['list']['2']['dt_txt']?></div>
              </div>

              <div class="card-body ">  
                  
                  <div class="probability"><?php echo ($dadosPreciptacao['list']['2']['pop']*100).'%'?></div>
                  <div class="date"><?php echo ($dadosPreciptacao['list']['2']['rain']['3h']).'mm'?></div>
                  <div class="container-img">
                  <div class="container-img">
                      <?php 
                        if(($dadosPreciptacao['list']['2']['rain']['3h'])>=0.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<10.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['2']['rain']['3h'])>=30.0 && ($dadosPreciptacao['list']['0']['rain']['3h'])<40.0)
                        echo'<img src="view/icons/icons8-chuva-leve-2-96.png" alt="">';
                        else if(($dadosPreciptacao['list']['2']['rain']['3h'])>=40.0)
                        echo'<img src="view/icons/icons8-chuva-intensa-96.png" alt="">';
                        else
                        echo'<img src="view/icons/icons8-sem-chuva-80.png" alt="">';
                      ?>
                      
                      <!-- <img src="view/icons/icons8-sem-chuva-80.png" alt=""> -->
                  </div>
              </div>

             <!--  <div class="card-footer"></div> -->
          </div>
      </div>

    </div>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>
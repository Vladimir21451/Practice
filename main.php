<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="style.css" />
   <!-- <link href = "style.css" rel = "stylesheet"/>-->
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/phpstorm.png">' ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 0;
                        $b = 10;
                        $c = $a + $b;
                        echo $price;
                       // echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Изучение PHP несмотря на оптимистические прогнозы писателей не представляется достаточно простым делом.
                    К синтаксису, конечно, можно привыкнуть, но окружение дополнительными средствами разработки смущает.
                    Так уже на первом
                    уроке нам пришлось установить Xdebug, XAMPP, OpenServer. Беда в том, что эти средства встают криво, 
                    порты требуют настройки, а это последнее требует дополнительных знаний, которых, в частности
                    у меня? нет. Все это не вызывает энтузиазма при изучении. К сожалению.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>

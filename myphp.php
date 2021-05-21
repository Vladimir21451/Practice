<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>  
        <div> 
        <p> У меня на столе лежит книга <b>"Разработка Web-приложений с помощью PHP.."</b>.
         В этой книге 5 частей и 33 главы, поэтому говорить о том, что мы внедрились
         в изучение PHP рановато.
         Нас ознакомили с синтаксисом написания переменных, но даже здесь осталось много вопросов. Например:</p>
         <ul>
            <li>В модуле переменные обозначаются для простоты одной буквой, а рекомендации по верблюжьей транскрипции, видимо, остаются. </li>
            <li> Не очень еще понятно, как определяются типы переменных</li>
            <li> Как определена область видимости переменных и другие вопросы.</li>
          </ul>
          <?php include 'footer.inc.php' ?>
     </body>
     </html>
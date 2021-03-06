<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Hide links</title>

  </head>
  <body>
    <style>
      .my{
          border:none;
          background: none;
          text-decoration: underline;
          color: blue;
          cursor: pointer;
          color:#00bceb
      }
      .form{
        width: 300px;
        margin: 50px auto;
      }
    </style>

  <div class = 'form'>
    <p>
      <a href='https://google.ru'>It's a normal link (google)</a>
    </p>

    <form method="post">
      <button class="my" onclick="window.open('https://librebook.me/the_mysterious_island');">
        Simple example of a hide link
      </button>
    </form>


    <?php
      $mass = [
        'Таинственный остров' => 'https://www.litmir.me/bd/?b=265607',
        'Три дня Индиго' => 'https://www.litres.ru/sergey-lukyanenko/tri-dnya-indigo/',
        'Зеленая Миля' => 'https://librebook.me/the_green_mile',
        'Герой должен быть один' => 'https://librebook.me/geroi_doljen_byt_odin',
        'Затерянный мир' => 'https://librebook.me/zateriannyi_mir_doil_artur_ignatius_konan',
      ];

      echo '<br>List of links:';
      foreach($mass as $k => $v) {
        echo '<br><form method="post"><button class="my" onclick="window.open(\''. $v .'\');">'. $k .'</button></form>';
      }


      echo '<br>Function reuqest:';
      function s_link(string $name, string $link) {
          $res = '<br><form method="post"><button class="my" onclick="window.open(\''. $link .'\');">'. $name .'</button></form>';
        return $res;
      }

      $res = s_link('Yandex','https://ya.ru');
      echo $res;

    ?>
    
<!--Если код js в форме не нравится, то можно обойтись без него-->
    <?php
      echo '<br>Function reuqest without JS:';
      function m_link(string $name, string $link) {
        $res = '<br><form method="post" action="'.$link.'" target="_blank"><button class="my">'.$name.'</button></form>';
        return $res;
      }

      $res = m_link('Books','https://www.labirint.ru/books/');
      echo $res;      
    ?>
<!-- ВНИМАНИЕ! Существуют ссылки, по которым при перехоед выдается ошибка, это связанно с алгоритмом обработки старонних сервисов.
В этом случае method="post" заменяем на method="get". Где было замечено подобное поведение:
https://afisha.yandex.ru/ 
https://kassa.rambler.ru/ 
https://ekb.kassir.ru/
-->    
  </div>
  </body>
</html>

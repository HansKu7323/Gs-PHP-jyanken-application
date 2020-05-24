<?php
$title = '御神籤を引く結果ー';
include('head.php');
?>

  <body>
      <div class="container">
        <p><img src="img/omikuji.jpg" alt="御神籤の紹介画像" ></p>
        <div class="omi_result_php">
        <?php
          function h($val){
            return htmlspecialchars($val,ENT_QUOTES);
          };
          $name = $_GET['name'];
          $age = $_GET['age'];

          $random = mt_rand(1,4);
          switch($random){
            case 1:
              echo '<p class="good">おみくじを引く結果は大吉</p>';
              echo '<img src="img/daikichi.png" width="150px" alt="大吉の画像">';
              break;
            case 2:
              echo '<p class="good">おみくじを引く結果は中吉</p>';
              echo '<img src="img/cyuukichi.jpeg" width="150px" alt="中吉の画像">';
              break;
            case 3:
              echo '<p class="good">おみくじを引く結果は小吉</p>';
              echo '<img src="img/shokichi.png" width="150px" alt="小吉の画像">';
              break;
            case 4:
              echo '<p>おみくじを引く結果は凶</p>';
              echo '<img src="img/kyou.jpg" width="250px" alt="小吉の画像">';
              break;
          }
        ?>
        </div>
        <p class="omi_result_name"><?='お名前：'. h($name).'さん'; ?></p>
        <p class="omi_result_age"><?= '年齢：',h($age),'歳'; ?></p>
        <div class="back_to_jyanken">
        <a href="omikuji.php">御神籤アプリへ戻る</a>
        </div>
        <div class="back_to_index">
        <a href="index.php">ホームページへ戻る</a>
        </div>
        <hr>
      <footer>@copyright</footer>
      </div>

      <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
      crossorigin="anonymous"></script>   
      <script src="js/app.js"></script>
  </body>
</html>
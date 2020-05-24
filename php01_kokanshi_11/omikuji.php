<?php
$title = ' 御神籤を引くアプリー';
include('head.php');
?>

<body>
  <div class="container">
    <img src="img/omikuji.jpg" width="640px" alt="" srcset="">
    <div class="omikuji_form">

      <form name="form" method="get" action="omikuji_result.php" >
        <p>お名前<input type="text" name="name" size="20" autocomplete="off" id="name"></p>
        <p>年齢<input type="text" name="age" size="20" autocomplete="off" id="age"></p>
        <p><input type="submit" class="enter" id="btn" name="button" onclick="return false"  value="おみくじを引く"></p>
      </form>
    </div>

    <div class="omikuji_btn">
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
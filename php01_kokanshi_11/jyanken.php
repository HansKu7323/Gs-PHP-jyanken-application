<?php
$title = 'ジャンケンー';
include('head.php');
?>

  <body>
    <div class="container">
      <section class="jyanken_php">
        <h2>ジャンケンアプリ</h2>
        <img src="img/jyanken.jpeg" width="640px" alt="ジャンケンゲームの紹介画像" >
        <form action="jyanken_result.php" method="post">
        <div class="choice">
            <span class="span">選択して下さい</span>
            <input type="radio" class="radio" name="csm"value="0" checked/>グー
            <input type="radio" class="radio" name="csm"value="1"/>チョキ
            <input type="radio" class="radio" name="csm"value="2"/>パー
        </div>
        <p><input type="submit" class="enter" value="ジャンケン開始"></p>
      </section>

      <div class="work">
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
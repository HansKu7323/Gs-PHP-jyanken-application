<?php
$title = ' ';
include('head.php');
?>


  <body>
    <div class="info">
      <img src="img/Hans.jpg" width="100%" height="200px"alt="ハンスのアイコンです">
      <h1>ハンス</h1>
    </div>
    <div class="container">
      
      <h1>楽しいジャンケンゲームと御神籤を引くアプリ</h1>
      <section class="jyanken">
        <h2>ジャンケンゲーム</h2>  
        <img src="img/jyanken.jpeg" width="600px" alt="ジャンケンゲームの紹介画像">
        <p>じゃんけん（漢字表記：石拳、両拳、雀拳）は、3種類の指の出し方（グー・チョキ・パー）で三すくみの関係を構成し、その出した種類により勝敗を決める遊戯。</p>
        <div class="jyanken_btn">
          <a href="jyanken.php">ジャンケンアプリへ行く</a>
        </div>
      </section>

      <section class="omikuji">
        <h2>おみくじを引く</h2>  
        <img src="img/omikuji.jpg" width="640px" alt="ジャンケンゲームの紹介画像">
        <p>おみくじ（御神籤・御御籤・御仏籤またはみくじ・神籤・御籤・御鬮・仏籤）とは神社・仏閣等で吉凶を占うために引く籤である</p>
        <div class="omikuji_btn">
          <a href="omikuji.php">御神籤アプリへ行く</a>
        </div>
      </section>
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

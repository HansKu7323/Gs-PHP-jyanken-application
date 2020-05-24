<?php
$title = ' ジャンケンの結果ー';
include('head.php');
?>

  <body>
    <div class="container">
      <h2>ジャンケン結果</h2>
    <img src="img/jyanken1.png" alt="ジャンケンゲームの紹介画像" >
      <div class="php">
        <?php
            // phpのコードを記述
            $user=$_POST['csm'];

            $com=rand(0,2);
            ////0为石头，1为剪刀，2为布

            if($user==0 && $com==0){
              echo '<img src="img/deuce.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はグー</p>
                    <p>コンピューターの出してはグー<p>
                    <br/><br/>";
            }elseif($user==0 && $com==1){
              echo '<img src="img/win.png" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はグー</p>
                    <p>コンピューターの出してはチョキ</p>
                    <br/><br/>";
            }elseif($user==0 && $com==2){
              echo '<img src="img/lose.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はグー</p>
                    <p>コンピューターの出してはパー</p>
                    <br/><br/>";
            }

            if($user==1 && $com==0){
              echo '<img src="img/lose.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はチョキ<p>
                    <p>コンピューターの出してはグー<p>
                    <br/><br/>";
            }elseif($user==1 && $com==1){
              echo '<img src="img/deuce.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はチョキ</p>
                    <p>コンピュrーターの出してはチョキ</p>
                    <br/><br/>";
            }elseif($user==1 && $com==2){
              echo '<img src="img/win.png" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はチョキ</p>
                    <p>コンピューターの出してはパー</p>
                    <br/><br/>";
            }

            if($user==2 && $com==0){
              echo '<img src="img/win.png" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はパー</p>
                    <p>コンピューターの出してはグー</p>
                    <br/><br/>";
            }elseif($user==2 && $com==1){
              echo '<img src="img/lose.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はパー</p>
                    <p>コンピューターの出してはチョキ</p>
                    <br/><br/>";
            }elseif($user==2 && $com==2){
              echo '<img src="img/deuce.jpeg" width="150px" alt="">';
              echo "<p class='com'>あなたの出した手はパー</p>
                    <p>コンピューターの出してはパー</p>
                    <br/><br/>";
            }
         ?> 
      </div>

      <div class="back_to_jyanken">
        <a href="jyanken.php">ジャンケンアプリへ戻る</a>
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


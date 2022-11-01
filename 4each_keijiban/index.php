<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");
    ?>

    <header> 
      <img src="4eachblog_logo.jpg" alt="ロゴ画像">
      <div class="header">
          <p>トップ</p>
          <p>プロフィール</p>
          <p>4eachについて</p>
          <p>登録フォーム</p>
          <p>問い合わせ</p>
          <p>その他</p>
     </div>
    </header>

    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
    <form method="post" action="insert.php">
        <p>入力フォーム</p>
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" name="title">
        </div>

        <div>
            <label>コメント</label>
            <br>
            <textarea name="comments" rows="7" cols="35"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>
    </form>
    <div class="toukou">
    <?php
    while($row = $stmt->fetch()){
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>

    <?php
    while($row = $stmt->fetch()){
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    </div>
    </div>


    <div class="right">
      <h2>人気の記事</h2>
      <li>PHPオススメ本</li>
      <li>PHP MyAdminの使い方</li>
      <li>今人気のエディタ Top5</li>
      <li>HTMLの基礎</li>

      <h2>オススメリンク</h2>
      <li>インターノウス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipseのダウンロード</li>
      <li>Bracketsのダウンロード</li>

      <h2>カテゴリ</h2>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
    </div>

    <footer>
      copyright @ internous | 4each blog the which provides A to Z about programming.
    </footer>

</body>
</html>
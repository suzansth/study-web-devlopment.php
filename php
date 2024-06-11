</<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="title" content="WEB開発第4回" />
    <title>偶数表示</title>
  </head>
  <body>
    <div>hello world</div>
    <div>
      <?php
        for ($i = 100; $i >= 1; $i--) {
          if ($i % 2 == 0) {
            echo "<div>$i</div>";
          }
        }
      ?>
    </div>
  </body>
</html>

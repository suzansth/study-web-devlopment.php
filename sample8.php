<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>web開発4回目</title>
</head>
<body>
  <div>
      <?php
      $array = [
         "apple" => "りんご",
         "lemon" => "レモン",
         "grape" => "ぶどう",
         "tomato" => "トマト",
      ];
      foreach($array as $key => $value) {
         print($key . "<br>");
         print($value . "<br>");
      }
    ?>
  </div>
</body>
</html>
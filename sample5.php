<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="title" content="web開発4回目" />
</head>

<body>
  <?php
  for ($number = 100; $number >= 1; $number--) {
     if($number % 2 == 0) {
        echo $number . "<br>";
     }
  }
  ?>
</body>
</html>
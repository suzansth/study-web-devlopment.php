<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="title" content="web開発4回目" />
</head>
<body>
    <?php
    $week = ['日', '月', '火', '水', '木', '金', '土'];
    $today = date('w');
    echo'今日は' . $week[$today] . '曜日です。';
    ?>
</body>
</html>
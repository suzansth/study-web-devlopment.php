<!DOCTYPE html>
<html lang="ja">
<meta charset="UTF-8">
<body>

<?php
$today = strtotime("today"); // 今日の日付を取得
$one_year_later = strtotime("+1 year"); // 一年後の日付を取得

for ($date = $today; $date <= $one_year_later; $date = strtotime("+1 day", $date)) {
    $formatted_date = date("n/j (D)", $date); // 日付を指定された形式でフォーマット
    echo $formatted_date . "<br>";
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    </form>
    <?php
    try {
      
        $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8890;charset=utf8', 'root', 'root');
    
        $name = '追加データ';
       
        $pdo->exec("INSERT INTO item (name, id) VALUES ('$name', '$id')");
    
        echo "データが正常に挿入されました。";
    } catch (PDOException $e) {
        echo '接続エラー: ' . $e->getMessage();
    }
    ?>    


</body>
</html>
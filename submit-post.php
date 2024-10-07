<?php
$host = 'localhost'; // サーバー情報
$dbname = 'blog_db'; // データベース名
$user = 'root'; // ユーザー名
$pass = ''; // パスワード

// データベース接続
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// フォームデータの取得
$title = $_POST['title'];
$content = $_POST['content'];
$tags = implode(',', $_POST['tags']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // パスワードをハッシュ化

// データベースに保存
$sql = "INSERT INTO posts (title, content, tags, password) VALUES (:title, :content, :tags, :password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':password', $password);
$stmt->execute();

// リダイレクト
header("Location: /post-success.php");
exit;
?>

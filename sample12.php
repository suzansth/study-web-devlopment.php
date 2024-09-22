<?php
    // セッションを開始する
    session_start();

    // セッション変数に値を割り当てる
    $_SESSION['username'] = 'sushmit';
    $_SESSION['email'] = 'kd1404385@st.kobedenshi.ac.jp';

    // メッセージを表示する
    echo "セッション変数が設定されました。";
?>
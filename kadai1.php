<!DOCTYPE html>
<html lang="ja">
<meta charset="UTF-8">
    <body>
        <div>
            <?php
                $total = (100*2 + 1000 + 200*2);
                $total2 = ($total * 1.1);
                echo ('税抜き'.$total.'税込'.$total2);
            ?>
        </div>
    </body>
</html>
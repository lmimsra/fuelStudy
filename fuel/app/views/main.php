<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 18:23
 */
    use Fuel\Core\Asset;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <?php
    echo Asset::css('bootstrap.css');
    echo Asset::js('bootstrap.js');
    ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h1>Login Success!</h1>
            <a href="/logout">ログアウト</a>
        </div>
    </div>
</div>
</body>
</html>

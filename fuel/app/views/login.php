<?php
/**
 * Created by PhpStorm.
 * User: LiMa
 * Date: 2018/06/10
 * Time: 18:10
 */

use \Fuel\Core\Asset;

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
            <?php
                if (!$msg==null){
                    echo $msg;
                }
            ?>
            
            
            <form action="/" method="post">
                <div class="form-group">
                    <label for="login-id">ID</label>
                    <input type="text" name="login-id" id="login-id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="login-pass">PassWord</label>
                    <input type="password" name="login-pass" id="login-pass" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="送信">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
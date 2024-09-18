<!DOCTYPE html>
<html lang="en">
    <head>
        <title>تسجيل دخول</title>
    </head>
   
    <body>
        <center>
            <?php
            include 'css.css';
            session_start();
            session_unset();
            ?>
            <div class="login" id="d5" >
                
                <h3>بيانات الدخول</h3>
                <form action="fun/test.php" method="post">
                    <div class="input-text">
                        <label>اسم المستخدم</label>
                        <input type="" name="n1">
                    </div>
                    <div class="input-text">
                        <label>كلمة السر</label>
                        <input type="" name="n2">
                    </div>
                    <div>
                        <input class="btn" type="submit" name="" value="دخول">
                    </div>
                </form>
                <br>
                <a href="new_user.php">ليس لدي حساب</a>
            </div>
        </center>
    </body>
</html>
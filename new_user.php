<!DOCTYPE html>
<html lang="en">
    <head>
        <title>مستخدم جديد</title>
    </head>
    <body>
    <center>
        <?php
    include 'css.css';
    ?>
            <div class="login" style="padding: 150px;" id="d5">
                <h3>تسجيل</h3>
                <form method="get" action="fun/add_user.php">
                    <div class="input-text">
                        <label>الاسم كامل</label>
                        <input type="" name="Full_Name" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>كلمة السر</label>
                        <input type="password" name="The_Password" placeholder="" >
                    </div>
                    <div class="input-text">
                        <label>تأكيد كلمة السر</label>
                        <input type="password" name="Reset_Password" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>البريد الالكتروني</label>
                        <input type="" name="email" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>الهاتف</label>
                        <input  type="number" name="the_phone" placeholder="">
                    </div>
                    <div>
                        <input class="btn" type="submit" name="" value="تسجيل حساب">
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>تغيير كلمة السر</title>
    </head>
   
    <body>
        <center>
            <?php
            include 'css.css';
            include 'list.php';
            ?>
                       <div>
                        <?php
                        $re=$_GET['re'];
                        if ($re==1) {
                            echo "كلمة السر القديمة خطأ";
                        }
                        if ($re==2) {
                            echo "كلمة السر الجديدة غير كتتطابقة";
                        }
                        ?>
                       </div>
            <div style="padding: 100px;" class="login" id="d5" >
                <br><br>
                <h3>تغيير كلمة السر</h3>
                <form action="fun/change.php" method="post">
                    <div>
                    </div>
                    <div class="input-text">
                        <label>كلمة السر القديمة</label>
                        <input type="" name="n1">
                    </div>
                    <div class="input-text">
                        <label>كلمة السر الجديدة</label>
                        <input type="" name="n2">
                    </div>
                     <div class="input-text">
                        <label>إعادة كلمة السر</label>
                        <input type="" name="n3">
                    </div>
                    <div>
                        <input class="btn" type="submit" name="" value="دخول">
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>
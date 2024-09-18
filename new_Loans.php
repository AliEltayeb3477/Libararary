<!DOCTYPE html>
<html lang="en">
    <head>
        <title>إستعارة كتاب</title>
    </head>
    <body>
    <center>
        <?php
    include 'css.css';
    ?>
                <?php
                     $re=$_GET['re'];
                      if ($re==1) {
                            echo "تمت إضافة الكتاب";
                        }
                        if ($re==2) {
                            echo "الكتاب مضاف مسبقا";
                        }

                ?>
            <div class="login" id="d5" style="padding: 150px;">
                <h3>إستعارة كتاب</h3>
                <form method="post" action="fun/add_book.php">
                    <div class="input-text">
                        <label>إسم الطالب</label>
                        <input type="" name="the_user" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>عنوان الكتاب</label>
                        <input type="" name="Title" placeholder="" >
                    </div>
                    <div class="input-text">
                        <label>تاريخ الاستعارة</label>
                        <input type="Date" name="Loan_Date" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>تاريخ الارجاع</label>
                        <input type="Date" name="return_Date" placeholder="">
                    </div>
                    <div class="input-text">
                        <label>رقم الهاتف</label>
                        <input type="" name="the_phone" placeholder="">
                    </div>
                    <div>
                        <input class="btn" type="submit" name="" value="إستعارة">
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>
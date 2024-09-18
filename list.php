<!DOCTYPE html>
<html lang="en">
<head>
    <title>مكتبة استفد</title>
</head>

<body>
    <?php
    include 'st.css';
    ?>
    <div style="width: 100%; position: fixed; top: 0;">
    <ul>
        <li><a href="index11.php">الرئيسية</a></li>
        <li><a href="abuot.php">حول</a></li>
        <li><a href="team.php">فريق العمل</a></li>
        <li><a href="us.php">المساعدة</a></li>
        <li><a href="personal.php">إدارة حسابي</a></li>
        <?php
        session_start();
        if(!isset($_SESSION['onlinelibarary'])){
            ?>
            <li style="float: right;"><a href="login1.php">تسجيل دخول</a></li>
        <?php
         }
        ?>
        <?php
         if(isset($_SESSION['onlinelibarary'])){
            $n1=$_SESSION['onlinelibarary'];
            include 'connect.php';
            $sql="SELECT * FROM users WHERE the_user = '$n1' ";
            $result= $conn->query($sql);
            while($row = $result->fetch_assoc()){
                $Full_Name=$row['Full_Name'];
                    }
            ?>
            <li style="float: right;"><a href="login1.php">تسجيل خروج</a></li>
        <?php
         }
         ?>
    </ul>
</div>
</body>
</html>
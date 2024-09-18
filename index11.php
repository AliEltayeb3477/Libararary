<!DOCTYPE html>
<html lang="en">
<head>
    <title>مكتبة استفد</title>
</head>

<body>
    <?php
    include 'st.css';
   
    ?>
    <br>
<nav>  
  <ul> 
   <li><a href="#">الكتب الاكثر إستعارة</a></li>
   <li><a href="#">الكتب الجديدة</a></li>  
   <li><a href="book.php">قائمة الكتب</a></li>  
   <li>  
    <form>  
      <input type="search" id="search-input" placeholder="Search...">  
      <button id="search-button">أبحث عن كتاب</button>  
    </form>  
    <li style="float: right;"><a href="list.php">رجوع</a></li>
   </li>  
  </ul>  
</nav>
</body>
</html>
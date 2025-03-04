<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ไมตรี อินทะเเสง (เฟิร์ส)</title>
</head>

<body>
    <h1>ไมตรี อินทะเเสง (เฟิร์ส)</h1>
    
    <form method="post" action="" >  
    ราคาสินค้ารวม<input type="number" name="a" min="0"  autofocus required>
    <!--<input type="button" name="submit" value="OK">-->
    <button type="submit" name="Submit">OK</button>
</form> 

<?php
if(isset($_POST['Submit'])){ 
    $price = $_POST ['a'] ;
    if ( $price >= 5000 ) {
    $discount = $price*0.15 ;
    } else if ( $price >= 2000 ) {
    $discount = $price*0.10 ;
    } else if ( $price >= 1000 ) {
    $discount = $price*0.05 ;
    } else {
    $discount =  0 ;
    }


    echo "ราคาสินค้ารวม = ".number_format($price,2)."บาท <br>"; 
    echo "ส่วนลดที่ได้รับ = ".number_format($discount,2)."บาท <br>"; 
    echo "จำนวนเงินที่ต้องจ่าย = ".number_format($discount,2)."บาท <br>";
}
    ?>
    
</body>
</html>
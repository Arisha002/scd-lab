<?php
//file used for database connection 

$servername= "localhost"; //localhost hi rahega server ka naam
$username = "root";  //by default php my admin ka username root hota hai
$password=""; //empty string derahe hain bcz database mein password protectioin nhi ha per password ki field banana zaruri hai
//all upper 3 (servername,username,password will be same only db name can change because it will vary depending on what dbname are we providing in php
$db_name="students_db"; //jo naam idhr wahi database ka naam hoga, name can be changed
$conn = new mysqli($servername,$username,$password,$db_name); //object create mysqli ka aur 4 cheezein bhejdi //mysqli database ka object create kia wa hai aur chaaron cheezein use bhejrahe hain agar koi ek cheez (4 fields) mein se ghalat bhejengay tu error ayega 
//validation
if($conn->connect_error){   //mysqli ki class mein hota hai,database ke connection mein ata hai ya connecthone ke baad ata hai tu is variable mein ajata hai (connect_error)
    die("connection failed".$conn->connect_error);   //error dene ke baad wahi per rukdega (script age execute nhi hogi)
}  //if condition will check ke connection bana hai ya nhi and tell exact error
//object ke saath variable use to we will use arrow.(mysqli ke andar agar kisi cheez ko access karna hai tu arrow use) $ we use for variable
?>
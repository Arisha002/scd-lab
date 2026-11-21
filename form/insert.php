
<?php
//now the database connection is done and table is made now we will insert the values by this.
include 'db.php'; //database connection ko include karwarahe hain

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $age= $_POST['age']; 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $age= $_POST['age']; 
    //['age'] same hona chahiye wahi jo index.html mein id mein define hai
    //for example:we give name ali so it stores in name
    //in 3 variables mein form se data mangwaya hai
    $sql = "INSERT INTO students (name,email,age) VALUES ('$name','$email','$age')";  //woh query jo data bhejegi db mein
} //SUPER GLOBAL VARIABLE SERVER SE RELATED HAR FORM KE HAR VARIABLE KI KNOWLEDGE HOTI HAI,PHP KA APNA ARRAY HAI,LOCAL HOST  MEIN FILES KA DATA BHI MAJOOD HOTA HAI
//$_SERVER KE ANDAR VARIABLE HAI REQUEST_METHOD ARRAY KE ANDAR HAI ,FORM KE METHOD KO CHECK KAREGA if($_SERVER["REQUEST_METHOD"]=="POST") TU IF CHALEGA
// run the query and check if successful
//$conn->database ka connection hold
//query used for ke sql ki query use hui hai
///=== is used for strong check
if($conn->query($sql)=== TRUE){// query(sql) ek derived peoperty hai $conn ek object hai jo hamne db mein banaya tha jismein mysqli ki 4ron cheezin pass hain tu java mein hum $conn.query($sql) likhte yahan ham arrow dete hain tu access derived things builtin
    echo "<h2> Students Registered successfully!</h2>";
    echo "<p><a href='index.html'> Go back </a></p>";
}
else{
    echo "error : ".$sql . "<br>" . $conn->error;
}
//close the database connection
$conn->close();

?>

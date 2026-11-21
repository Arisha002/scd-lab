<?php
include 'db.php';

$sql= "SELECT * from students";
$result= $conn->query($sql);  //assigning to result variable, connection wale variable mein mysql ka connection hai jo bhi query select ki execute karke layegi woh result ke variable mein store hojaegi
//query ka output variable ke andar store karwadia
?>


$sql= "SELECT * from students";
$result= $conn->query($sql);  //assigning to result variable, connection wale variable mein mysql ka connection hai jo bhi query select ki execute karke layegi woh result ke variable mein store hojaegi
//query ka output variable ke andar store karwadia
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Reqistered Students</h1>
    <?php
    if($result->num_rows > 0){    //num rows te;; how many rows are fecthed from database
        echo "<table border='1' cellpadding='10'>";

        echo "<tr>
        <th>ID</th> //column ka th , row ke liye tr
        <th>Name</th>
           <th>Email</th>
        <th>Age</th>
        </tr>";

        //yeh first row hai table ki column wala part hai yeh
        //ab starting data wala part data ziada hota hai tu loop kardia and print hojaega
        while($row= $result->fetch_assoc()){  //fetch_assoc my sqli ka builtin  function  ek ek row ko as an associative array (keys ke respective se data hota hai)  banadeta hai aure wahi cheex row wale variable mein store karrahe hain
            echo "<tr>";
            echo "<td>" .$row["id"] . "</td>"; //td cells hain
            echo "<td>" .$row["name"] . "</td>";  //$row array hai aur id ki key ki jo bhi value hai woh lakar print kardo
            echo "<td>" .$row["email"] . "</td>";
            echo "<td>" .$row["age"] . "</td>";
             //table ko khola tha tu band kardia yeh table ko print kardega   
            
        }
        echo "</table>";       
    }
    else{
        echo "<p> No students found.</p>";
    }
    //close the database connection
$conn->close();



    ?>
    <p><a href="index.html">go back to regsiteration </a></p>
</body>
</html>

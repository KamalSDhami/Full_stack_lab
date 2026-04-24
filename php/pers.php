<?php
$dno = $_POST['dno'];

$conn = mysqli_connect("localhost", "root", "", "COMPANY");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM PERS WHERE DNO='$dno'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    echo "<h2>Records Found:</h2>";

    while($row = mysqli_fetch_assoc($query)){
        echo "ID: ".$row['ID']."<br>";
        echo "Name: ".$row['NAME']."<br>";
        echo "Dept No: ".$row['DNO']."<br><br>";
    }

}else{
    echo "<h2>No Records Found</h2>";
}
?>
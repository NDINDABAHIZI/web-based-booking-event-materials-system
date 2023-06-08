<?php  

if (isset($_SESSION['email']) && isset($_SESSION['id_No'])) {
    
    $sql = "SELECT * FROM customers ORDER BY id_No ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} 
<!DOCTYPE html>
<html>
    <head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>
<body>
<h1>INSERT DATA TO DATABASE</h1>
<h2>Enter data into receipt table</h2>
<ul>
    <form name="InsertReceiptData" action="InsertReceipt.php" method="POST" >
        <li>Receipt ID:</li><li><input type="text" name="receiptid" placeholder="Required input" /></li>
        <li>Customer ID:</li><li><input type="text" name="customerid"  placeholder="Required input"/></li>
        <li>Date:</li><li><input type="text" name="date" /></li>
        <br>
        <li><input type="submit" /></li>
</form>
</ul>

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-52-0-155-79.compute-1.amazonaws.com;port=5432;user=bubkotqejclqfw;password=688bc7c4db65a813ba3c9aff28c7538047ed2741a8fe3847998b5df8b611ac22;dbname=d7b9ojruinru51",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}

//Khởi tạo Prepared Statement
//$stmt = $pdo->prepare('INSERT INTO student (stuid, fname, email, classname) values (:id, :name, :email, :class)');

//$stmt->bindParam(':id','SV03');
//$stmt->bindParam(':name','Ho Hong Linh');
//$stmt->bindParam(':email', 'Linhhh@fpt.edu.vn');
//$stmt->bindParam(':class', 'GCD018');
//$stmt->execute();
//$sql = "INSERT INTO student(stuid, fname, email, classname) VALUES('SV02', 'Hong Thanh','thanhh@fpt.edu.vn','GCD018')";
$sql = "INSERT INTO receipt(receiptid, customerid, date)"
        . " VALUES('$_POST[receiptid]','$_POST[customerid]','$_POST[date]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[receiptid])) {
   echo "Receipt ID must be not null";
 }
 elseif (is_null($_POST[customerid])){
 
    echo "Customer ID must be not null";
 }
 
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</body>
</html>


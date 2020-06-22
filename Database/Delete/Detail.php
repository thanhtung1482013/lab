!DOCTYPE html>
<html>
<body>

<h1>Delete detail where receipt = 're01' and productid='pro07' in DATABASE</h1>

<?php
ini_set('display_errors', 1);
echo "Insert database!";
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-34-197-141-7.compute-1.amazonaws.com;user=purkgokhfnlcrr;password=071d455a1fd3a1a7269013027efa1e62d8411c8e2b6d1a9222b0a3cf7fef0a9a;dbname=d3ff804l29rka4",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

$sql = "DELETE FROM detail where receiptid = 're01' and productid = 'pro07'";
$stmt = $pdo->prepare($sql);
if($stmt->execute() == TRUE){
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: ";
}

?>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .table {
                     font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                     border-collapse: collapse;
  
}
            .table td, .table th {
              border: 1px solid #ddd;
              padding: 8px;
            }
            .table tr:nth-child(even){background-color: #f2f2f2;}

            .table tr:hover {background-color: #ddd;}
         .table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>
    </head>
<body>

<h1>DATABASE CONNECTION</h1>

<?php
ini_set('display_errors', 1);
echo "Hello Cloud computing class GCD0704!";
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     echo '<p>The DB exists</p>';
     echo getenv("dbname");
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

$sql = "SELECT * FROM detail order by receiptid";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
echo '<p>Detail information:</p>';

?>
<div id="container">
<table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th>Receipt ID</th>
        <th>Product ID</th>
        <th>Sold Quantity</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
      // tạo vòng lặp 
         //while($r = mysql_fetch_array($result)){
             foreach ($resultSet as $row) {
      ?>
   
      <tr>
        <td scope="row"><?php echo $row['receiptid'] ?></td>
        <td><?php echo $row['productid'] ?></td>
        <td><?php echo $row['soldquantity'] ?></td>
       
        
      </tr>
     
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

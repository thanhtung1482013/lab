<!DOCTYPE html>
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
        ltrim($db["path"], "/")));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}
?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       
      $expensions= array("jpeg","jpg","png");
       
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
      }
       
      if($file_size > 2097152) {
         $errors[]='Kích thước file không được lớn hơn 2MB';
      }
       
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "No error";
         // dua thong tin file vao csdl
         $name = $_FILES['file']['name'];
         $size = $_FILES['file']['size'];
         $type = $_FILES['file']['type'];
            $query = "INSERT INTO upload(name, size, type) VALUES ('$name', $size, '$type')";
            $stmt = $pdo->prepare($query);
            
                 if($stmt->execute() == TRUE){
                    echo "Upload file successfully.";
                    } 
                 else {
                     echo "Upload failed";
                 }
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
       
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
             
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
             
      </form>

</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                 background-image: linear-gradient( blue, orchid);
                 color: #000000;
            }
            a {
                text-decoration: none;
                color: blueviolet;
                font-family: monospace;
                transition: 0.4s;
                
            }
            a:hover {
                color: #7ef3ff;
                font-style: italic;
                
            }
            p{
                color : black;
                text-align: center;
            }
            
        
           
        </style>
    </head>
 

<body>
    
    <h1>Insert Customer DB:<a href="Database/Insert/InsertCustomer.php" target="_blank" title="Click to insert data to Customer Table"> Click here</a></h1>
    <h1>Insert Product DB:<a href="Database/Insert/InsertProduct.php" target="_blank" title="Click to insert data to Product Table"> Click here</a></h1>
    <h1>Insert Receipt DB:<a href="Database/Insert/InsertReceipt.php" target="_blank" title="Click to insert data to Receipt Table">Click here</a></h1>
    <h1>Insert Detail DB:<a href="Database/Insert/InsertDetail.php" target="_blank" title="Click to insert data to Detail Table"> Click here</a></h1>
    <p>Note: Insert to customer or product first then insert to receipt. Finally insert to detail. (foreign key)</p>
    
    
</body>
</html>

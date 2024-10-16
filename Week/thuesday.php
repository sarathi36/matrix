<?php 


require_once('db.php');

$selectemp = "select marketing,technical,support,total from employe where name = 'thuesday'";

$mondayemp = mysqli_query($connection,$selectemp);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>monday</title>
</head>
<body>

<div>
    <h1>Thuesday Working Employees </h1>
</div>

<table>
    <tr>
        <th>Marketing Team</th>
        <th>Technical Team</th>
        <th>Support Team</th>
        <th>Total Hour</th>
     </tr>

     <tr>
     <tr>
           
           <?php

           while($e = mysqli_fetch_assoc($mondayemp)){

           ?>
            <td > <?php echo $e['marketing']; ?> </td>
            <td> <?php echo $e['technical']; ?></td>
            <td> <?php echo $e['support']; ?></td>
            <td> <?php echo $e['total']; ?></td>
           

            
          
          
          
 
           <?php

           }
            ?>
     </tr>

</table>
    
</body>
</html>
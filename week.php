<?php

require_once('weekdb.php');

$select = 'select * from company';

$weekselect = mysqli_query($connection,$select);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">
    <title>demo</title>
</head>
<body>

<div>
    <h1>Total Week Hours</h1>
</div>

<table>
       <tr>
             <th>Sunday</th>
            <th>Monday</th>
            <th>Thusday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
           
            
        </tr>

        
        <tr>
           
           <?php

           while($w = mysqli_fetch_assoc($weekselect)){

           ?>
            <td > <?php echo $w['Sunday']; ?> </td>
            <td > <?php echo $w['Monday']; ?> </td>
            <td > <?php echo $w['Thusday']; ?> </td>
            <td > <?php echo $w['Wednesday']; ?> </td>
            <td > <?php echo $w['Thursday']; ?> </td>
            <td > <?php echo $w['Friday']; ?> </td>
            <td > <?php echo $w['Saturday']; ?> </td>

            
          
          
          
 
           <?php

           }
            ?>
      
        </tr>
</table>
    
</body>
</html>
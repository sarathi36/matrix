<?php

require_once('db.php');

 $emp1select = "select name,monday,thuesday,wednesday,thursday,friday,saturday,sunday,total from total where name = 'Employee 1'"; 

 $emp2select =  "select name,monday,thuesday,wednesday,thursday,friday,saturday,sunday,total from total where name = 'Employee 2'"; 

 $emp3select = "select name,monday,thuesday,wednesday,thursday,friday,saturday,sunday,total from total where name = 'Employee 3'";

 $emp4select = "select name,monday,thuesday,wednesday,thursday,friday,saturday,sunday,total from total where name = 'Employee 4'";



$emp = mysqli_query($connection,$emp1select);

$emp2 = mysqli_query($connection,$emp2select);

$emp3 = mysqli_query($connection,$emp3select);

$emp4 = mysqli_query($connection,$emp4select);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div>
    <h1>Total Values</h1>
</div>

<table>
    <tr>
            <th>Name</th>
            <th>Monday</th>
            <th>Thusday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
           
            <th>Total Hour</th>
    </tr>

    <tr>
    <?php
        $arr = array();
    while($h = mysqli_fetch_assoc($emp)){
        $arr[] = $h;

    ?>
         <td > <?php echo $h['name']; ?> </td>
         <td > <?php echo $h['monday']; ?> </td>
         <td > <?php echo $h['thuesday']; ?> </td>
         <td > <?php echo $h['wednesday']; ?> </td>
         <td > <?php echo $h['thursday']; ?> </td>
         <td > <?php echo $h['friday']; ?> </td>
         <td > <?php echo $h['saturday']; ?> </td>
         <td > <?php echo $h['sunday']; ?> </td>
         
         <td > <?php echo $h['total']; ?> </td>


<?php

}
 ?>
    </tr>

    <tr>
    <?php
        
    while($h = mysqli_fetch_assoc($emp2)){
       

    ?>
         <td > <?php echo $h['name']; ?> </td>
         <td > <?php echo $h['monday']; ?> </td>
         <td > <?php echo $h['thuesday']; ?> </td>
         <td > <?php echo $h['wednesday']; ?> </td>
         <td > <?php echo $h['thursday']; ?> </td>
         <td > <?php echo $h['friday']; ?> </td>
         <td > <?php echo $h['saturday']; ?> </td>
         <td > <?php echo $h['sunday']; ?> </td>
         
         <td > <?php echo $h['total']; ?> </td>


<?php

}
 ?>

    </tr>

    <tr>
    <?php
        
    while($h = mysqli_fetch_assoc($emp3)){
       

    ?>
         <td > <?php echo $h['name']; ?> </td>
         <td > <?php echo $h['monday']; ?> </td>
         <td > <?php echo $h['thuesday']; ?> </td>
         <td > <?php echo $h['wednesday']; ?> </td>
         <td > <?php echo $h['thursday']; ?> </td>
         <td > <?php echo $h['friday']; ?> </td>
         <td > <?php echo $h['saturday']; ?> </td>
         <td > <?php echo $h['sunday']; ?> </td>
         
         <td > <?php echo $h['total']; ?> </td>


<?php

}
 ?>

    </tr>

    <tr>
    <?php
        
    while($h = mysqli_fetch_assoc($emp4)){
       

    ?>
         <td > <?php echo $h['name']; ?> </td>
         <td > <?php echo $h['monday']; ?> </td>
         <td > <?php echo $h['thuesday']; ?> </td>
         <td > <?php echo $h['wednesday']; ?> </td>
         <td > <?php echo $h['thursday']; ?> </td>
         <td > <?php echo $h['friday']; ?> </td>
         <td > <?php echo $h['saturday']; ?> </td>
         <td > <?php echo $h['sunday']; ?> </td>
         
         <td > <?php echo $h['total']; ?> </td>


<?php

}
 ?>

    </tr>

    
</table>

<div>
    <h1>Remainig Employee Details upload soon</h1>
</div>
    
</body>
</html>
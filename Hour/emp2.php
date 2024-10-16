<?php

require_once('db.php');

$emp1select = "select sunday,monday,tuesday,wednesday,thursday,friday,saturday,team,total from work where name = '2'";

$emp = mysqli_query($connection,$emp1select);

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
    <h1>Employee 2 Work Hours</h1>
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
            <th>Team</th>
            <th>Total Hour</th>
    </tr>

    <tr>
    <?php

    while($h = mysqli_fetch_assoc($emp)){

    ?>
         <td > <?php echo $h['sunday']; ?> </td>
         <td > <?php echo $h['monday']; ?> </td>
         <td > <?php echo $h['tuesday']; ?> </td>
         <td > <?php echo $h['wednesday']; ?> </td>
         <td > <?php echo $h['thursday']; ?> </td>
         <td > <?php echo $h['friday']; ?> </td>
         <td > <?php echo $h['saturday']; ?> </td>
         <td > <?php echo $h['team']; ?> </td>
         <td > <?php echo $h['total']; ?> </td>



 




<?php

}
 ?>
    </tr>
</table>
    
</body>
</html>
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<script>
window.print();
</script>
<head>    
    <title>Report</title>
</head>

<body>
<h3 align="center"> Laporan </h3>

    <table width='80%' border=1 align="center">

    <tr>
        <th>Name</th> 
        <th>Mobile</th> 
        <th>Email</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";          
    }
    ?>
    </table>
</body>
</html>
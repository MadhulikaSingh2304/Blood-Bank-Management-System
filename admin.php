<?php
include_once('php/db.php');

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="Admin.css">
  <style>
    h1 {text-align: center;}
    h4 {text-align: center;}
</style>

</head>

<body>
    <h1>Welcome,Admin</h1>
        <h4>Below are the people who are registered</h4>
    <div class="signupFrm">
        <h3 class="title">Donor Information</h3>
        <table border="5">
            <tr>
                <th>Aadhar</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Street</th>
                <th>City</th>
                <th>Delete</th>
                
            </tr>
            <?php
           $sql = "Select * from `donor`";
           $result = $conn->query($sql);


           while($row = $result->fetch_assoc()){
             echo "<tr><td>". $row["aadhar"]."</td><td>". $row["fullname"]."</td><td>". $row["age"]."</td><td>".$row["gender"] ."</td><td>".$row["bgroup"] ."</td><td>".$row["street"] ."</td><td>".$row["city"] ."</td>"?>
             <form method="post" action="php/admin-delete.php">
        
            <td><button name="deletdonor" class="deletedonor" onclick="alert('Donor deleted successfully')">Delete Donor</button></td>
            </form>
                    <?php 
                    "</tr>";  
                    session_start();
                    $aadhar = $row['aadhar'];
                    $_SESSION['aadhar'] = $aadhar;
                    $bgroup = $row['bgroup'];
                    $_SESSION['bgroup'] = $bgroup;
           }
          echo "</table>" 
            ?>
        
        </table>
        <br><br>
        
       
        <br><br>
        <h3 class="title">Blood Stock</h3>
        <table border="5">
        <tr>
                <th>Blood Group</th>
                <th>Units</th>
            </tr>
            <tr>
                <td>A+</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='A+'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>B+</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='B+'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>AB+</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='AB+'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>O+</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='O+'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>A-</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='A-'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>B-</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='B-'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>AB-</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='AB-'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
            <tr>
                <td>O-</td>
                <td><?php
                $sql = "Select * from `bank` where bgroup='O-'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $row['units'];
                ?></td>
            </tr>
        </table>
     </div>
 </body>
  </html>




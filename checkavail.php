<?php
include_once('php/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Check Availablity</title>
  <link rel="stylesheet" href="checkavailstyle.css">

 
</head>
<body>
    <div class="signupFrm">
        <h1 class="title">Check Stocks</h1>
        <center><button name="check" id="check" class="checkbtn">Check</button></center>
        <br>
        <table border="3">
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
<?php
include_once('php/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Receiver Dashboard</title>
  <link rel="stylesheet" href="checkavailstyle.css">

 
</head>
<body>
    <div class="signupFrm">
        <h1 class="title">Check Stocks</h1>
        <center><input type="button" value="Check" id="check" class="checkbtn"></center>
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
        <br>
        <h2>See donors by Blood Group</h2>
        <p>Blood Group</p>
        <form action="receiverdashboard2.php" method="post">
            <select name = "bgroup" id="bgroup">
            <option value = "A+">A+</option>
            <option value = "A-">A-</option>
            <option value = "B+">B+</option>
            <option value = "B-" >B-</option>
            <option value = "AB+">AB+</option>
            <option value = "AB-">AB-</option>
            <option value = "O+">O+</option>
            <option value = "O-">O-</option>
            </select>
            <button value="Search" name="Search">Search</button>
        </form>

        <!--<div class="search">
             
            <form action="#">
                <input type="text"
                    placeholder=" Search Courses"
                    name="search">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 18px;">
                    </i>
                </button>
            </form>
        </div-->
<?php
session_start();
if(isset($_POST['Search'])){
      $bgroup = $_POST['bgroup'];
}
$_SESSION['bgroup'] = $bgroup; 

$sql = "Select * from `donor` where bgroup='$bgroup'";
        $result = $conn->query($sql);
            session_write_close();


?>


        <br>
        <table border="5">
            <tr>
                <th>Donar name</th>
                <th>Phone</th>
                <th>Blood Group</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Get Blood</th>
            </tr>
            <?php include_once('php/db.php');
             while($row = $result->fetch_assoc()){
                        echo "<tr><td>". $row["fullname"]."</td><td>". $row["aadhar"]."</td><td>". $row["bgroup"]."</td><td>".$row["age"] ."</td><td>".$row["gender"] ."</td>"?>
                        <form method="post" action="php/deletedonor2.php">
            
                <td><button name="getblood" class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
                </form>
                        <?php 
                        "</tr>"; 
                        session_start();
                        $aadhar = $row['aadhar'];
                        $_SESSION['aadhar'] = $aadhar;          
                      }
                     echo "</table>"  
                 ?>
            
        
        </table>
        
          
    </div>

</body>
</html>
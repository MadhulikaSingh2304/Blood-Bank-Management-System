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
        <form action="receiverdashboard.php" method="post">
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

switch ($bgroup) {
    case 'A+':
        $sql = "Select * from `donor` where bgroup='A+'";
        $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
        break;
        case 'B+':
            $sql = "Select * from `donor` where bgroup='B+'";
            $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
            break;
            case 'AB+':
                $sql = "Select * from `donor` where bgroup='AB+'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
                break;
                case 'O+': 
                    $sql = "Select * from `donor` where bgroup='O+'";
                    $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
                    break;
                    case 'A-':
                        $sql = "Select * from `donor` where bgroup='A-'";
                        $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();

                        break;
                        case 'B-':
                            $sql = "Select * from `donor` where bgroup='B-'";
                            $result = $conn->query($sql);
                $row1 = $result->fetch_assoc();
            
                            break;
                            case 'AB-':
                                $sql = "Select * from `donor` where bgroup='AB-'";
                                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
                                break;
                                case 'O-':
                                    $sql = "Select * from `donor` where bgroup='O-'";
                                    $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $row1 = $result->fetch_assoc();
                                                        break;

                                }
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
                <th></th>
            </tr>
            <tr>
                <td><?php
                echo $row['fullname'];
                ?></td>
                <td><?php
               session_start();
                $aadhar = $row['aadhar'];
                $_SESSION['aadhar'] = $aadhar; 

                echo $row['aadhar'];
                ?></td>
                <td><?php

                echo $row['bgroup'];
                ?></td>
                <td><?php
                echo $row['age'];
                ?></td>
                <td><?php
                echo $row['gender'];
                ?></td>
                <form method="post" action="php/deletedonor.php">
                <td><button name="getblood" class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
                </form>
               
            </tr>
            <tr>
            <td><?php
                echo $row1['fullname'];
                ?></td>
                <td><?php
                echo $row1['aadhar'];
                ?></td>
                <td><?php
                echo $row1['bgroup'];
                ?></td>
                <td><?php
                echo $row1['age'];
                ?></td>
                <td><?php
                echo $row1['gender'];
                ?></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="get-blood" onclick="alert('Blood Received successfully')">Get Blood</button></td>
            </tr>
            
        
        </table>
        
          
    </div>

</body>
</html>
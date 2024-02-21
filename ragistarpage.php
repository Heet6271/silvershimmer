<?php


include './connect.php';

if(isset($_POST['submit']))
    { 
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $birthdate = $_POST["birthdate"];
        $gender = $_POST["gender"];
        $mo1 = $_POST["mo1"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];
        
        // echo '<script>alert("EMAIL ALREADY EXISTS")</script>';
            if($password == $cpassword)
            {
                $sql = "INSERT INTO login(`fname`,`mname`,`lname`,`birthdate`,`gender`,`mo1`,
                `password`,`email`,`address`,`country`,`state`,`city`,`pincode`)
                VALUES('$fname','$mname','$lname','$birthdate','$gender','$mo1',
                '$password','$email','$address','$country','$state','$city','$pincode')";
             
                $query = mysqli_query($conn,$sql);
                // header('location:./login.php');
            }
            else{
                //header('location:./registration.php?error=PASSWORD DOES NOT MATCH');
                 echo '<script>alert("PASSWORD DOES NOT MATCH")</script>';
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE LAPTOP SHOPPING REGISTRATION</title>
    <link rel="icon" href="./imges/3.png">
    <link rel="stylesheet" href="./CSS/registration.css">
    <script src="./JS/registration.js"></script>
</head>
<body >
    <table border="0"  cellspacing="10" cellpadding="10">
        <tr>
            <th>
                    <u><h1 id="head"> REGISTRATION page</h1></u>
            </th>
            <td>
                <img src="./imges/1.png" height="110" width="120">
            </td>
        </tr>
    </table>
    <form name="registrationform" method="post" action="./registration.php">
        <table border="0"  cellspacing="10" cellpadding="10">
            <tr>
                <td>
                   <b> <label id="l1" >FIRST NAME : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" maxlength="25" minlength="1" id="t1" size="25" class="ip" name="fname" required/>
                </td>
                <td>
                    <b><label id="l2">MIDDLE NAME : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" maxlength="25" minlength="1" id="t2" size="25" class="ip" name="mname" required/>
                </td>
                <td>
                    <b><label id="l3">LAST NAME : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" maxlength="25" minlength="1" id="t3" size="25" class="ip" name="lname" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <b><label for="l4">YOUR BIRTH-DATE : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="date" id="t4" class="ip" name="birthdate" value="2021-01-01" required/>
                </td>
                <td>
                    <b><label for="l5">GENDER :   </label></b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="MF">M</label><input type="radio" id="t5" name="gender" value="MALE" checked="checked">
                    <label class="'MF">F</label><input type="radio" id="t5" name="gender" value="FEMALE">
                    <label class="'MF">O</label><input type="radio" id="t5" name="gender" value="OTHER">
                </td>
            </tr>
            <tr>
                <td>
                    <b><label id="l6">MOBILE NO. 1 : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" id="t6" minlength="10" maxlength="10" size="11" pattern="[0-9]+" class="ip" name="mo1" required/>
                </td>
                <td>
                    <b><label id="l6">PASSWORD: </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="password" id="t62" minlength="8" maxlength="20" size="11" class="ip" name="password" required/>
                </td>
                
            </tr>
            <tr>
            <td>
                    <b><label id="l6">CONFORM PASSWORD: </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="password" id="t61" minlength="8" maxlength="20" size="11" class="ip" name="cpassword" required/>
                </td>
                <td>
                    <b><label id="l7">EMAIL-ID : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="email" id="t7" class="ip" name="email" maxlength="50" required/>
                </td>
            </tr>
        </table>
        <table border="0"  cellspacing="10" cellpadding="10">
            <tr>
                <td>
                    <b><label id="l8">ADDRESS : </label></b><br><br>
                    <textarea rows="4" cols="80" id="t8" name="address" maxlength="150" minlength="5" required>
                       </textarea>
                </td>
                <td>
                    <img src="./imges/2.png" height="120" width="120">
                </td>
            </tr>
        </table>
        <table border="0"  cellspacing="10" cellpadding="10">
            <tr>
                <td>
                    <b><label id="l9">COUNTRY : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" id="t9" maxlength="25" minlength="2" size="25" class="ip" name="country" required/>
                </td>
                <td>
                    <b><label id="l10">STATE : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" id="t10" maxlength="25" minlength="2" size="25" class="ip" name="state" required/>
                </td>
            </tr>
                <tr>
                <td>
                    <b><label id="l11">CITY : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="text" id="t11" maxlength="25" minlength="2" size="25" class="ip" name="city" required/>
                </td>
                <td>
                    <b><label id="l12">POSTAL CODE : </label></b>&nbsp;&nbsp;&nbsp;
                    <input type="number" id="t12" maxlength="12" class="ip" name="pincode" required/>
                </td>
            </tr>
           
            </table>
        <table>
            <tr>
                <td>
                    &emsp;<button type="submit" id="submit1" value="SUBMIT" class="button" name="submit" onclick="getvalue()"><a href="index.php"> SUBMIT</a></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                </td>
                <td>
                    <select name="user-type" id="#">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </td>
                <input type="reset" value="RESET" class="button">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>



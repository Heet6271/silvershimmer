<html>
    <head>
        <title>Add product</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Add Product </h1>  
            </div>
            <hr>

                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Price" required><br><br>
                    <input type="text" name="desc" placeholder="desc" required>&nbsp
                    <input type="text" name="cdesc" placeholder="desc" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">V</option>
                            <option value="2">R</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
    </body>
</html>
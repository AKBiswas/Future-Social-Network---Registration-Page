<!DOCTYPE html>
<html>  <!-- this web site is designed and developed by Argha Kumar Biswas -->
<head>
    <title>Future Social Network</title>
    <meta name="description" contents="Simple registration page with HTML, CSS, BootStrap, JS, PHP and MySQL">
    <meta name="keyword" contents="HTML, CSS, JS, PHP, MySQL, registration page, registration page with php and mysql">
    <meta name="author" contents="Argha Kumar Biswas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    
    <style>
        body{
            background-image: url('img/hdimg.jpg');
            
            background-size: cover;
            
            
           
        }
        
        #reg{
            
             display: table;
             margin-top: 10%;
             margin-right: auto;
             margin-left: auto;
             border: 2px solid orange; 
             width: 400px;
             font-size: 1.42em;
        }
        
        .inpd{
           
             background-color: transparent;
             border-radius: 5px;
             margin-left: 25px;
             margin-bottom: 13px;
             width: 200px;
             height: 50px;
             color:  white;
             padding: 10px;
             font-size: 1.3em;
             
             
        }
        
        
        
        #hedbut{
            text-align: center;
            margin-top: 1%;
        }
        
       
        
        .a{
            
            margin-right: -5%;
            background-color: orange;
            padding: 15px 28px;
            font-size: 20px;
            cursor: pointer;
        }
        
        
        .b{
            
           
            margin-right: -10px;
            background-color: orange;
            padding: 15px 28px;
            font-size: 20px;
            cursor: pointer;
        }
        
        .c{
            background-color: orange;
            padding: 15px 28px;
            font-size: 20px;
            cursor: pointer;
        }
        
        .hed{
            text-align: center;
        }
        
        .inpd2{
            border-radius: 5px;
            width: 500px;
            height: 50px;
            margin: 5px;
            font-size: 1.3em;
            background-color: transparent;
            color:   white;
        }
        
        .sub{
            border-radius: 5px;
            width: 200px;
            height: 60px;
            margin-left: 50px;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        
        .res{
            border-radius: 5px;
            width: 200px;
            height: 60px;
            margin-right: 50px;
            font-size: 1.2em;
        }
        
        .gn {
            width:80px;
            height: 20px;
            transform: scale(1.5);
           
        }
        
        .dob{
          color: white;
          font-size: 25px;
        }
        
        
        #ftr{
          margin-top: 35px;
          color: white;
        }
    </style>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    <script>
        pc = 0;
        function chk()
        {
          x = document.getElementById("pwd");
          y = document.getElementById("pwd1");
          if(x.value == y.value)
          {
            y.style.backgroundColor = "yellow";
            return false;
          }
          else{
            pc = 1;
            y.style.backgorundColor = "red";
            y.focus;
            return false;
          }
        }
        
        
       
        
              
      
    </script>
    
    
    
    
    
</head>
<body>
   <div class="container"> 
    <div id="hedbut">
        <head>
          
          
            <img src="img/fsn.jpg"  style="opacity: 0.8; position: absolute; left: 0; top: 0; display: block; height: 55px;" alt="future social netwokr">
              
            <button class="a btn btn-default btn-lg pull-right">F.A.Q</button>
            <button class="b btn btn-default btn-lg pull-right">About</button>
            <button class="c btn btn-default btn-lg pull-right">Login</button>
            
        </head>
    </div>
    
    <div id="reg">
        <h1 class="hed" style="color: white;">Register Now!!!</h1>
        <div id="frm">
        <form action="register.php" method="POST">
                <input type="text" name="fnme" placeholder="First Name" class="inpd">
                <input type="text" name="lnme" placeholder="Last Name" class="inpd"><br>
               
                <input type="radio" name="gender" value="male" class="gn"> Male
                <input type="radio" name="gender" value="female" class="gn"> Female
                <input type="radio" name="gender" value="other" class="gn"> Other<br>
                <textarea placeholder="Hobbies" name="hob" rows="4" cols="60" style="font-size: 17px; background-color: transparent; color: white;"></textarea><br>
                <span class="dob">D.O.B<br></span>
                <input type="date" name="dob" placeholder="D.O.B" class="inpd2"><br>
                <input type="text"  name="phn" placeholder="Phone Number" class="inpd2"><br>
                <input type="email" name="em" placeholder="Email" class="inpd2"><br>
                <input type="password" name="pwd" placeholder="Password" class="inpd2" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
                <input type="password" name="repwd" placeholder="Re-type password" class="inpd2" id="pwd1" onkeyup="chk();" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
                <input type="submit" name="sub" value="Register Now" class="sub"> <input type="reset" name="res" value="Reset" class="res">
            
        </form>
        </div>
    </div>
    
    <div id="ftr">
      <footer>
        <p>This web site is designed and developed by Argha Kumar Biswas</p>
        <p>I know this web site isn't perfect so feel free to add and modify the code</p>
        <p>BUT don't forget to mention me and the source from where found this web site by sharing the link to my Github account</p>
      </footer>
    </div>
   </div>
   
   
</body>
</html>

<?php
    if(isset($_POST["fnme"]))
    {
        $fn = $_POST["fnme"];
        $ls = $_POST["lnme"];
        $gend = $_POST["gender"];
        $hobs = $_POST["hob"];
        $dob1 = $_POST["dob"];
        $ph = $_POST["phn"];
        $eml = $_POST["em"];
        $pswd = md5($_POST["pwd"]);
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user data";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO userdate VALUES ('$fn', '$ls', '$gend', '$hobs', $dob1, $ph, '$eml', '$pswd')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>

<?php 
   include ("config.php");
	session_start();
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
   			
		}else{
			echo "<script type='text/javascript'> document.location = 'login.php'; </script>";

		}

   error_reporting(E_ALL & ~E_NOTICE);
   $nameErr = $emailErr = $genderErr = "";
   
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["name"])) {
       $nameErr = "Name is required";
     } else {
       $name = test_input($_POST["name"]);
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
         $nameErr = "Only letters and white space allowed"; 
       }
     }
     
     if (empty($_POST["email"])) {
       $emailErr = "Email is required";
     } else {
       $email = test_input($_REQUEST["email"]);
       // check if e-mail address is well-formed
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
       }
     }
       
     if (empty($_POST["gender"])) {
       $genderErr = "Gender is required";
     } else {
       $gender = test_input($_POST["gender"]);
     }
   }
   	
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   
   
   if(isset($_POST['submit'])){
   		// echo "<pre>";
   		// print_r($_POST);
   		
      $path = 'uploads/';
      $imageName = time().$_FILES['image']['name'];
      $dir = $path.basename($imageName);
      if(file_exists($imageName) && $_FILES['image']['error']==0){
          echo 'sorry file exists';
      }
      else{
      	
      	}
     	move_uploaded_file($_FILES['image']['tmp_name'], $dir);
      $name = $_POST["name"];
      $surname = $_POST["surname"];
      $pass = $_POST["pass"];
      $cpass = $_POST["cpass"];
      $email = $_POST["email"];
      $image = $imageName;
      //$dob = $_POST["dob"];
      $dob = time();      
      $phone = $_POST["phone"];
      $gender = $_POST["gender"];
      $address = $_POST["address"];
      $city = $_POST["city"];
      $about =  mysql_real_escape_string($_POST['about']);
     
     
     $query ="INSERT INTO registration (name,surname,password,email,image,dob,phone,gender,city,address,about) VALUES 
     ('$name','$surname','$pass','$email','$image','$dob','$phone','$gender','$city','$address','".$about."')";
   
     //echo $query; die;
     
     	mysql_query($query);
     
     header("location:view.php"); 
     
   }
   ?>
<html>
   <head>
      <link rel="stylesheet" href="css/jquery-ui.css">
      <script src="js/jquery-1.12.0.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/custom.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   </head>
   <body style="background-color: #E4E4E4">
      <title>Register</title>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h2> Registration </h2>
               <form name="form1" id="f1" method="POST" enctype="multipart/form-data">
                  <div class="form-group"><label>Name:</label><input class="form-control" type="text" name="name" ><?php echo $nameErr;?></div>
                  <div class="form-group"><label>Surname:</label><input class="form-control" type="text" name="surname" ></div>
                  <div class="form-group"><label>Password:</label><input class="form-control" type="password" id="passfield" name="pass" ></div>
                  <div class="form-group">
                     <label>Confirm-password:</label><input class="form-control" type="password" name="cpass" id="cpassfield" onChange="checkPasswordMatch();">
                     <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                  </div>
                  <div class="form-group"><label>Email:</label><input class="form-control" type="text" name="email" ><?php echo $emailErr;?></div>
                  <div class="form-group"><label>Dob:</label><input id="datepicker" class="form-control" type="text" name="dob" ></div>
                  
                  <div class="form-group"><label>Image:</label><input class="form-control" type="file" onchange="loadFile(event)" name="image" ></div>

                  <img class="hide" id="blah" src="" width="150" />

                  <div class="form-group"><label>Phone:</label><input class="form-control" type="text" name="phone" ></div>
                  <div class="form-group"><label>Gender:</label>
                     <label>Male</label><input  type="radio" name="gender" value="male" >
                     <label>Female</label><input  type="radio" name="gender" value="female" >
                     <?php echo $genderErr;?>
                  </div>
                  <div class="form-group"><label>Address:</label><input class="form-control" type="text" name="address" ></div>
                  <div class="form-group"><label>City:</label><input class="form-control" type="text" name="city" ></div>
                  <div class="form-group"><label>About:</label>
                     <textarea class="form-control" name="about" placeholder="Enter text here..."></textarea>
                  </div>
                  <input class="btn btn-primary" type="submit" id="sbtn" name="submit" value="Register">
                  <a href="view.php"><input class="btn btn-primary" type="button" name="view" value="View Record"></a>
               </form>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>
<?php 
   include ('config.php');
 	session_start();
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
   			
		}else{
			echo "<script type='text/javascript'> document.location = 'login.php'; </script>";

		}
   
   	if(isset($_POST['update'])){
   			
   		$imageField = "";
   
   		if ($_FILES['image']['error']==0) {
   			$imageName = time().$_FILES['image']['name'];
   			$path = 'uploads/';
   			$dir = $path.basename($imageName);
   			if(move_uploaded_file($_FILES['image']['tmp_name'], $dir)){
   				$imageField = "image='".$imageName."',";
   				 $imageField; 
   			}else{
   				echo 'Your image is not update. please upload again';
   				echo $imageField = ""; die;
   			}
   		}
   
   		$name = $_POST["name"];
   		$surname = $_POST["surname"];
   		$image = $imageName;
   		$dob = strtotime($_POST["dob"]);
   		$phone = $_POST["phone"];
   		$gender = $_POST["gender"];
   		$address = $_POST["address"];
   		$city = $_POST["city"];
   		$about = mysql_real_escape_string($_POST["about"]);
   
   		$query ="UPDATE registration SET name='".$name."', surname='".$surname."', ".$imageField."  dob='".$dob."', phone='".$phone."',gender='".$gender."', city='".$city."', address='".$address."', about='".$about."' WHERE id=".$_GET['id'];//echo $query; die; 
   
   		$retval = mysql_query($query); 
   
   		if(! $retval ) {
   			die('Could not update data: ' . mysql_error());
   		}
   		header("location:view.php"); 
   		echo "Updated data successfully\n";
   	} 
   	
   	$query="SELECT * FROM registration WHERE id=".$_GET['id'];
   	$data = mysql_query($query);	
   	
   	while($row=mysql_fetch_assoc($data)){
   	
   	$maleCheck = ($row['gender'] == 'male') ? 'checked' : '';
   	$femaleCheck = ($row['gender'] == 'female') ? 'checked' : '';
   	
   	?>
<html>
   <head>
      <link rel="stylesheet" href="css/jquery-ui.css">
      <script src="js/jquery-1.12.0.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/custom.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body style="background-color: #E4E4E4">
      <title>Update Details</title>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h2> Update Details </h2>
               <form name="form1" id="f1" method="POST" enctype="multipart/form-data">
                  <div class="form-group"><label>Name:</label><input class="form-control" type="text" name="name" value="<?php echo $row['name']?>"></div>
                  <div class="form-group"><label>Surname:</label><input class="form-control" type="text" name="surname" value="<?php echo $row['surname']?>"></div>
                  <div class="form-group"><label>Dob:</label><input id="datepicker" class="form-control" type="text" name="dob" value="<?php echo date('m/d/Y', $row['dob']);?>" ></div>
                  <div class="form-group"><label>Image:</label>
 <input class="form-control" onchange="loadFile(event)" type="file" name="image" value="<?php echo $row['image']?>" >

                     <img src="uploads/<?php echo $row["image"]?>" id="old" width="150"/>
                     <img id="blah" class="hide" src="" width="150" />

                  </div>
                  <div class="form-group"><label>Phone:</label><input class="form-control" type="text" name="phone" value="<?php echo $row['phone']?>" ></div>
                  <div class="form-group"><label>Gender:</label>
                     <label>Male</label><input  type="radio" name="gender" value="male" <?php echo $maleCheck;?> >
                     <label>Female</label><input  type="radio" name="gender" value="female"  <?php echo $femaleCheck;?> >
                  </div>
                  <div class="form-group"><label>Address:</label><input class="form-control" type="text" name="address" value="<?php echo $row['address']?>" ></div>
                  <div class="form-group"><label>City:</label><input class="form-control" type="text" name="city" value="<?php echo $row['city']?>" ></div>
                  <div class="form-group"><label>About:</label>
                     <textarea class="form-control" name="about" ><?php echo htmlspecialchars($row['about']);?></textarea>
                  </div>
                  <input class="btn btn-primary" type="submit" id="sbtn" name="update" value="Update Record">
               </form>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>
<?php } ?>

//https://www.codespeedy.com/save-html-form-data-in-a-txt-text-file-in-php///

<!DOCTYPE HTML>  

<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  
    
/////////////////////Bring this to SignUp/////////////////////
    
    ///store data with name=""///
    <?php
              $name_error = '';
              if(isset($_POST['form1'])) {
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  
                  $email=$_POST['email'];
                  $pass=$_POST['password'];
                  $password= password_hash($pass,PASSWORD_DEFAULT);
                  $img=$_POST['myfile'];
                  $fp = fopen('accounts.db', 'a');
                  fwrite($fp, $fname,$lname,$email,$password,$img);
                  fclose($fp);
                  
                  ///Data validation & Email duplicate check///
                  if ($username == '') {
                      echo $name_error = '<span style="color:red">You must enter your name.</span>';
                      return false;
                  } else {
                      $name_error = '';
                  }
                  if ($email == '') {
                      echo $email_error = '<span style="color:red">You must enter your email.</span>';
                      return false;
                  } elseif ($email == file(accounts.db,,$email) {
                      echo "Email ID already registered.";
                  } else {
                      $email_error = '';
                  }
                  if ($password == '') {
                      echo $password_error = '<span style="color:red">You must enter password.</span>';
                      return false;
                  } else {
                      $password_error = '';
                  }
                  //set allowed types as array
                  $allowed = array('jpg', 'png', 'jpeg');
                  //get uploaded file extension
		          $file = $_FILES['myfile']['name'];
                  $ext = pathinfo($file, PATHINFO_EXTENSION);
 //check if extension is allowed
		          if(in_array($ext, $allowed)){
			//action if type is allowed
			      $_SESSION['success'] = 'File type allowed';
                  } else {
			//action if type is not allowed
			      $_SESSION['error'] = 'File type not allowed';
                  }
              }
    ?>
    
    
    
/////////////////////////////
    
    
    <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Please enter a valid name";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
        
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

////////////////////    
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        FullName: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail address: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="2" cols="10"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
            <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
 //////////////////////
 
    
</body>

</html>

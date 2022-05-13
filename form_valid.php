//https://www.simplilearn.com/tutorials/php-tutorial/php-form-validation//
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
    ///email validation///
    <form name="form1" action="#"> 
Email: <input type='text' name='email'/></br></br>
<input type="submit" name="submit" value="Submit" onclick="validateEmail(document.form1.email)"/>
</form>

    <script> 
        function validateEmail(emailId) {
            var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(emailId.value.match(mailformat)) {
                document.form1.text1.focus();
                return true;
        } else {
            alert("Invalid email address.");
            document.form1.text1.focus();
            return false;
        }
        }
        function
    </script>
    
    ///store data with name=""///
    <?php
              if(isset($_POST['fname','lname','email','password','file'])) {
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  $email=$_POST['email'];
                  $pass=$_POST['password'];
                  $password= password_hash($pass,PASSWORD_DEFAULT);
                  $img=$_POST['file'];
                  $fp = fopen('accounts.db', 'a');
                  fwrite($fp, $fname,$lname,$email,$password,$img);
                  fclose($fp);
                  if ($email == '') {
                      echo $email_error = '<span style="color:red">You must enter your email.</span>';
                      return false;
                  } else {
                      $email_error = '';
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

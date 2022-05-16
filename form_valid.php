
//https://www.codespeedy.com/save-html-form-data-in-a-txt-text-file-in-php///


    
/////////////////////Bring this to SignUp/////////////////////
    
    ///store data with name=""///
    <?php
	session_start();
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


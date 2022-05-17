<?php

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';

// sanitize and validate name
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;

if ($name) {
    $name = trim($name);
    if ($name === '') {
        $errors['name'] = NAME_REQUIRED;
    }
} else {
    $errors['name'] = NAME_REQUIRED;
}


// sanitize & validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if ($email) {
    // validate email
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = EMAIL_INVALID;
    }
} else {
    $errors['email'] = EMAIL_REQUIRED;
}
?>

<?php if (count($errors) === 0) : ?>
    <section>
        <h2>
            Thanks <?php echo htmlspecialchars($name) ?> for your subscription!
        </h2>
        <p>Please follow the steps below to complete your subscription:</p>
        <ol>
            <li>Check your email (<?php echo htmlspecialchars($email) ?>) - Find the message sent from webmaster@phptutorial.net</li>
            <li>Click to confirm - Click on the link in the email to confirm your subscription.</li>
        </ol>
    </section>

<?php endif ?>



//https://www.codespeedy.com/save-html-form-data-in-a-txt-text-file-in-php///

    
/////////////////////Bring this to SignUp/////////////////////
    
    ///store data with name=""///
<?php
	session_start();
              $name_error = '';
              if(isset($_POST['form1'])) {
                $fname = htmlspecialchars($_POST['fname']);
                $lname=htmlspecialchars($_POST['lname']);
                
                $email=htmlspecialchars($_POST['email']);
                $pass=htmlspecialchars($_POST['password']);
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


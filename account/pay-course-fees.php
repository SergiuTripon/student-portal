<?php
include '../includes/signin.php';

if (isset($_SESSION['userid']))
$userid = $_SESSION['userid'];
else $userid = '';



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../assets/js-paths/pacejs-js-path.php'; ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/favicon/favicon.ico">

    <title>Student Portal | Pay Course Fees</title>

    <?php include '../assets/css-paths/common-css-paths.php'; ?>

</head>

<body>

	<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>

    <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'student') : ?>
		
	<div class="container">

    <?php include '../includes/menus/portal_menu.php'; ?>

    <ol class="breadcrumb">
    <li><a href="../../overview/">Overview</a></li>
	<li><a href="../../account/">Account</a></li>
    <li class="active">Pay course fees</li>
    </ol>
	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Pay course fees</a>
    </h4>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    
	<div class="panel-body">
	
	<!-- Pay course fees -->
	<div class="content-panel" style="border: none;">
	
    <form class="form-custom" style="max-width: 700px; padding-top: 0px;" action="https://student-portal.co.uk/includes/paypal_process.php?sandbox=1" method="post" name="paycoursefees_form" id="paycoursefees_form" novalidate>

    <?php
    if (!empty($conditional_style)) {
		echo $conditional_style;
    }
    ?>

    <p id="error" class="feedback-sad text-center"></p>

	<!-- Hidden fields -->
	<input type="hidden" name="payment" value="process"/>
    <input type="hidden" name="product_id" id="product_id" value="1">
    <input type="hidden" name="product_quantity" id="product_quantity" value="1">
    <input type="hidden" name="payer_email" id="payer_email" value="<?php echo $email; ?>">
    <input type="hidden" name="payer_phonenumber" id="payer_phonenumber" value="<?php echo $phonenumber; ?>">
    <input type="hidden" name="payer_address2" id="payer_address2" value="<?php echo $address2; ?>">
	<input type="hidden" name="payer_town" id="payer_town" value="<?php echo $town; ?>">
	<!-- End of Hidden fields -->
	
    <div class="form-group">
	
    <div class="col-xs-6 col-sm-6 full-width">
    <label>First Name</label>
    <input class="form-control" type="text" name="payer_firstname" id="payer_firstname" value="<?php echo $firstname; ?>" placeholder="First Name" readonly="readonly">
    <label>Surname</label>
    <input class="form-control" type="text" name="payer_surname" id="payer_surname" value="<?php echo $surname; ?>" placeholder="Surname" readonly="readonly">
    <label>Half or Full fees</label>
    <input class="form-control" type="text" name="product_name" id="product_name" value="<?php echo $fee_title; ?>" placeholder="Product Name" readonly="readonly">
	<label>Amount due (&pound;)</label>
    <input class="form-control" type="text" name="product_amount" id="product_amount" value="<?php echo $fee_amount; ?>" placeholder="Amount" readonly="readonly">
	</div>

    <div class="col-xs-6 col-sm-6 full-width mb10">
    <label>Address line 1</label>
    <input class="form-control" name="payer_address1" id="payer_address1" value="<?php echo $address1; ?>" placeholder="Address 1">
    <label>City</label>
	<input class="form-control" name="payer_city" id="payer_city" value="<?php echo $city; ?>" placeholder="City">
    <label>Country</label>
    <input class="form-control" name="payer_country" id="payer_country" value="United Kingdom" placeholder="Country" readonly="readonly">
    <label>Post code</label>
    <input class="form-control" name="payer_postcode" id="payer_postcode" value="<?php echo $postcode; ?>" placeholder="Post Code">
	</div>

    </div>

    <div class="checkbox ml5">
    <label><input type="checkbox" name="half-fees" id="half-fees" value="half-fees"> Pay half of the fee amount</label>
    </div>

    <div class="text-right">
    <button id="FormSubmit" class="btn btn-custom btn-lg ladda-button mr5" data-style="slide-up" data-spinner-color="#FFA500"><span class="ladda-label">Pay with PayPal</span></button>
	</div>

    </form>

    </div><!-- /content-panel -->
    <!-- End of Pay course fees -->
	
	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
    </div><!-- /panel-default -->
	</div><!-- /panel-group -->
	
	
    </div><!-- /container -->
	
	<?php include '../includes/footers/portal_footer.php'; ?>

    <!-- Sign Out (Inactive) JS -->
    <script src="https://student-portal.co.uk/assets/js/custom/sign-out-inactive.js"></script>
		
    <?php else : ?>

    <header class="intro">
	<div class="intro-body">
               
	<form class="form-custom orange-form">

    <div class="orange-logo animated fadeIn delay1">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr class="mt10 orange-hr">

    <p class="error text-center">You need to have a student account to access this area.</p>

    <hr class="orange-hr">

    <div class="text-center">
    <a class="btn btn-orange btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="/overview/"><span class="ladda-label">Overview</span></a>
    </div>

    </form>
	
    </div><!-- /intro-body -->
    </header>

    <!-- Sign Out (Inactive) JS -->
    <script src="https://student-portal.co.uk/assets/js/custom/sign-out-inactive.js"></script>

    <?php endif; ?>
	<?php else : ?>

    <style>
    html, body {
		height: 100% !important;
	}
    </style>

    <header class="intro">
    <div class="intro-body">
	
    <form class="form-custom orange-form">

	<div class="logo-custom animated fadeIn delay1">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr class="mt10 hr-custom">
    <p class="feedback-sad text-center">Looks like you're not signed in yet. Please sign in before accessing this area.</p>
    <hr class="hr-custom">

    <div class="text-center">
    <a class="btn btn-custom btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="/"><span class="ladda-label">Sign In</span></a>
	</div>
	
    </form>

    </div><!-- /intro-body -->
    </header>

	<?php endif; ?>

    <?php include '../assets/js-paths/common-js-paths.php'; ?>
	
	<script>
    Ladda.bind('.ladda-button', {timeout: 2000});
	</script>
	
	<script>
    $(document).ready(function () {
    $('#half-fees').click(function () {
    if ($('#half-fees').is(':checked')) {
        $('input[name=product_amount]').val('4500.00');
        $('input[name=product_name]').val('Half Fees');
    } else {
        $('input[name=product_amount]').val('9000.00');
        $('input[name=product_name]').val('Full Fees');
    }
    });
    });
	</script>
	
	<script>
	
	val = $("#payer_firstname").val();
	if(val === '') { $("#payer_firstname").css("border-color", "#FF5454"); }
	val = $("#payer_surname").val();
	if(val === '') { $("#payer_surname").css("border-color", "#FF5454"); }
	val = $("#product_name").val();
	if(val === '') { $("#product_name").css("border-color", "#FF5454"); }
	val = $("#product_amount").val();
	if(val === '') { $("#product_amount").css("border-color", "#FF5454"); }
	val = $("#payer_address1").val();
	if(val === '') { $("#payer_address1").css("border-color", "#FF5454"); }
	val = $("#payer_city").val();
	if(val === '') { $("#payer_city").css("border-color", "#FF5454"); }
	val = $("#payer_postcode").val();
	if(val === '') { $("#payer_postcode").css("border-color", "#FF5454"); }
	
	</script>
	
	<script>
	$(document).ready(function() {
    $("#FormSubmit").click(function (e) {
    e.preventDefault();
	
	var hasError = false;

    payer_address1 = $('#payer_address1').val();
	if (payer_address1 === '') {
        $("#error").empty().append("Please select the first line of an address.");
		$("#payer_address1").css("border-color", "#FF5454");
		hasError  = true;
		return false;
	} else {
		$("#error").hide();
		$("#payer_address1").css("border-color", "#4DC742");
	}

    payer_city = $("#payer_city").val();
	if(payer_city === '') {
		$("#error").show();
        $("#error").empty().append("Please enter a city.");
		$("#payer_city").css("border-color", "#FF5454");
		hasError  = true;
		return false;
    } else {
		$("#error").hide();
		$("#payer_city").css("border-color", "#4DC742");
	}

    payer_postcode = $("#payer_postcode").val();
	if(payer_postcode === '') {
		$("#error").show();
        $("#error").empty().append("Please enter a postcode.");
		$("#payer_postcode").css("border-color", "#FF5454");
		hasError  = true;
		return false;
    } else {
		$("#error").hide();
		$("#payer_postcode").css("border-color", "#4DC742");
	}
	
	if(hasError == false) {
	
	$("#paycoursefees_form").submit();
	
    }
	
	return true;
	
	});
	});
	</script>
	
</body>
</html>

<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'assets/js-paths/pacejs-js-path.php'; ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include 'assets/css-paths/common-css-paths.php'; ?>

    <title>Student Portal</title>

    <style>
    #signin {
        color: #FFFFFF;
        background-color: #C9302C;
    }
    </style>

</head>

<body>
	
	<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>

    <div class="container">

    <form class="form-custom">

    <div class="form-logo">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr class="hr-custom">

    <p class="feedback-sad text-center">You are already logged in. You don't have to log in again.</p>

    <hr class="hr-custom">

	<div class="pull-left">
    <a class="btn btn-success btn-lg ladda-button" data-style="slide-up" href="overview/"><span class="ladda-label">Overview</span></a>
    </div>
	
    <div class="text-right">
    <a class="btn btn-danger btn-lg ladda-button" data-style="slide-up" href="sign-out/"><span class="ladda-label">Sign Out</span></a>
    </div>

    </form>

    </div>

    <!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/sign-out-inactive.js"></script>

	<?php else : ?>

    <?php include 'includes/menus/menu.php'; ?>

    <div class="container"><!-- container -->

    <form class="form-custom" name="signin_form" id="signin_form">

    <div class="form-logo">
	<i class="fa fa-graduation-cap"></i>
    </div>

    <hr class="hr-custom">

    <p id="error" class="feedback-sad text-center"></p>
	
    <label>Email address</label>
    <input class="form-control" type="email" name="email" id="email" placeholder="Enter an email address">
    <p id="error1" class="feedback-sad text-center"></p>

    <label>Password</label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Enter a password">
    <p id="error2" class="feedback-sad text-center"></p>

    <div class="text-right">
    <a class="forgot-password" href="forgotten-password/">Forgotten your password?</a>
    </div>

    <hr class="hr-custom">

    <div class="pull-left">
    <a class="btn btn-success btn-lg ladda-button" data-style="slide-up" href="register/"><span class="ladda-label">Register</span></a>
    </div>

    <div class="text-right">
    <button id="FormSubmit" class="btn btn-primary btn-lg ladda-button" data-spinner-color="#333333" data-style="slide-up"><span class="ladda-label">Sign In</span></button>
	</div>

    </form>

    </div><!-- ./container -->

    <?php include 'includes/footers/footer.php'; ?>

	<?php endif; ?>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>
    <?php include 'assets/js-paths/easing-js-path.php'; ?>
    <?php include 'assets/js-paths/tilejs-js-path.php'; ?>

	<script>
    $(document).ready(function() {

    //Ladda
    Ladda.bind('.ladda-button', {timeout: 2000});

    //Ajax call
    $("#FormSubmit").click(function (e) {
    e.preventDefault();
	
	var hasError = false;
	
	var email = $('#email').val();
	if (email === '') {
        $("#error1").empty().append("Please enter an email address.");
		$("#email").addClass("error-style");
		hasError  = true;
		return false;
	} else {
		$("#error1").hide();
		$("#email").addClass("success-style");
	}
	
	var password = $("#password").val();
	if(password === '') {
		$("#error2").show();
        $("#error2").empty().append("Please enter a password.");
		$("#password").addClass("error-style");
		hasError  = true;
		return false;
    } else {
		$("#error2").hide();
		$("#password").addClass("success-style");
	}
	
	if(hasError == false){
    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
    data:'email=' + email + '&password=' + password,
    success:function(){
		window.location = '../overview/';
    },
    error:function (xhr, ajaxOptions, thrownError){
		$("#error").show();
        $("#error").empty().append(thrownError);
    }
	});
    }
	
	return true;
	
	});
	});
	</script>

</body>
</html>

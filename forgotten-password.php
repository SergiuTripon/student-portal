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
    <link rel="icon" href="../assets/img/favicon/favicon.ico">

    <title>Student Portal | Forgotten Password</title>

    <?php include 'assets/css-paths/common-css-paths.php'; ?>
	
</head>

<body>
	
	<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>

    <header><!-- Header -->
    <div class="wrapper"><!-- Wrapper -->

    <form class="form-custom">

    <div class="logo-custom">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>

    <p class="feedback-sad text-center">You are already signed in which means you haven't forgotten your password. <br><br>If you have, you can sign out and access the "Forgotten your password?" facility.</p>

    <hr>

    <div class="pull-left">
    <a class="btn btn-success btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="overview/"><span class="ladda-label">Overview</span></a>
    </div>
	
    <div class="text-right">
    <a class="btn btn-danger btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="../sign-out/"><span class="ladda-label">Sign Out</span></a>
    </div>

    </form>

    </div><!-- End of Wrapper -->
    </header><!-- End of Header -->

    <!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/sign-out-inactive.js"></script>

	<?php else : ?>

    <?php include 'includes/menus/menu.php'; ?>

    <header><!-- Header -->
    <div class="wrapper">

    <form method="post" name="forgotpassword_form">


    </form>
    </div>
    </header><!-- End of Header -->

	<?php endif; ?>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>
    <?php include 'assets/js-paths/easing-js-path.php'; ?>
    <?php include 'assets/js-paths/tilejs-js-path.php'; ?>

	<script>
    $(document).ready(function() {

    //Ladda
    Ladda.bind('.ladda-button', {timeout: 1000});

    //Ajax call
    $("#FormSubmit").click(function (e) {
    e.preventDefault();
	
	var hasError = false;
	
	var email2 = $("#email").val();
	if(email2 === '') {
		$("#error1").show();
        $("#error1").empty().append("Please enter an email address.");
		$("#email").addClass("error-style");
		hasError  = true;
		return false;
	} else {
        $("#error1").hide();
        $("#email").addClass("success-style");
    }
	
	if(hasError == false){
    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
    data:'email2=' + email2,
    success:function(){
        $("#error").hide();
		$("#hide").hide();
        $("label").hide();
        $("#email").hide();
		$("#register-button").hide();
		$("#FormSubmit").hide();
		$("#success").append('Please check your email account for instructions to reset your password.');
		$("#success-button").show();
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

<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'assets/meta-tags.php'; ?>

    <?php include 'assets/css-paths/common-css-paths.php'; ?>

    <title>Student Portal | Contact</title>

    <style>
    #contact {
        border-radius: 3px;
        background-color: #735326;
    }
    #contact a {
        color: #FFFFFF;
    }
    #contact a:focus, #contact a:hover {
        color: #FFFFFF;
    }
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>

    <?php include 'includes/menus/portal_menu.php'; ?>

    <div class="container">

    <form class="form-custom">

    <div class="form-logo text-center">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>

    <p class="feedback-sad text-center">You are already logged in. You don't have to log in again.</p>

    <hr>

	<div class="pull-left">
    <a class="btn btn-custom btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="overview/"><span class="ladda-label">Overview</span></a>
    </div>

    <div class="text-right">
    <a class="btn btn-custom btn-lg ladda-button" data-style="slide-up" data-spinner-color="#FFA500" href="sign-out/"><span class="ladda-label">Sign Out</span></a>
    </div>

    </form>

    </div>

    <?php include 'includes/footers/footer.php'; ?>

    <!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/sign-out-inactive.js"></script>

	<?php else : ?>

    <?php include 'includes/menus/menu.php'; ?>

    <!-- Contact -->
    <div id="contact-showcase" class="container"><!-- container -->

    <h1 class="text-center">Contact</h1>
    <hr class="hr-small">

	<form class="form-custom" style="max-width: 700px;">

    <p id="success" class="feedback-happy text-center"></p>
    <p id="error" class="feedback-sad text-center"></p>

    <div id="hide">

	<div class="form-group">
	<div class="col-xs-4 col-sm-4 full-width pl0">
	<input class="form-control" type="text" name="firstname" id="firstname" placeholder="First name">
    </div>
	</div>

	<div class="form-group">
	<div class="col-xs-4 col-sm-4 full-width">
    <input class="form-control" type="text" name="surname" id="surname" placeholder="Surname">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-4 col-sm-4 full-width pr0">
    <input class="form-control" type="email" name="email" id="email" placeholder="E-mail address">
	</div>
	</div>
    <p id="error1" class="feedback-sad text-center"></p>

	<div class="form-group">
	<div class="col-xs-12 col-sm-12 full-width pr0 pl0">
	<textarea class="form-control" rows="8" name="message" id="message" placeholder="Message"></textarea>
	</div>
	</div>
    <p id="error2" class="feedback-sad text-center"></p>

    <hr>

    <div class="text-center">
    <button id="FormSubmit" class="btn btn-primary btn-lg ladda-button" data-style="slide-up"><span class="ladda-label">Contact us</span></button>
	</div>

    </div>

    </form>

    </div><!-- /.container -->

	<!-- Social -->
	<div id="social-showcase" class="container text-center"><!-- container -->

    <hr>

    <a href="https://facebook.com/triponsergiu" target="_blank"><i class="fa fa-facebook-square"></i></a>
    <a href="https://twitter.com/SergiuTripon" target="_blank"><i class="fa fa-twitter-square"></i></a>
    <a href="https://www.linkedin.com/in/triponsergiu"><i class="fa fa-linkedin-square" target="_blank"></i></a>

	</div><!-- /.container -->

    <?php include 'includes/footers/footer.php'; ?>

	<?php endif; ?>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>
    <?php include 'assets/js-paths/easing-js-path.php'; ?>

	<script>
    $(document).ready(function() {

    //Ladda
    Ladda.bind('.ladda-button', {timeout: 2000});

    //Ajax call
    $("#FormSubmit").click(function (e) {
    e.preventDefault();

	var hasError = false;

	var firstname = $('#firstname').val();
	if (firstname === '') {
        $("#error1").empty().append("Please enter a first name.");
		$("#firstname").addClass("error-style");
		hasError  = true;
        return false;
	} else {
		$("#error1").hide();
		$("#firstname").addClass("success-style");
	}

	var surname = $("#surname").val();
    if(surname === '') {
        $("#error1").show();
        $("#error1").empty().append("Please enter a surname.");
        $("#surname").addClass("error-style");
        hasError  = true;
        return false;
    } else {
        $("#error1").hide();
        $("#surname").addClass("success-style");
    }

    var email = $("#email").val();
    if(email === '') {
        $("#error1").show();
        $("#error1").empty().append("Please enter an email address.");
        $("#email").addClass("error-style");
        hasError  = true;
        return false;
    } else {
        $("#error1").hide();
        $("#email").addClass("success-style");
    }

    var message = $("#message").val();
    if(message === '') {
        $("#error2").show();
        $("#error2").empty().append("Please enter a message.");
        $("#message").addClass("error-style");
        hasError  = true;
        return false;
    } else {
        $("#error2").hide();
        $("#message").addClass("success-style");
    }

	if(hasError == false){
    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
    data:'firstname4=' + firstname + '&surname4=' + surname + '&email7=' + email + '&message=' + message,
    success:function(){
        $("#error").hide();
        $("#hide").hide();
        $("#success").show();
        $("#success").append('Thank you for contacting us.<br>We will check your message and reply as soon as possible.');
    },
    error:function (xhr, ajaxOptions, thrownError){
        $("#success").hide();
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
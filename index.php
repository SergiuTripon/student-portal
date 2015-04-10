<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'assets/meta-tags.php'; ?>

    <title>Student Portal</title>

    <style>
    #signin a {
        color: #FFFFFF;
        background-color: #992320;
    }
    #signin a:focus, #signin a:hover {
        color: #FFFFFF;
        background-color: #992320;
    }
    </style>

</head>

<body>

	<div class="preloader"></div>

	<?php if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) : ?>

    <?php include 'assets/css-paths/common-css-paths.php'; ?>

    <?php include 'includes/menus/portal_menu.php'; ?>

    <div class="container">

    <form class="form-horizontal form-custom">

    <div class="form-logo text-center">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>
    <p class="feedback-sad text-center">You are already logged in. You don't have to log in again.</p>
    <hr>

	<div class="pull-left">
    <a class="btn btn-success btn-lg" href="home/">Home</span></a>
    </div>
	
    <div class="text-right">
    <a class="btn btn-danger btn-lg" href="sign-out/">Sign Out</span></a>
    </div>

    </form>

    </div>

    <?php include 'includes/footers/footer.php'; ?>

    <!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/sign-out-inactive.js"></script>

    <?php include 'assets/js-paths/common-js-paths.php'; ?>



    <?php else : ?>

    <?php include 'includes/menus/menu.php'; ?>

    <div class="container">

    <form class="form-horizontal form-custom" name="signin_form" id="signin_form">

    <div class="form-logo text-center">
	<i class="fa fa-graduation-cap"></i>
    </div>

    <hr>

    <p id="error" class="feedback-sad text-center"></p>

    <div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
    <label for="email">Email address</label>
    <input class="form-control" type="email" name="email" id="email" placeholder="Enter an email address">
    </div>
    </div>

    <div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Enter a password">
    </div>
    </div>

    <div class="text-right">
    <a class="forgot-password" href="forgotten-password/">Forgotten your password?</a>
    </div>

    <hr>

    <div class="pull-left">
    <a class="btn btn-info btn-lg btn-load" href="register/">Register</span></a>
    </div>

    <div class="text-right">
    <a id="FormSubmit" class="btn btn-primary btn-lg">Sign in</a>
	</div>

    </form>

    </div>

    <?php include 'includes/footers/footer.php'; ?>
    
    <?php include 'assets/js-paths/common-js-paths.php'; ?>

    <script>

    //Sign In
    $("#FormSubmit").click(function (e) {
    e.preventDefault();

    var hasError = false;

	var email = $('#email').val();
	if (email === '') {
        $("label[for='email']").empty().append("Please enter an email address.");
        $("label[for='email']").removeClass("feedback-happy");
        $("label[for='email']").addClass("feedback-sad");
        $("#email").removeClass("input-happy");
        $("#email").addClass("input-sad");
        $("#email").focus();
		hasError  = true;
        return false;
	} else {
        $("label[for='email']").empty().append("All good!");
        $("label[for='email']").removeClass("feedback-sad");
        $("label[for='email']").addClass("feedback-happy");
        $("#email").removeClass("input-sad");
        $("#email").addClass("input-happy");
	}

	var password = $("#password").val();
	if(password === '') {
        $("label[for='password']").empty().append("Please enter a password.");
        $("label[for='password']").removeClass("feedback-happy");
        $("label[for='password']").addClass("feedback-sad");
        $("#password").removeClass("input-happy");
        $("#password").addClass("input-sad");
        $("#password").focus();
		hasError  = true;
        return false;
    } else {
        $("label[for='password']").empty().append("All good!");
        $("label[for='password']").removeClass("feedback-sad");
        $("label[for='password']").addClass("feedback-happy");
        $("#password").removeClass("input-sad");
        $("#password").addClass("input-happy");
	}

	if(hasError == false){

    $('.btn-primary').data('loading-text', 'Loading...').button('loading');

    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
    data:'email=' + email + '&password=' + password,
    success:function(){
        $("#error").show();
		window.location = '../home/';
    },
    error:function (xhr, ajaxOptions, thrownError){
        $("#success").hide();
		$("#error").show();
        $("#error").empty().append(thrownError);
        $('.btn-primary').button('reset');
    }
	});
    }

	return true;

	});
	</script>

	<?php endif; ?>

</body>
</html>

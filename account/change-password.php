<?php
include '../includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	<?php include '../assets/meta-tags.php'; ?>

    <title>Student Portal | Change password</title>

    <?php include '../assets/css-paths/common-css-paths.php'; ?>

</head>

<body>

	<div class="preloader"></div>

	<?php if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) : ?>

    <div class="container">
	<?php include '../includes/menus/portal_menu.php'; ?>

    <ol class="breadcrumb breadcrumb-custom">
    <li><a href="../../home/">Home</a></li>
	<li><a href="../../account/">Account</a></li>
    <li class="active">Change password</li>
    </ol>
	
	<!-- Change Password -->
	<form class="form-horizontal form-custom" style="max-width: 100%;" name="change-password-form">

    <p id="error" class="feedback-danger text-center"></p>
    <p id="error1" class="feedback-danger text-center"></p>
	<p id="success" class="feedback-success text-center"></p>
	
    <div id="hide">

    <div class="form-group">
	<div class="col-xs-12 col-sm-12 full-width">
    <label for="oldpwd">Old password<span class="field-required">*</span></label>
    <input class="form-control" type="password" name="oldpwd" id="oldpwd" placeholder="Enter your old password">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
    <label for="password">New password<span class="field-required">*</span></label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Enter a new password">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
    <label for="confirmpwd">Confirm new password<span class="field-required">*</span></label>
    <input class="form-control" type="password" name="confirmpwd" id="confirmpwd" placeholder="Enter the new password again">
	</div>
	</div>

	<hr>

    <div class="text-center">
    <button id="change-password-submit" class="btn btn-primary btn-lg btn-load">Change password</button>
    </div>

    </div>

    </form>
            
	</div><!-- /container -->
	
	<?php include '../includes/footers/footer.php'; ?>
    <?php include '../assets/js-paths/common-js-paths.php'; ?>

    <script>
	//Change password process
    $("#change-password-submit").click(function (e) {
    e.preventDefault();

	var hasError = false;

    //Checking if oldpwd is inputted
    var oldpwd = $("#oldpwd").val();
	if(oldpwd === '') {
        $("label[for='oldpwd']").empty().append("Please enter your old password.");
        $("label[for='oldpwd']").removeClass("feedback-success");
        $("label[for='oldpwd']").addClass("feedback-danger");
        $("#oldpwd").removeClass("input-success");
        $("#oldpwd").addClass("input-danger");
        $("#oldpwd").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='oldpwd']").empty().append("All good!");
        $("label[for='oldpwd']").removeClass("feedback-danger");
        $("label[for='oldpwd']").addClass("feedback-success");
        $("#oldpwd").removeClass("input-danger");
        $("#oldpwd").addClass("input-success");
	}

    //Checking if password is inputted
	var password = $("#password").val();
	if(password === '') {
        $("label[for='password']").empty().append("Please enter a new password.");
        $("label[for='password']").removeClass("feedback-success");
        $("label[for='password']").addClass("feedback-danger");
        $("#password").removeClass("input-success");
        $("#password").addClass("input-danger");
        $("#password").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='password']").empty().append("All good!");
        $("label[for='password']").removeClass("feedback-danger");
        $("label[for='password']").addClass("feedback-success");
        $("#password").removeClass("input-danger");
        $("#password").addClass("input-success");
	}

    //Checking if password is more than 6 characters long
    password = $("#password").val();
	if (password.length < 6) {
        $("#error1").show();
        $("#error1").empty().append("Passwords must be at least 6 characters long. Please try again.");
        $("label[for='password']").empty().append("Wait a minute!");
        $("label[for='password']").removeClass("feedback-success");
        $("label[for='password']").addClass("feedback-danger");
        $("#password").removeClass("input-success");
        $("#password").addClass("input-danger");
        $("#password").focus();
		hasError  = true;
		return false;
	} else {
        $("label[for='password']").empty().append("All good!");
        $("label[for='password']").removeClass("feedback-danger");
        $("label[for='password']").addClass("feedback-success");
        $("label[for='password']").removeClass("input-danger");
        $("label[for='password']").addClass("input-success");
        $("#error1").hide();
	}


    //Checking if password contains at least one number, one lowercase and one uppercase letter
	var upperCase= new RegExp('[A-Z]');
	var lowerCase= new RegExp('[a-z]');
	var numbers = new RegExp('[0-9]');

    password = $("#password").val();
	if(password.match(upperCase) && password.match(lowerCase) && password.match(numbers)) {
        $("label[for='password']").empty().append("All good!");
        $("label[for='password']").removeClass("feedback-danger");
        $("label[for='password']").addClass("feedback-success");
        $("#password").removeClass("input-danger");
        $("#password").addClass("input-success");
        $("#error1").hide();
	} else {
        $("#error1").show();
        $("#error1").empty().append("Passwords must contain at least one number,<br>one lowercase and one uppercase letter. Please try again.");
        $("label[for='password']").empty().append("Wait a minute!");
        $("label[for='password']").removeClass("feedback-success");
        $("label[for='password']").addClass("feedback-danger");
        $("#password").removeClass("input-success");
        $("#password").addClass("input-danger");
        $("#password").focus();
		hasError  = true;
		return false;
	}

    //Checking if confirmpwd is inputted
	var confirmpwd = $("#confirmpwd").val();
	if(confirmpwd === '') {
        $("label[for='confirmpwd']").empty().append("Please enter the new password again.");
        $("label[for='confirmpwd']").removeClass("feedback-success");
        $("label[for='confirmpwd']").addClass("feedback-danger");
        $("#confirmpwd").removeClass("input-success");
        $("#confirmpwd").addClass("input-danger");
        $("#confirmpwd").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='confirmpwd']").empty().append("All good!");
        $("label[for='confirmpwd']").removeClass("feedback-danger");
        $("label[for='confirmpwd']").addClass("feedback-success");
        $("#confirmpwd").removeClass("input-danger");
        $("#confirmpwd").addClass("input-success");
	}

    //Checking if password and password confirmation match
	if(password != confirmpwd) {
        $("#error1").show();
        $("#error1").empty().append("Your password and confirmation do not match. Please try again.");
        $("label[for='confirmpwd']").empty().append("Wait a minute!");
        $("label[for='confirmpwd']").removeClass("feedback-success");
        $("label[for='confirmpwd']").addClass("feedback-danger");
        $("#confirmpwd").removeClass("input-success");
        $("#confirmpwd").addClass("input-danger");
        $("#confirmpwd").focus();
        hasError  = true;
		return false;
	} else {
        $("label[for='confirmpwd']").empty().append("All good!");
        $("label[for='confirmpwd']").removeClass("feedback-danger");
        $("label[for='confirmpwd']").addClass("feedback-success");
        $("#confirmpwd").removeClass("input-danger");
        $("#confirmpwd").addClass("input-success");
        $("#error1").hide();
	}

    //If there are no errors, initialize the Ajax call
	if(hasError == false){
    jQuery.ajax({
	type: "POST",
    //URL to POST data to
	url: "https://student-portal.co.uk/includes/processes.php",
    //Data posted
    data:'change_password_old_password=' + oldpwd +
         '&change_password_password=' + password,

    //If action completed, do the following
    success:function(){
		$("#hide").hide();
		$("#error").hide();
		$("#success").append('All done! Your password has been changed.');
		$("#success-button").show();
    },

    //If action failed, do the following
    error:function (xhr, ajaxOptions, thrownError){
        buttonReset();
        $("#success").hide();
		$("#error").show();
        $("#error").empty().append(thrownError);
    }
	});
    }
	return true;
	});
	</script>

	<?php else : ?>

	<?php include '../includes/menus/menu.php'; ?>

    <div class="container">
	
    <form class="form-horizontal form-custom">

	<div class="form-logo text-center">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>
    <p class="feedback-danger text-center">Looks like you're not signed in yet. Please Sign in before accessing this area.</p>
    <hr>

    <div class="text-center">
    <a class="btn btn-primary btn-lg btn-load" href="/">Sign in</a>
	</div>
	
    </form>

    </div>

	<?php include '../includes/footers/footer.php'; ?>
    <?php include '../assets/js-paths/common-js-paths.php'; ?>

    <?php endif; ?>

</body>
</html>

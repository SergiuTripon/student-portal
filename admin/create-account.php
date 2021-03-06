<?php
include '../includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php include '../assets/meta-tags.php'; ?>

    <title>Student Portal | Create an account</title>

    <?php include '../assets/css-paths/common-css-paths.php'; ?>

</head>

<body>

	<div class="preloader"></div>

	<?php if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) : ?>
	
    <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'administrator') : ?>

	<?php include '../includes/menus/portal_menu.php'; ?>

	<div class="container">

    <ol class="breadcrumb breadcrumb-custom">
    <li><a href="../../home/">Home</a></li>
	<li><a href="../../account/">Account</a></li>
    <li class="active">Create an account</li>
    </ol>
	
	<!-- Create single account -->
	<form class="form-horizontal form-custom" style="max-width: 100%;" name="createsingleaccount_form" id="createsingleaccount_form" novalidate>

    <p id="error" class="feedback-danger text-center"></p>
    <p id="error1" class="feedback-danger text-center"></p>
	<p id="success" class="feedback-success text-center"></p>

	<div id="hide">

	<div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
    <label for="account_type">Account type<span class="field-required">*</span></label>
    <select class="form-control" name="account_type" id="account_type" style="width: 100%;">
        <option></option>
        <option>Student</option>
        <option>Academic staff</option>
        <option>Administrator</option>
    </select>
    </div>
    </div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
    <label for="firstname">First name<span class="field-required">*</span></label>
    <input class="form-control" type="text" name="firstname" id="firstname" value="" placeholder="Enter a first name">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
	<label for="surname">Surname<span class="field-required">*</span></label>
	<input class="form-control" type="text" name="surname" id="surname" value="" placeholder="Enter a surname">
	</div>
	</div>

    <div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
    <label for="gender">Gender<span class="field-required">*</span></label>
    <select class="form-control" name="gender" id="gender" style="width: 100%;">
        <option></option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>
    </div>
    </div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
	<label for="studentno">Student number<span class="field-required">*</span></label>
    <input class="form-control" type="text" name="studentno" id="studentno" value="" placeholder="Enter a student number">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
	<label for="degree">Programme of Study<span class="field-required">*</span></label>
	<input class="form-control" type="text" name="degree" id="degree" value="" placeholder="Enter a programme of study">
	</div>
	</div>

    <div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
	<label for="fee_amount">Course fee amount<span class="field-required">*</span></label>
	<input class="form-control" type="text" name="fee_amount" id="fee_amount" value="" placeholder="Enter an amount">
	</div>
    </div>

	<div class="form-group">
	<div class="col-xs-12 col-sm-12 full-width">
	<label for="email">Email address<span class="field-required">*</span></label>
    <input class="form-control" type="email" name="email" id="email" placeholder="Enter a email address">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
	<label for="password">Password<span class="field-required">*</span></label>
    <input class="form-control" type="password" name="password" id="password" placeholder="Enter a password">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
	<label for="confirmpwd">Confirm password<span class="field-required">*</span></label>
    <input class="form-control" type="password" name="confirmpwd" id="confirmpwd" placeholder="Enter a password confirmation">
	</div>
	</div>

    <div class="form-group">
    <div class="col-xs-12 col-sm-12 full-width">
    <label for="nationality">Nationality</label>
    <select class="form-control" name="nationality" id="nationality" style="width: 100%;">
        <option></option>
        <option value="afghan">Afghan</option>
        <option value="albanian">Albanian</option>
        <option value="algerian">Algerian</option>
        <option value="american">American</option>
        <option value="andorran">Andorran</option>
        <option value="angolan">Angolan</option>
        <option value="antiguans">Antiguans</option>
        <option value="argentinean">Argentinean</option>
        <option value="armenian">Armenian</option>
        <option value="australian">Australian</option>
        <option value="austrian">Austrian</option>
        <option value="azerbaijani">Azerbaijani</option>
        <option value="bahamian">Bahamian</option>
        <option value="bahraini">Bahraini</option>
        <option value="bangladeshi">Bangladeshi</option>
        <option value="barbadian">Barbadian</option>
        <option value="barbudans">Barbudans</option>
        <option value="batswana">Batswana</option>
        <option value="belarusian">Belarusian</option>
        <option value="belgian">Belgian</option>
        <option value="belizean">Belizean</option>
        <option value="beninese">Beninese</option>
        <option value="bhutanese">Bhutanese</option>
        <option value="bolivian">Bolivian</option>
        <option value="bosnian">Bosnian</option>
        <option value="brazilian">Brazilian</option>
        <option value="british">British</option>
        <option value="bruneian">Bruneian</option>
        <option value="bulgarian">Bulgarian</option>
        <option value="burkinabe">Burkinabe</option>
        <option value="burmese">Burmese</option>
        <option value="burundian">Burundian</option>
        <option value="cambodian">Cambodian</option>
        <option value="cameroonian">Cameroonian</option>
        <option value="canadian">Canadian</option>
        <option value="cape verdean">Cape Verdean</option>
        <option value="central african">Central African</option>
        <option value="chadian">Chadian</option>
        <option value="chilean">Chilean</option>
        <option value="chinese">Chinese</option>
        <option value="colombian">Colombian</option>
        <option value="comoran">Comoran</option>
        <option value="congolese">Congolese</option>
        <option value="costa rican">Costa Rican</option>
        <option value="croatian">Croatian</option>
        <option value="cuban">Cuban</option>
        <option value="cypriot">Cypriot</option>
        <option value="czech">Czech</option>
        <option value="danish">Danish</option>
        <option value="djibouti">Djibouti</option>
        <option value="dominican">Dominican</option>
        <option value="dutch">Dutch</option>
        <option value="east timorese">East Timorese</option>
        <option value="ecuadorean">Ecuadorean</option>
        <option value="egyptian">Egyptian</option>
        <option value="emirian">Emirian</option>
        <option value="equatorial guinean">Equatorial Guinean</option>
        <option value="eritrean">Eritrean</option>
        <option value="estonian">Estonian</option>
        <option value="ethiopian">Ethiopian</option>
        <option value="fijian">Fijian</option>
        <option value="filipino">Filipino</option>
        <option value="finnish">Finnish</option>
        <option value="french">French</option>
        <option value="gabonese">Gabonese</option>
        <option value="gambian">Gambian</option>
        <option value="georgian">Georgian</option>
        <option value="german">German</option>
        <option value="ghanaian">Ghanaian</option>
        <option value="greek">Greek</option>
        <option value="grenadian">Grenadian</option>
        <option value="guatemalan">Guatemalan</option>
        <option value="guinea-bissauan">Guinea-Bissauan</option>
        <option value="guinean">Guinean</option>
        <option value="guyanese">Guyanese</option>
        <option value="haitian">Haitian</option>
        <option value="herzegovinian">Herzegovinian</option>
        <option value="honduran">Honduran</option>
        <option value="hungarian">Hungarian</option>
        <option value="icelander">Icelander</option>
        <option value="indian">Indian</option>
        <option value="indonesian">Indonesian</option>
        <option value="iranian">Iranian</option>
        <option value="iraqi">Iraqi</option>
        <option value="irish">Irish</option>
        <option value="israeli">Israeli</option>
        <option value="italian">Italian</option>
        <option value="ivorian">Ivorian</option>
        <option value="jamaican">Jamaican</option>
        <option value="japanese">Japanese</option>
        <option value="jordanian">Jordanian</option>
        <option value="kazakhstani">Kazakhstani</option>
        <option value="kenyan">Kenyan</option>
        <option value="kittian and nevisian">Kittian and Nevisian</option>
        <option value="kuwaiti">Kuwaiti</option>
        <option value="kyrgyz">Kyrgyz</option>
        <option value="laotian">Laotian</option>
        <option value="latvian">Latvian</option>
        <option value="lebanese">Lebanese</option>
        <option value="liberian">Liberian</option>
        <option value="libyan">Libyan</option>
        <option value="liechtensteiner">Liechtensteiner</option>
        <option value="lithuanian">Lithuanian</option>
        <option value="luxembourger">Luxembourger</option>
        <option value="macedonian">Macedonian</option>
        <option value="malagasy">Malagasy</option>
        <option value="malawian">Malawian</option>
        <option value="malaysian">Malaysian</option>
        <option value="maldivan">Maldivan</option>
        <option value="malian">Malian</option>
        <option value="maltese">Maltese</option>
        <option value="marshallese">Marshallese</option>
        <option value="mauritanian">Mauritanian</option>
        <option value="mauritian">Mauritian</option>
        <option value="mexican">Mexican</option>
        <option value="micronesian">Micronesian</option>
        <option value="moldovan">Moldovan</option>
        <option value="monacan">Monacan</option>
        <option value="mongolian">Mongolian</option>
        <option value="moroccan">Moroccan</option>
        <option value="mosotho">Mosotho</option>
        <option value="motswana">Motswana</option>
        <option value="mozambican">Mozambican</option>
        <option value="namibian">Namibian</option>
        <option value="nauruan">Nauruan</option>
        <option value="nepalese">Nepalese</option>
        <option value="new zealander">New Zealander</option>
        <option value="ni-vanuatu">Ni-Vanuatu</option>
        <option value="nicaraguan">Nicaraguan</option>
        <option value="nigerien">Nigerien</option>
        <option value="north korean">North Korean</option>
        <option value="northern irish">Northern Irish</option>
        <option value="norwegian">Norwegian</option>
        <option value="omani">Omani</option>
        <option value="pakistani">Pakistani</option>
        <option value="palauan">Palauan</option>
        <option value="panamanian">Panamanian</option>
        <option value="papua new guinean">Papua New Guinean</option>
        <option value="paraguayan">Paraguayan</option>
        <option value="peruvian">Peruvian</option>
        <option value="polish">Polish</option>
        <option value="portuguese">Portuguese</option>
        <option value="qatari">Qatari</option>
        <option value="romanian">Romanian</option>
        <option value="russian">Russian</option>
        <option value="rwandan">Rwandan</option>
        <option value="saint lucian">Saint Lucian</option>
        <option value="salvadoran">Salvadoran</option>
        <option value="samoan">Samoan</option>
        <option value="san marinese">San Marinese</option>
        <option value="sao tomean">Sao Tomean</option>
        <option value="saudi">Saudi</option>
        <option value="scottish">Scottish</option>
        <option value="senegalese">Senegalese</option>
        <option value="serbian">Serbian</option>
        <option value="seychellois">Seychellois</option>
        <option value="sierra leonean">Sierra Leonean</option>
        <option value="singaporean">Singaporean</option>
        <option value="slovakian">Slovakian</option>
        <option value="slovenian">Slovenian</option>
        <option value="solomon islander">Solomon Islander</option>
        <option value="somali">Somali</option>
        <option value="south african">South African</option>
        <option value="south korean">South Korean</option>
        <option value="spanish">Spanish</option>
        <option value="sri lankan">Sri Lankan</option>
        <option value="sudanese">Sudanese</option>
        <option value="surinamer">Surinamer</option>
        <option value="swazi">Swazi</option>
        <option value="swedish">Swedish</option>
        <option value="swiss">Swiss</option>
        <option value="syrian">Syrian</option>
        <option value="taiwanese">Taiwanese</option>
        <option value="tajik">Tajik</option>
        <option value="tanzanian">Tanzanian</option>
        <option value="thai">Thai</option>
        <option value="togolese">Togolese</option>
        <option value="tongan">Tongan</option>
        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
        <option value="tunisian">Tunisian</option>
        <option value="turkish">Turkish</option>
        <option value="tuvaluan">Tuvaluan</option>
        <option value="ugandan">Ugandan</option>
        <option value="ukrainian">Ukrainian</option>
        <option value="uruguayan">Uruguayan</option>
        <option value="uzbekistani">Uzbekistani</option>
        <option value="venezuelan">Venezuelan</option>
        <option value="vietnamese">Vietnamese</option>
        <option value="welsh">Welsh</option>
        <option value="yemenite">Yemenite</option>
        <option value="zambian">Zambian</option>
        <option value="zimbabwean">Zimbabwean</option>
    </select>
    </div>
    </div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
	<label>Date of Birth</label>
	<input class="form-control" type="text" name="dateofbirth" id="dateofbirth" placeholder="Select the date of birth"/>
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
	<label>Phone number</label>
    <input class="form-control" type="text" name="phonenumber" id="phonenumber" value="" placeholder="Enter a phone number">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
    <label>Address line 1</label>
    <input class="form-control" type="text" name="address1" id="address1" value="" placeholder="Enter a address line 1">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
    <label>Address 2 line (Optional)</label>
    <input class="form-control" type="text" name="address2" id="address2" value="" placeholder="Enter a address line 2 (Optional)">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
    <label>Town</label>
    <input class="form-control" type="text" name="town" id="town" value="" placeholder="Enter a town">
	</div>
	<div class="col-xs-6 col-sm-6 full-width">
    <label>City</label>
    <input class="form-control" type="text" name="city" id="city" value="" placeholder="Enter a city">
	</div>
	</div>

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width">
    <label>Country</label>
    <input class="form-control" type="text" name="country" id="country" value="United Kingdom" placeholder="Enter a country" readonly="readonly">
    </div>
	<div class="col-xs-6 col-sm-6 full-width">
	<label>Postcode</label>
    <input class="form-control" type="text" name="postcode" id="postcode" value="" placeholder="Enter a postcode">
	</div>
	</div>

    <hr>

	</div>

    <div class="text-center">
    <a id="admin-create-account-submit" class="btn btn-primary btn-lg btn-load">Create account</a>
    </div>

	<div id="success-button" class="text-center" style="display:none;">
    <hr class="hr-success">
    <a class="btn btn-primary btn-lg btn-load" href="">Create another</a>
	</div>
	
    </form>
    <!-- End of Change Password -->

	</div> <!-- /container -->
	
	<?php include '../includes/footers/footer.php'; ?>
    <?php include '../assets/js-paths/common-js-paths.php'; ?>

    <script>
    //On load
    $(document).ready(function () {
        //Initialize select2
        $("#account_type").select2({placeholder: "Select an option"});
        $("#gender").select2({placeholder: "Select an option"});
        $("#nationality").select2({placeholder: "Select an option"});

    });

    //Initialize Date Time Picker
	$('#dateofbirth').datetimepicker({
        format: 'DD/MM/YYYY',
        useCurrent: false
	});

    var account_type;
    var studentno;
    var degree;
    var fee_amount;

    //Hiding and showing depending on the option selected on the drop-down
    $('#account_type').on("change", function (e) {
        account_type = $('#account_type :selected').html();

        //If option is 'Student', do the following
        if(account_type === 'Student') {
            $('label[for="studentno"]').show();
            $('#studentno').show();
            $('label[for="degree"]').show();
            $('#degree').show();
            $('label[for="fee_amount"]').show();
            $('#fee_amount').show();
        }

        //If option is 'Academic staff', do the following
        if(account_type === 'Academic staff') {
            $('label[for="studentno"]').hide();
            $('#studentno').hide();
            $('label[for="degree"]').hide();
            $('#degree').hide();
            $('label[for="fee_amount"]').hide();
            $('#fee_amount').hide();
        }

        //If option is 'Administrator', do the following
        if(account_type === 'Administrator') {
            $('label[for="studentno"]').hide();
            $('#studentno').hide();
            $('label[for="degree"]').hide();
            $('#degree').hide();
            $('label[for="fee_amount"]').hide();
            $('#fee_amount').hide();
        }
    });

	//Create an account process
    $("#admin-create-account-submit").click(function (e) {
    e.preventDefault();

	var hasError = false;

    //Checking if an option is selected on the drop-down
    var account_type_check = $('#account_type :selected').html();
    if (account_type_check === '') {
        $("label[for='account_type']").empty().append("Please select an option.");
        $("label[for='account_type']").removeClass("feedback-success");
        $("label[for='account_type']").addClass("feedback-danger");
        $("[aria-owns='select2-account_type-results']").removeClass("input-success");
        $("[aria-owns='select2-account_type-results']").addClass("input-danger");
        $("[aria-owns='select2-account_type-results']").focus();
        hasError  = true;
        return false;
    }
    else {
        $("label[for='account_type']").empty().append("All good!");
        $("label[for='account_type']").removeClass("feedback-danger");
        $("label[for='account_type']").addClass("feedback-success");
        $("[aria-owns='select2-account_type-results']").removeClass("input-danger");
        $("[aria-owns='select2-account_type-results']").addClass("input-success");
    }

    var account_type = $('#account_type :selected').html();

    //Checking if firstname is inputted
	var firstname = $("#firstname").val();
	if(firstname === '') {
        $("label[for='firstname']").empty().append("Please enter a first name.");
        $("label[for='firstname']").removeClass("feedback-success");
        $("label[for='firstname']").addClass("feedback-danger");
        $("#firstname").removeClass("input-success");
        $("#firstname").addClass("input-danger");
        $("#firstname").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='firstname']").empty().append("All good!");
        $("label[for='firstname']").removeClass("feedback-danger");
        $("label[for='firstname']").addClass("feedback-success");
        $("#firstname").removeClass("input-danger");
        $("#firstname").addClass("input-success");
	}

    //Checking if surname is inputted
	var surname = $("#surname").val();
	if(surname === '') {
        $("label[for='surname']").empty().append("Please enter a surname.");
        $("label[for='surname']").removeClass("feedback-success");
        $("label[for='surname']").addClass("feedback-danger");
        $("#surname").removeClass("input-success");
        $("#surname").addClass("input-danger");
        $("#surname").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='surname']").empty().append("All good!");
        $("label[for='surname']").removeClass("feedback-danger");
        $("label[for='surname']").addClass("feedback-success");
        $("#surname").removeClass("input-danger");
        $("#surname").addClass("input-success");
	}

    //Checking if an option is selected on the dropdown
    var gender_check = $('#gender :selected').html();
    if (gender_check === '') {
        $("label[for='gender']").empty().append("Please select an option.");
        $("label[for='gender']").removeClass("feedback-success");
        $("label[for='gender']").addClass("feedback-danger");
        $("[aria-owns='select2-gender-results']").removeClass("input-success");
        $("[aria-owns='select2-gender-results']").addClass("input-danger");
        $("[aria-owns='select2-gender-results']").focus();
        hasError  = true;
        return false;
    }
    else {
        $("label[for='gender']").empty().append("All good!");
        $("label[for='gender']").removeClass("feedback-danger");
        $("label[for='gender']").addClass("feedback-success");
        $("[aria-owns='select2-gender-results']").removeClass("input-danger");
        $("[aria-owns='select2-gender-results']").addClass("input-success");
    }

    var gender = $('#gender :selected').html();

    //If option on the drop-down is 'Student', do the following
	if (account_type === 'Student') {
		studentno = $("#studentno").val();
		degree = $("#degree").val();
        fee_amount = $("#fee_amount").val();

        //Checking if studentno is inputted
		if(studentno === '') {
            $("label[for='studentno']").empty().append("Please enter a student number.");
            $("label[for='studentno']").removeClass("feedback-success");
            $("label[for='studentno']").addClass("feedback-danger");
            $("#studentno").removeClass("input-success");
            $("#studentno").addClass("input-danger");
            $("#studentno").focus();
			hasError  = true;
			return false;
		} else {
            $("label[for='studentno']").empty().append("All good!");
            $("label[for='studentno']").removeClass("feedback-danger");
            $("label[for='studentno']").addClass("feedback-success");
            $("#studentno").removeClass("input-danger");
            $("#studentno").addClass("input-success");
		}

        //Checking if studentno is numeric
		if ($.isNumeric(studentno)) {
            $("label[for='studentno']").empty().append("All good!");
            $("label[for='studentno']").removeClass("feedback-danger");
            $("label[for='studentno']").addClass("feedback-success");
            $("#studentno").removeClass("input-danger");
            $("#studentno").addClass("input-success");
            $("#error1").hide();
		} else {
			$("#error1").show();
			$("#error1").empty().append("The student number entered is invalid.<br>The student number must be numeric.");
            $("label[for='studentno']").empty().append("Wait a minute!");
            $("label[for='studentno']").removeClass("feedback-success");
            $("label[for='studentno']").addClass("feedback-danger");
            $("#studentno").removeClass("input-success");
            $("#studentno").addClass("input-danger");
            $("#studentno").focus();
			hasError  = true;
			return false;
		}

        //Checking if studentno is 9 characters long
		if (studentno.length != 9) {
			$("#error1").show();
			$("#error1").empty().append("The student number entered is invalid.<br>The student number must be exactly 9 digits in length.");
            $("label[for='studentno']").empty().append("Wait a minute!");
            $("label[for='studentno']").removeClass("feedback-success");
            $("label[for='studentno']").addClass("feedback-danger");
            $("#studentno").removeClass("input-success");
            $("#studentno").addClass("input-danger");
            $("#studentno").focus();
			hasError  = true;
			return false;
		} else {
            $("label[for='studentno']").empty().append("All good!");
            $("label[for='studentno']").removeClass("feedback-danger");
            $("label[for='studentno']").addClass("feedback-success");
            $("#studentno").removeClass("input-danger");
            $("#studentno").addClass("input-success");
            $("#error1").hide();
		}

        //Checking if degree is inputted
		if(degree === '') {
            $("label[for='degree']").empty().append("Please enter a programme of study.");
            $("label[for='degree']").removeClass("feedback-success");
            $("label[for='degree']").addClass("feedback-danger");
            $("#degree").removeClass("input-success");
            $("#degree").addClass("input-danger");
            $("#degree").focus();
			hasError  = true;
			return false;
		} else {
            $("label[for='degree']").empty().append("All good!");
            $("label[for='degree']").removeClass("feedback-danger");
            $("label[for='degree']").addClass("feedback-success");
            $("#degree").removeClass("input-danger");
            $("#degree").addClass("input-success");
		}

        //Checking if fee_amount is inputted
        if(fee_amount === '') {
            $("label[for='fee_amount']").empty().append("Please enter an amount.");
            $("label[for='fee_amount']").removeClass("feedback-success");
            $("label[for='fee_amount']").addClass("feedback-danger");
            $("#fee_amount").removeClass("input-success");
            $("#fee_amount").addClass("input-danger");
            $("#fee_amount").focus();
            hasError  = true;
            return false;
        } else {
            $("label[for='fee_amount']").empty().append("All good!");
            $("label[for='fee_amount']").removeClass("feedback-danger");
            $("label[for='fee_amount']").addClass("feedback-success");
            $("#fee_amount").removeClass("input-danger");
            $("#fee_amount").addClass("input-success");
        }
    //If option on the drop-down is not 'Student', do the following
	} else {
		studentno = $("#studentno").val();
		degree = $("#degree").val();
        fee_amount = $("#fee_amount").val();
	}

    //Check if email is inputted
	var email = $("#email").val();
	if(email === '') {
        $("label[for='email']").empty().append("Please enter an email address.");
        $("label[for='email']").removeClass("feedback-success");
        $("label[for='email']").addClass("feedback-danger");
        $("#email").removeClass("input-success");
        $("#email").addClass("input-danger");
        $("#email").focus();
		hasError  = true;
		return false;
    } else {
        $("label[for='email']").empty().append("All good!");
        $("label[for='email']").removeClass("feedback-danger");
        $("label[for='email']").addClass("feedback-success");
        $("#email").removeClass("input-danger");
        $("#email").addClass("input-success");
	}

    //Checking if password is inputted
	var password = $("#password").val();
	if(password === '') {
        $("label[for='password']").empty().append("Please enter a password.");
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
        $("#password").removeClass("input-danger");
        $("#password").addClass("input-success");
        $("#error1").hide();
	}

    //Checking if password contains at least one number, one lowercase and one uppercase letter
	var upperCase= new RegExp('[A-Z]');
	var lowerCase= new RegExp('[a-z]');
	var numbers = new RegExp('[0-9]');

	if(password.match(upperCase) && password.match(lowerCase) && password.match(numbers)) {
        $("label[for='password']").empty().append("All good!");
        $("label[for='password']").removeClass("feedback-danger");
        $("label[for='password']").addClass("feedback-success");
        $("#password").removeClass("input-danger");
        $("#password").addClass("input-success");
        $("#error1").hide();
	} else {
		$("#error6").show();
		$("#error6").empty().append("Passwords must contain at least one number, one lowercase and one uppercase letter. Please try again.");
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
        $("label[for='confirmpwd']").empty().append("Please enter a confirmation.");
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

	var nationality = $("#nationality").val();
	var dateofbirth = $("#dateofbirth").val();
	var phonenumber = $("#phonenumber").val();
 	var address1 = $("#address1").val();
	var address2 = $("#address2").val();
	var town = $("#town").val();
	var city = $("#city").val();
	var country = $("#country").val();
	var postcode = $("#postcode").val();

    //If there are no errors, initialize the Ajax call
	if(hasError == false){
    jQuery.ajax({
	type: "POST",

    //URL to POST data to
	url: "https://student-portal.co.uk/includes/processes.php",

    //Data posted
    data:'create_account_account_type=' + account_type +
         '&create_account_firstname='   + firstname +
         '&create_account_surname='     + surname +
         '&create_account_gender='      + gender +
         '&create_account_studentno='   + studentno +
         '&create_account_degree='      + degree +
         '&create_account_fee_amount='  + fee_amount +
         '&create_account_email='       + email +
         '&create_account_password='    + password +
         '&create_account_nationality=' + nationality +
         '&create_account_dateofbirth=' + dateofbirth +
         '&create_account_phonenumber=' + phonenumber +
         '&create_account_address1='    + address1 +
         '&create_account_address2='    + address2 +
         '&create_account_town='        + town +
         '&create_account_city='        + city +
         '&create_account_country='     + country +
         '&create_account_postcode='    + postcode,

    //If action completed, do the following
    success:function(){
        $("#error1").hide();
		$("#error").hide();
		$("#hide").hide();
		$("#admin-create-account-submit").hide();
		$("#success").show();
		$("#success").empty().append('All done! The account has been created.');
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

	<?php include '../includes/menus/portal_menu.php'; ?>

    <div class="container">

    <form class="form-horizontal form-custom">

	<div class="form-logo text-center">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>
	<p class="feedback-danger text-center">You need to have an admin account to access this area.</p>
    <hr>

    <div class="text-center">
    <a class="btn btn-primary btn-lg btn-load" href="/home/">Home</a>
    </div>

    </form>
    
	</div>

	<?php include '../includes/footers/footer.php'; ?>
    <?php include '../assets/js-paths/common-js-paths.php'; ?>

    <?php endif; ?>
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

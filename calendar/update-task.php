<?php
include '../includes/signin.php';

if (isset($_POST["recordToUpdate"])) {

$idToUpdate = filter_input(INPUT_POST, 'recordToUpdate', FILTER_SANITIZE_NUMBER_INT);

$stmt1 = $mysqli->prepare("SELECT taskid, task_name, task_notes, task_url, task_startdate, task_duedate, task_category FROM user_tasks WHERE taskid = ? LIMIT 1");
$stmt1->bind_param('i', $idToUpdate);
$stmt1->execute();
$stmt1->store_result();
$stmt1->bind_result($taskid, $task_name, $task_notes, $task_url, $task_startdate, $task_duedate, $task_category);
$stmt1->fetch();
$stmt1->close();

} else {
header('Location: ../calendar/');
}

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

	<?php include '../assets/css-paths/common-css-paths.php'; ?>
	<?php include '../assets/css-paths/datetimepicker-css-path.php'; ?>

    <title>Student Portal | Update task</title>
	
</head>

<body>
	<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
    
    <div class="container">
	<?php include '../includes/menus/portal_menu.php'; ?>

    <ol class="breadcrumb">
    <li><a href="../../overview/">Overview</a></li>
	<li><a href="../../calendar/">Calendar</a></li>
    <li class="active">Create a task</li>
    </ol>
	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Update a task</a>
	</h4>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    
	<div class="panel-body">
	
	<!-- Create a task -->
    <div class="content-panel mb10" style="border: none;">
    
	<form class="form-custom" style="max-width: 900px; padding-top: 0px;" name="updatetask_form" id="updatetask_form">
	
    <p id="error" class="feedback-sad text-center"></p>
	<p id="success" class="feedback-happy text-center"></p>

	<div id="hide">

	<input type="hidden" name="taskid" id="taskid" value="<?php echo $taskid; ?>" />
	
    <label>Name</label>
    <input class="form-control" type="text" name="task_name" id="task_name" value="<?php echo $task_name; ?>" placeholder="Enter a name">
	<p id="error1" class="feedback-sad text-center"></p>

    <label>Notes (Optional)</label>
    <textarea class="form-control" rows="5" name="task_notes" id="task_notes" value="<?php echo $task_notes; ?>" placeholder="Notes"></textarea>

	<label>External URL (Optional)</label>
	<input class="form-control" type="text" name="task_url" id="task_url" value="<?php echo $task_url; ?>" placeholder="Enter an external URL">

	<div class="form-group">
	<div class="col-xs-6 col-sm-6 full-width pl0">
	<label>Start date (YYYY-MM-DD)</label>
	<input type='text' class="form-control" type="text" name="task_startdate" id="task_startdate" value="<?php echo $task_startdate; ?>" data-date-format="YYYY/MM/DD hh:mm" placeholder="Select a start date and time"/>
	<p id="error2" class="feedback-sad text-center"></p>
	</div>
	<div class="col-xs-6 col-sm-6 full-width pr0">
	<label>Due date (YYYY-MM-DD)</label>
    <input type='text' class="form-control" type="text" name="task_duedate" id="task_duedate"  value="<?php echo $task_duedate; ?>" data-date-format="YYYY/MM/DD hh:mm" placeholder="Select a due date and time"/>
	<p id="error3" class="feedback-sad text-center"></p>
	</div>
	</div>

	<label>Task category - select below</label>
	<div class="btn-group btn-group-justified" data-toggle="buttons">
	<label class="btn btn-custom task_category <?php if($task_category == "university") echo "active"; ?>">
		<input type="radio" name="options" id="option1" autocomplete="off"> University
	</label>
	<label class="btn btn-custom task_category <?php if($task_category == "work") echo "active"; ?>">
		<input type="radio" name="options" id="option2" autocomplete="off"> Work
	</label>
	<label class="btn btn-custom task_category <?php if($task_category == "personal") echo "active"; ?>">
		<input type="radio" name="options" id="option3" autocomplete="off"> Personal
	</label>
	<label class="btn btn-custom task_category <?php if($task_category == "other") echo "active"; ?>">
		<input type="radio" name="options" id="option3" autocomplete="off"> Other
	</label>
	</div>
	<p id="error4" class="feedback-sad text-center"></p>

	<hr class="hr-custom">

    <div class="text-center">
    <button id="FormSubmit" class="btn btn-custom btn-lg ladda-button mt10" data-style="slide-up" data-spinner-color="#FFA500"><span class="ladda-label">Update</span></button>
    </div>

	</div>
	
    </form>
    </div><!-- /content-panel -->
    <!-- End of Change Password -->
	
	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
    </div><!-- /panel-default -->
	
	</div><!-- /panel-group -->
            
	</div> <!-- /container -->
	
	<?php include '../includes/footers/portal_footer.php'; ?>

    <!-- Sign Out (Inactive) JS -->
    <script src="https://student-portal.co.uk/assets/js/custom/sign-out-inactive.js"></script>

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
	<?php include '../assets/js-paths/datetimepicker-js-path.php'; ?>

	<script>
	$(document).ready(function() {

	//Ladda
	Ladda.bind('.ladda-button', {timeout: 2000});	

	//Date Time Picker
	$(function () {
	$('#task_startdate').datetimepicker({
		dateFormat: "yy-mm-dd", controlType: 'select'
	});
	$('#task_duedate').datetimepicker({
		dateFormat: "yy-mm-dd", controlType: 'select'
	});
	});

	//Responsiveness
	$(window).resize(function(){
		var width = $(window).width();
		if(width <= 480){
			$('.btn-group').removeClass('btn-group-justified');
			$('.btn-group').addClass('btn-group-vertical full-width');
		} else {
			$('.btn-group').addClass('btn-group-justified');
		}
	})
	.resize();//trigger the resize event on page load.

	//Global variable
	var task_category;

	//Setting variable value
	$('.btn-group .task_category').click(function(){
		task_category = ($(this).text().replace(/^\s+|\s+$/g,''))
	})

	//Hiding error messages
	$("#error1").hide();
	$("#error2").hide();
	$("#error3").hide();
	$("#error4").hide();

	//Ajax call
    $("#FormSubmit").click(function (e) {
    e.preventDefault();
	
	var hasError = false;
	
	var taskid = $("#taskid").val();
	
	var task_name = $("#task_name").val();
	if(task_name === '') {
		$("#error1").show();
        $("#error1").empty().append("Please enter task name.");
		$("#task_name").css("border-color", "#FF5454");
		hasError  = true;
		return false;
    } else {
		$("#error1").hide();
		$("#task_name").css("border-color", "#4DC742");
	}
	
	var task_notes = $("#task_notes").val();
	var task_url = $("#task_url").val();

	var task_startdate = $("#task_startdate").val();
	if(task_startdate === '') {
		$("#error2").show();
		$("#error2").empty().append("Please enter a task start date and time.");
		$("#task_startdate").css("border-color", "#FF5454");
		hasError  = true;
		return false;
	} else {
		$("#error2").hide();
		$("#datepicker1").css("border-color", "#4DC742");
	}

	var task_duedate = $("#task_duedate").val();
	if(task_duedate === '') {
		$("#error3").show();
        $("#error3").empty().append("Please enter a task due date.");
		$("#task_duedate").css("border-color", "#FF5454");
		hasError  = true;
		return false;
    } else {
		$("#error3").hide();
		$("#datepicker2").css("border-color", "#4DC742");
	}

	var task_category_check = $(".task_category");
	if (task_category_check.hasClass('active')) {
		$("#error4").show();
		$("#error4").hide();
		$(".btn-group > .btn-custom").css('cssText', 'border-color: #4DC742 !important');
	}
	else {
		$("#error4").empty().append("Please select a task category.");
		$(".btn-group > .btn-custom").css('cssText', 'border-color: #FF5454 !important');
		hasError  = true;
		return false;
	}
	
	if(hasError == false){
    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/calendar_process.php",
    data:'taskid=' + taskid + '&task_name=' + task_name + '&task_notes=' + task_notes + '&task_url=' + task_url + '&task_startdate=' + task_startdate + '&task_duedate=' + task_duedate + '&task_category=' + task_category,
    success:function(response){
		$("#error").hide();
		$("#hide").hide();
		$("#success").empty().append('Task updated successfully.');
		$('#updatetask_form').trigger("reset");
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

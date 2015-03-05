<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php include 'assets/meta-tags.php'; ?>

	<?php include 'assets/css-paths/datatables-css-path.php'; ?>
	<?php include 'assets/css-paths/common-css-paths.php'; ?>
	<?php include 'assets/css-paths/calendar-css-path.php'; ?>

    <title>Student Portal | Timetable</title>

</head>

<body>
<div class="preloader"></div>

	<?php if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) : ?>

    <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'student') : ?>

    <?php include 'includes/menus/portal_menu.php'; ?>

	<div id="timetable-portal" class="container">

	<ol class="breadcrumb">
    <li><a href="../overview/">Overview</a></li>
	<li class="active">Timetable</li>
    </ol>

	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

	<div class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingOne">
  	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Lectures</a>
    </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  	<div class="panel-body">

	<!-- Lectures -->
	<section id="no-more-tables">
	<table class="table table-condensed table-custom lecture-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Lecturer</th>
	<th>Day</th>
	<th>From</th>
    <th>To</th>
    <th>Location</th>
    <th>Capacity</th>
	</tr>
	</thead>

	<tbody>
	<?php
	$stmt1 = $mysqli->query("SELECT system_lectures.lecture_name, user_details.firstname, user_details.surname, system_lectures.lecture_day, DATE_FORMAT(system_lectures.lecture_from_time,'%H:%i') as lecture_from_time, DATE_FORMAT(system_lectures.lecture_to_time,'%H:%i') as lecture_to_time, system_lectures.lecture_location, system_lectures.lecture_capacity FROM system_lectures LEFT JOIN system_modules ON system_lectures.moduleid=system_modules.moduleid LEFT JOIN user_timetable ON system_lectures.moduleid=user_timetable.moduleid LEFT JOIN user_details ON system_lectures.lecture_lecturer=user_details.userid WHERE user_timetable.userid='$session_userid' AND system_lectures.lecture_status='active'");

	while($row = $stmt1->fetch_assoc()) {

	$lecture_name = $row["lecture_name"];
	$firstname = $row["firstname"];
    $surname = $row["surname"];
	$lecture_day = $row["lecture_day"];
	$lecture_from_time = $row["lecture_from_time"];
	$lecture_to_time = $row["lecture_to_time"];
	$lecture_location = $row["lecture_location"];
	$lecture_capacity = $row["lecture_capacity"];

	echo '<tr>

			<td data-title="Name">'.$lecture_name.'</td>
			<td data-title="Lecturer">'.$firstname.' '.$surname.'</td>
			<td data-title="From">'.$lecture_day.'</td>
			<td data-title="From">'.$lecture_from_time.'</td>
			<td data-title="To">'.$lecture_to_time.'</td>
			<td data-title="Location">'.$lecture_location.'</td>
			<td data-title="Capacity">'.$lecture_capacity.'</td>
			</tr>';
	}

	$stmt1->close();
	?>
	</tbody>

	</table>
	</section>

  	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

	<div class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingTwo">
  	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> Tutorials</a>
    </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
  	<div class="panel-body">

	<!-- Tutorials -->
	<section id="no-more-tables">
	<table id="loadTutorials-table" class="table table-condensed table-custom tutorial-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Tutorial assistant</th>
	<th>Day</th>
	<th>From</th>
    <th>To</th>
    <th>Location</th>
    <th>Capacity</th>
	</tr>
	</thead>

	<tbody>
	<?php
	$stmt3 = $mysqli->query("SELECT system_tutorials.tutorial_name, user_details.firstname, user_details.surname, system_tutorials.tutorial_day, DATE_FORMAT(system_tutorials.tutorial_from_time,'%H:%i') as tutorial_from_time, DATE_FORMAT(system_tutorials.tutorial_to_time,'%H:%i') as tutorial_to_time, system_tutorials.tutorial_location, system_tutorials.tutorial_capacity FROM system_tutorials LEFT JOIN system_modules ON system_tutorials.moduleid=system_modules.moduleid LEFT JOIN user_timetable ON system_tutorials.moduleid=user_timetable.moduleid LEFT JOIN user_details ON system_tutorials.tutorial_assistant=user_details.userid WHERE user_timetable.userid='$session_userid' AND system_tutorials.tutorial_status='active'");

	while($row = $stmt3->fetch_assoc()) {

	$tutorial_name = $row["tutorial_name"];
	$firstname = $row["firstname"];
    $surname = $row["surname"];
	$tutorial_day = $row["tutorial_day"];
	$tutorial_from_time = $row["tutorial_from_time"];
	$tutorial_to_time = $row["tutorial_to_time"];
	$tutorial_location = $row["tutorial_location"];
	$tutorial_capacity = $row["tutorial_capacity"];

	echo '<tr>

			<td data-title="Name">'.$tutorial_name.'</td>
			<td data-title="Notes">'.$firstname.' '.$surname.'</td>
			<td data-title="Notes">'.$tutorial_day.'</td>
			<td data-title="From">'.$tutorial_from_time.'</td>
			<td data-title="To">'.$tutorial_to_time.'</td>
			<td data-title="Location">'.$tutorial_location.'</td>
			<td data-title="Capacity">'.$tutorial_capacity.'</td>
			</tr>';
	}

	$stmt3->close();
	?>
	</tbody>

	</table>
	</section>

  	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

	</div><!-- /.panel-group -->

    </div><!-- /container -->

	<?php include 'includes/footers/footer.php'; ?>

	<!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/custom/sign-out-inactive.js"></script>

    <?php endif; ?>

    <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'lecturer') : ?>

    <?php endif; ?>

    <?php if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'admin') : ?>

    <?php include 'includes/menus/portal_menu.php'; ?>

    <div id="timetable-portal" class="container">

	<ol class="breadcrumb">
    <li><a href="../overview/">Overview</a></li>
    <li class="active">Timetable</li>
    </ol>

    <a class="btn btn-success btn-lg ladda-button" data-style="slide-up" href="/admin/create-timetable/"><span class="ladda-label">Create timetable</span></a>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
  	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Active timetables</a>
    </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  	<div class="panel-body">

	<!-- Active timetables -->
	<section id="no-more-tables">
	<table class="table table-condensed table-custom timetable-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Notes</th>
	<th>URL</th>
	<th>Action</th>
    <th>Action</th>
    <th>Action</th>
	</tr>
	</thead>

	<tbody>
	<?php

	$stmt3 = $mysqli->query("SELECT moduleid, module_name, module_notes, module_url FROM system_modules WHERE module_status = 'active'");

	while($row = $stmt3->fetch_assoc()) {

    $moduleid = $row["moduleid"];
	$module_name = $row["module_name"];
	$module_notes = $row["module_notes"];
	$module_url = $row["module_url"];

	echo '<tr id="timetable-'.$moduleid.'">

			<td data-title="Name">'.$module_name.'</td>
			<td data-title="Notes">'.($module_notes === '' ? "No notes" : "$module_notes").'</td>
            <td data-title="URL">'.($module_url === '' ? "No link" : "<a class=\"btn btn-primary btn-md\" target=\"_blank\" href=\"//$module_url\">Link</a>").'</td>
            <td data-title="Action"><a class="btn btn-primary btn-md ladda-button assign-button" href="/admin/assign-timetable?id='.$moduleid.'" data-style="slide-up"><span class="ladda-label">Assign</span></a></a></td>
			<td data-title="Action"><a class="btn btn-primary btn-md ladda-button update-button" href="/admin/update-timetable?id='.$moduleid.'" data-style="slide-up"><span class="ladda-label">Update</span></a></a></td>
            <td data-title="Action"><a class="btn btn-primary btn-md ladda-button" href="#deactivate-'.$moduleid.'" data-toggle="modal" data-style="slide-up"><span class="ladda-label">Deactivate</span></a></a></td>
			</tr>

			<div class="modal modal-custom fade" id="deactivate-'.$moduleid.'" tabindex="-1" role="dialog" aria-labelledby="modal-custom-label" aria-hidden="true">
    		<div class="modal-dialog">
    		<div class="modal-content">

			<div class="modal-header">
			<div class="form-logo text-center">
			<i class="fa fa-trash"></i>
			</div>
			</div>

			<div class="modal-body">
			<p id="success" class="text-center feedback-sad">Are you sure you want to deactivate '.$module_name.'?</p>
			</div>

			<div class="modal-footer">
			<div id="hide-deactivate">
			<div class="pull-left">
			<a id="deactivate-'.$moduleid.'" class="btn btn-danger btn-lg deactivate-button ladda-button" data-style="slide-up">Yes</a>
			</div>
			<div class="text-right">
			<button type="button" class="btn btn-success btn-lg ladda-button" data-style="slide-up" data-dismiss="modal">No</button>
			</div>
			</div>
			<div class="text-center">
			<a id="success-button-deactivate" class="btn btn-primary btn-lg ladda-button" style="display: none;" data-style="slide-up">Continue</a>
			</div>
			</div>

			</div><!-- /modal -->
			</div><!-- /modal-dialog -->
			</div><!-- /modal-content -->';
	}

	$stmt3->close();
	?>
	</tbody>

	</table>
	</section>

  	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
  	<h4 class="panel-title">
	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> Inactive timetables</a>
    </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  	<div class="panel-body">

	<!-- Inactive timetables -->
	<section id="no-more-tables">
	<table class="table table-condensed table-custom timetable-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Notes</th>
	<th>URL</th>
	<th>Action</th>
    <th>Action</th>
	</tr>
	</thead>

	<tbody>
	<?php

	$stmt3 = $mysqli->query("SELECT moduleid, module_name, module_notes, module_url FROM system_modules WHERE module_status = 'inactive'");

	while($row = $stmt3->fetch_assoc()) {

    $moduleid = $row["moduleid"];
	$module_name = $row["module_name"];
	$module_notes = $row["module_notes"];
	$module_url = $row["module_url"];

	echo '<tr id="timetable-'.$moduleid.'">

			<td data-title="Name">'.$module_name.'</td>
			<td data-title="Notes">'.($module_notes === '' ? "No notes" : "$module_notes").'</td>
            <td data-title="URL">'.($module_url === '' ? "No link" : "<a class=\"btn btn-primary btn-md\" target=\"_blank\" href=\"//$module_url\">Link</a>").'</td>
			<td data-title="Action"><a class="btn btn-primary btn-md ladda-button" href="#reactivate-'.$moduleid.'" data-toggle="modal" data-style="slide-up"><span class="ladda-label">Reactivate</span></a></td>
            <td data-title="Action"><a class="btn btn-primary btn-md ladda-button" href="#delete-'.$moduleid.'" data-toggle="modal" data-style="slide-up"><span class="ladda-label">Delete</span></a></td>
			</tr>

			<div class="modal modal-custom fade" id="reactivate-'.$moduleid.'" tabindex="-1" role="dialog" aria-labelledby="modal-custom-label" aria-hidden="true">
    		<div class="modal-dialog">
    		<div class="modal-content">

			<div class="modal-header">
			<div class="form-logo text-center">
			<i class="fa fa-trash"></i>
			</div>
			</div>

			<div class="modal-body">
			<p id="success" class="text-center feedback-sad">Are you sure you want to reactivate '.$module_name.'?</p>
			</div>

			<div class="modal-footer">
			<div id="hide-reactivate">
			<div class="pull-left">
			<a id="reactivate-'.$moduleid.'" class="btn btn-danger btn-lg reactivate-button ladda-button" data-style="slide-up">Yes</a>
			</div>
			<div class="text-right">
			<button type="button" class="btn btn-success btn-lg ladda-button" data-style="slide-up" data-dismiss="modal">No</button>
			</div>
			</div>
			<div class="text-center">
			<a id="success-button-reactivate" class="btn btn-primary btn-lg ladda-button" style="display: none;" data-style="slide-up">Continue</a>
			</div>
			</div>

			</div><!-- /modal -->
			</div><!-- /modal-dialog -->
			</div><!-- /modal-content -->

            <div class="modal modal-custom fade" id="delete-'.$moduleid.'" tabindex="-1" role="dialog" aria-labelledby="modal-custom-label" aria-hidden="true">
    		<div class="modal-dialog">
    		<div class="modal-content">

			<div class="modal-header">
			<div class="form-logo text-center">
			<i class="fa fa-trash"></i>
			</div>
			</div>

			<div class="modal-body">
			<p id="success" class="text-center feedback-sad">Are you sure you want to delete '.$module_name.'?</p>
			</div>

			<div class="modal-footer">
			<div id="hide-delete">
			<div class="pull-left">
			<a id="delete-'.$moduleid.'" class="btn btn-danger btn-lg delete-button ladda-button" data-style="slide-up">Yes</a>
			</div>
			<div class="text-right">
			<button type="button" class="btn btn-success btn-lg ladda-button" data-style="slide-up" data-dismiss="modal">No</button>
			</div>
			</div>
			<div class="text-center">
			<a id="success-button-delete" class="btn btn-primary btn-lg ladda-button" style="display: none;" data-style="slide-up">Continue</a>
			</div>
			</div>

			</div><!-- /modal -->
			</div><!-- /modal-dialog -->
			</div><!-- /modal-content -->';
	}

	$stmt3->close();
	?>
	</tbody>

	</table>
	</section>

  	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

	</div><!-- /.panel-group -->

    </div><!-- /container -->

	<?php include 'includes/footers/footer.php'; ?>

	<!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/custom/sign-out-inactive.js"></script>

    <?php endif; ?>

    <?php else : ?>

	<?php include 'includes/menus/menu.php'; ?>

    <div class="container">

	<form class="form-custom">

    <div class="form-logo text-center">
    <i class="fa fa-graduation-cap"></i>
    </div>

    <hr>

    <p class="feedback-sad text-center">Looks like you're not signed in yet. Please sign in before accessing this area.</p>

    <hr>

    <div class="text-center">
	<a class="btn btn-primary btn-lg ladda-button" data-style="slide-up" href="/"><span class="ladda-label">Sign In</span></a>
    </div>

    </form>

	</div>

	<?php include 'includes/footers/footer.php'; ?>

	<?php endif; ?>

	<?php include 'assets/js-paths/common-js-paths.php'; ?>
	<?php include 'assets/js-paths/tilejs-js-path.php'; ?>
	<?php include 'assets/js-paths/datatables-js-path.php'; ?>
	<?php include 'assets/js-paths/calendar-js-path.php'; ?>

	<script>
    //Ladda
    Ladda.bind('.ladda-button', {timeout: 2000});

	//DataTables
    $('.lecture-table').dataTable({
        "iDisplayLength": 10,
		"paging": true,
		"ordering": true,
		"info": false,
		"language": {
			"emptyTable": "You have no lectures on this day."
		}
	});

    $('.tutorial-table').dataTable({
        "iDisplayLength": 10,
		"paging": true,
		"ordering": true,
		"info": false,
		"language": {
			"emptyTable": "You have no tutorials on this day."
		}
	});

    $('.timetable-table').dataTable({
        "iDisplayLength": 10,
		"paging": true,
		"ordering": true,
		"info": false,
		"language": {
			"emptyTable": "There are no timetables to display."
		}
	});

    //Deactivate record
    $("body").on("click", ".deactivate-button", function(e) {
    e.preventDefault();

    var clickedID = this.id.split('-');
    var timetableToDeactivate = clickedID[1];

	jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
	dataType:"text",
	data:'timetableToDeactivate='+ timetableToDeactivate,
	success:function(){
		$('#timetable-'+timetableToDeactivate).hide();
        $('.form-logo i').removeClass('fa-trash');
        $('.form-logo i').addClass('fa-check-square-o');
        $('.modal-body p').removeClass('feedback-sad');
        $('.modal-body p').addClass('feedback-happy');
        $('.modal-body p').empty().append('The timetable has been deactivated successfully.');
        $('#hide-deactivate').hide();
        $('#success-button-deactivate').show();
        $("#success-button-deactivate").click(function () {
            location.reload();
        });
	},
	error:function (xhr, ajaxOptions, thrownError){
		$("#error").show();
		$("#error").empty().append(thrownError);
	}
	});
    });

    //Reactivate record
    $("body").on("click", ".reactivate-button", function(e) {
    e.preventDefault();

    var clickedID = this.id.split('-');
    var timetableToReactivate = clickedID[1];

	jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
	dataType:"text",
	data:'timetableToReactivate='+ timetableToReactivate,
	success:function(){
		$('#timetable-'+timetableToReactivate).hide();
        $('.form-logo i').removeClass('fa-trash');
        $('.form-logo i').addClass('fa-check-square-o');
        $('.modal-body p').removeClass('feedback-sad');
        $('.modal-body p').addClass('feedback-happy');
        $('.modal-body p').empty().append('The timetable has been reactivated successfully.');
        $('#hide-reactivate').hide();
        $('#success-button-reactivate').show();
        $("#success-button-reactivate").click(function () {
            location.reload();
        });
	},
	error:function (xhr, ajaxOptions, thrownError){
		$("#error").show();
		$("#error").empty().append(thrownError);
	}
	});
    });

    //Delete record
    $("body").on("click", ".delete-button", function(e) {
    e.preventDefault();

    var clickedID = this.id.split('-');
    var timetableToDelete = clickedID[1];

	jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
	dataType:"text",
	data:'timetableToDelete='+ timetableToDelete,
	success:function(){
		$('#timetable-'+timetableToDelete).hide();
        $('.form-logo i').removeClass('fa-trash');
        $('.form-logo i').addClass('fa-check-square-o');
        $('.modal-body p').removeClass('feedback-sad');
        $('.modal-body p').addClass('feedback-happy');
        $('.modal-body p').empty().append('The timetable has been deleted successfully.');
        $('#hide-delete').hide();
        $('#success-button-delete').show();
        $("#success-button-delete").click(function () {
            location.reload();
        });
	},
	error:function (xhr, ajaxOptions, thrownError){
		$("#error").show();
		$("#error").empty().append(thrownError);
	}
	});
    });
	</script>

</body>
</html>

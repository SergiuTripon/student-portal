<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php include 'assets/js-paths/pacejs-js-path.php'; ?>

	<?php include 'assets/meta-tags.php'; ?>

	<?php include 'assets/css-paths/datatables-css-path.php'; ?>
	<?php include 'assets/css-paths/common-css-paths.php'; ?>
	<?php include 'assets/css-paths/calendar-css-path.php'; ?>

    <title>Student Portal | Events</title>

</head>

<body>
<div class="preloader"></div>

	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>

	<?php include 'includes/menus/portal_menu.php'; ?>

	<div id="events-portal" class="container">

	<ol class="breadcrumb">
    <li><a href="../overview/">Overview</a></li>
	<li class="active">Calendar</li>
    </ol>

	<div class="row mb10">

	<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
	<a id="task-button">
    <div class="tile task-tile">
	<i class="fa fa-book"></i>
	<p class="tile-text">Book view</p>
    </div>
    </a>
	</div>

	<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
	<a id="calendar-button">
	<div class="tile calendar-tile">
    <i class="fa fa-calendar"></i>
	<p class="tile-text">Returns - Calendar view</p>
    </div>
    </a>
	</div>

	</div><!-- /row -->

	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

	<div id="events-toggle" class="panel panel-default">

	<?php
	$stmt2 = $mysqli->query("SELECT eventid FROM system_events WHERE event_status = 'active'");
	while($row = $stmt2->fetch_assoc()) {
	  echo '<form id="book-event-form-'.$row["eventid"].'" style="display: none;" action="/events/book-event/" method="POST">
			<input type="hidden" name="recordToBook" id="recordToBook" value="'.$row["eventid"].'"/>
			</form>';
	}
	$stmt2->close();
	?>

    <div class="panel-heading" role="tab" id="headingOne">
  	<h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Events - click to minimize or maximize</a>
  	</h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  	<div class="panel-body">

	<!-- Event -->
	<section id="no-more-tables">
	<table class="table table-condensed table-custom events-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Author</th>
	<th>Notes</th>
	<th>Available</th>
	<th>Reserve</th>
	</tr>
	</thead>

	<tbody>
	<?php

	$stmt1 = $mysqli->query("SELECT bookid, book_name, book_author, book_notes, book_quantity FROM system_books WHERE book_status = 'active'");

	while($row = $stmt1->fetch_assoc()) {

	$bookid = $row["bookid"];
	$book_name = $row["book_name"];
	$book_author = $row["book_author"];
	$book_notes = $row["book_notes"];
    $book_quantity = $row["book_quantity"];

	echo '<tr id="task-'.$row["eventid"].'">

			<td data-title="Name">'.$book_name.'</td>
			<td data-title="Author">'.$book_author.'</td>
			<td data-title="Notes">'.$book_notes.'</td>
			<td data-title="Available">'.$book_quantity.'</td>
			<td id="book-hide" data-title="Reserve"><a id="book-'.$bookid.'" class="reserve-button"><i class="fa fa-arrow-right"></i></a></td>
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

	<?php echo $event_soldout_style; ?>

	<div id="bookedevents-toggle" class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingTwo">
  	<h4 class="panel-title">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Booked events - click to minimize or maximize</a>
  	</h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  	<div class="panel-body">

	<!-- Booked events -->
	<section id="no-more-tables">
	<table class="table table-condensed table-custom bookedevents-table">

	<thead>
	<tr>
	<th>Name</th>
	<th>Price</th>
	<th>Quality</th>
	<th>Booked on</th>
	</tr>
	</thead>

	<tbody>
	<?php

	$stmt2 = $mysqli->query("SELECT event_name, event_amount, tickets_quantity, DATE_FORMAT(booked_on,'%d %b %y %H:%i') as booked_on FROM booked_events WHERE userid = '$userid'");

	while($row = $stmt2->fetch_assoc()) {

	echo '<tr>

			<td data-title="Name">'.$row["event_name"].'</td>
			<td data-title="Price">'.$row["event_amount"].'</td>
			<td data-title="Quantity">'.$row["tickets_quantity"].'</td>
			<td data-title="From">'.$row["booked_on"].'</td>
			</tr>';
	}

	$stmt2->close();
	?>
	</tbody>

	</table>
	</section>

  	</div><!-- /panel-body -->
    </div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

	</div><!-- /panel-group -->

	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

	<div id="calendar-toggle" class="panel panel-default">
	<div class="panel-heading" role="tab" id="headingThree">
	<h4 class="panel-title">
	<a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Calendar - click to minimize or maximize</a>
	</h4>
	</div>
	<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
	<div class="panel-body">

	<div class="calendar-buttons text-right">
	<div id="calendar-buttons1" class="btn-group">
		<button class="btn btn-default" data-calendar-nav="prev"><< Prev</button>
		<button class="btn btn-default" data-calendar-nav="today">Today</button>
		<button class="btn btn-default" data-calendar-nav="next">Next >></button>
	</div>
	<div id="calendar-buttons2" class="btn-group">
		<button class="btn btn-default" data-calendar-view="year">Year</button>
		<button class="btn btn-default active" data-calendar-view="month">Month</button>
		<button class="btn btn-default" data-calendar-view="week">Week</button>
		<button class="btn btn-default" data-calendar-view="day">Day</button>
	</div>
	</div>

	<div class="page-header">
	<h3></h3>
	<hr>
	</div>

	<div id="calendar"></div>

	</div><!-- /panel-body -->
	</div><!-- /panel-collapse -->
	</div><!-- /panel-default -->

	</div><!-- /panel-group -->

    </div><!-- /container -->

	<?php include 'includes/footers/footer.php'; ?>

	<!-- Sign Out (Inactive) JS -->
    <script src="../assets/js/custom/sign-out-inactive.js"></script>

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
	<?php include 'assets/js-paths/calendar-js-path.php'; ?>
	<?php include 'assets/js-paths/tilejs-js-path.php'; ?>
	<?php include 'assets/js-paths/datatables-js-path.php'; ?>

	<script>
	$(document).ready(function () {

	//Responsiveness
	$(window).resize(function(){
		var width = $(window).width();
		if(width <= 480) {
			$('.btn-group').addClass('btn-group-vertical full-width');
		}
	})
	.resize();

	//Sets calendar options
	(function($) {

	"use strict";

	var options = {
		events_source: '../../includes/events_json.php',
		view: 'month',
		tmpl_path: '../assets/tmpls/',
		tmpl_cache: false,
		onAfterViewLoad: function(view) {
			$('.page-header h3').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};

	var calendar = $('#calendar').calendar(options);

	$('.btn-group button[data-calendar-nav]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.navigate($this.data('calendar-nav'));
		});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.view($this.data('calendar-view'));
		});
	});
	}(jQuery));

	//DataTables
    $('.events-table').dataTable({
        "iDisplayLength": 10,
		"paging": true,
		"ordering": true,
		"info": false,
		"language": {
			"emptyTable": "There are no events at the moment."
		}
	});

	$('.bookedevents-table').dataTable({
        "iDisplayLength": 10,
		"paging": true,
		"ordering": true,
		"info": false,
		"language": {
			"emptyTable": "You haven't booked any events."
		}
	});

	//Book event form submit
	$("body").on("click", ".book-button", function(e) {
    e.preventDefault();

	var clickedID = this.id.split('-');
    var DbNumberID = clickedID[1];

    jQuery.ajax({
	type: "POST",
	url: "https://student-portal.co.uk/includes/processes.php",
    data:'events_soldout_check=' + DbNumberID,
    success:function(msg){
		if (msg == 'error') {
			$("#error").empty().append("The quantity entered exceeds the amount of tickets available.<br>You can check the ticket availability on the Events page.");
		} else {
			$("#book-event-form-" + DbNumberID).submit();
		}
    },
    error:function (xhr, ajaxOptions, thrownError){
        $("#error").show();
        $("#error").empty().append(thrownError);
    }
	});
	});

	//Event view/Calendar view toggle
	$("#calendar-toggle").hide();
	$(".task-tile").addClass("tile-selected");
	$(".task-tile p").addClass("tile-text-selected");
	$(".task-tile i").addClass("tile-text-selected");

	$("#task-button").click(function (e) {
    e.preventDefault();
		$("#calendar-toggle").hide();
		$("#events-toggle").show();
		$("#bookedevents-toggle").show();
		$(".calendar-tile").removeClass("tile-selected");
		$(".calendar-tile p").removeClass("tile-text-selected");
		$(".calendar-tile i").removeClass("tile-text-selected");
		$(".task-tile").addClass("tile-selected");
		$(".task-tile p").addClass("tile-text-selected");
		$(".task-tile i").addClass("tile-text-selected");
	});

	$("#calendar-button").click(function (e) {
    e.preventDefault();
		$("#events-toggle").hide();
		$("#bookedevents-toggle").hide();
		$("#calendar-toggle").show();
		$(".task-tile").removeClass("tile-selected");
		$(".task-tile p").removeClass("tile-text-selected");
		$(".task-tile i").removeClass("tile-text-selected");
		$(".calendar-tile").addClass("tile-selected");
		$(".calendar-tile p").addClass("tile-text-selected");
		$(".calendar-tile i").addClass("tile-text-selected");
	});

	});
	</script>

</body>
</html>

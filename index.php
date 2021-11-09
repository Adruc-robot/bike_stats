<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <link rel="stylesheet" href="styles.css">
		<title>title</title>
	</head>
	<body>
	<table id="summary1">
		<thead>
			<?php 
				include "includes/dbinfo.inc.php";
				include "includes/shagger.inc.php";
				
				getHeaderSummary("summary1");
			?>
		</thead>
		<tbody>
			<?php
				getSummary("summary1");
			?>
		</tbody>
	<table>
                        

	<table id="summary2">
		<thead>
			<?php
				getHeaderSummary("summary2");
			?>
		</thead>
		<tbody>
			<?php
				getSummary("summary2");
			?>
		</tbody>
	</table>

	<table id="summary3">
		<thead>
			<?php
				getHeaderSummary("summary3");
			?>
		</thead>
		<tbody>
			<?php
				getSummary("summary3");
			?>
		</tbody>
	</table>

	<table id="summary4">
		<thead>
			<?php
				getHeaderSummary("summary4");
			?>
		</thead>
		<tbody>
			<?php
				getSummary("summary4");
			?>
		</tbody>
	</table>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf8" src="app.js"></script>
	</body>
</html>

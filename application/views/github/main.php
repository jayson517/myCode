<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Github</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/github.css'); ?>">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">--- Github ---</a>
	</nav>
	
	<div class="divTopic">
		<p><b>Basic --- Show Status, Add, Commit</b></p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>Show Status</b></p>
		<p>$ git status</p>
		<p>$ git add .</p>
		<p>$ git commit -m "message"</p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>Show Origin</b></p>
		<p>$ git remote show origin</p>
	</div>

	
	<div class="divTopic">
		<p><b>Updating Git Settings --- Show Status, Add, Commit</b></p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>Change Git Remote URL</b></p>
		<p>$ git remote set-url &lt;remote_name&gt; &lt;remote_url&gt;</p>
		<p>$ git remote set-url origin https://git-repo/new-repository.git</p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>In order to verify that the changes were made, you can use the “git remote” command with the “-v” option (for verbose)</b></p>
		<p>$ git remote -v</p>
	</div>


	<script url="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script url="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
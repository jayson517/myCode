<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/mysql.css'); ?>">

<div class="container-liquid">
	<div class="row text-center" >
		<div class="col-md-3">
			<hr>
			<b>Errors</b>
			<hr>
		</div>
		<div class="col-md-6">
			<hr>
			<b>Description / Solutions</b>
			<hr>			
		</div>
		<div class="col-md-3">
			<hr>	
			<b>References</b>
			<hr>			
		</div>
	</div>
</div>

<div class="cont-main">

	<div class="container-liquid">
		
		<!--

		<hr>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
		</div>

		-->

		<hr>
		<div class="row">
			<div class="col-md-3">
				<p>How to Create a New User</p>
			</div>
			<div class="col-md-6">
				<p>1. CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';</p>
				<p>2. GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost';</p>
				<p>3. FLUSH PRIVILEGES;</p>
				<p>4. SELECT USER();</p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>

		<!-- 1 -->
		<hr>
		<div class="row">
			<div class="col-md-3">
					<p>An uncaught Exception was encountered</p>
					<p>Type: PDOException</p>
					<p>Message: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)</p>
					<p>Filename: C:\Apache24\htdocs\idtomis-portal.doh.gov.ph\system\database\DB.php</p>
					<p>Line Number: 203</p>
			</div>
			<div class="col-md-6">
					<p>After upgrading the mysql version from 5 to 8, this error appears when accessing the site</p>
					<p>1. CREATE USER 'jayson'@'%' IDENTIFIED BY 'Jayson517';</p>
					<p>2. GRANT ALL PRIVILEGES ON idtomisprd.* TO 'jayson'@'%';</p>
			</div>
			<div class="col-md-3">
		
			</div>
		</div>
		<hr>

		<!-- 2 -->
		<div class="row">
			<div class="col-md-3">
				<p>SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client</p>
			</div>
			<div class="col-md-6">
				<p>ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';</p>
				<p>Note: The account must be 'jayson'@'%'</p>

			</div>
			<div class="col-md-3">
				<p>https://stackoverflow.com/questions/52364415/php-with-mysql-8-0-error-the-server-requested-authentication-method-unknown-to</p>
			</div>
		</div>
		<hr>

		<!-- 3 -->
		<div class="row">
			<div class="col-md-3">
				<p>SQLSTATE[42000]: Syntax error or access violation: 1231 Variable 'sql_mode' can't be set to the value of 'NO_AUTO_CREATE_USER'</p>
			</div>
			<div class="col-md-6">
				<p>Upograding from Mysql 5 to 8</p>
				<p>Remove the 'NO_AUTO_CREATE_USER' on Codeigniter</p>
				<p>Location: System/database/db.php</p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<hr>

		<!-- 4 -->
		<div class="row">
			<div class="col-md-3">
				<p>PDO::__construct(): Server sent charset (255) unknown to the client. Please, report to the developers</p>
			</div>
			<div class="col-md-6">
				<p>Upgrading from Mysql 5 to 8</p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<hr>

		<!-- 5 -->
		<div class="row">
			<div class="col-md-3">
				<p>SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.</p>
			</div>
			<div class="col-md-6">
				<p>Change the hostname</p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<hr>

		<!-- 6 -->
		<div class="row">
			<div class="col-md-3">
				<p>Changing local to %</p>
			</div>
			<div class="col-md-6">
				<p>1. UPDATE mysql.user SET Host='%' WHERE Host='localhost' AND User='username';</p>
				<p>2. UPDATE mysql.db SET Host='%' WHERE Host='localhost' AND User='username';</p>
				<p>3. FLUSH PRIVILEGES;</p>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<hr>
	</div>
</div>


<?php $this->load->view('common/footer'); ?>
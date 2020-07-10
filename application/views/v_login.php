<!DOCTYPE html>
<html lang="en">
<head>
  <title>BPKP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="row justify-content-center">
      <div class="col-xl-7 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
			<div class="row justify-content-md-center">
			<div class="col-sm-11">
                <div class="p-5">

                 
			<h1 style="margin-bottom: 10px"></h1>
			<h2 style="margin-bottom: 35px" align="center">Login Admin</h2>
			<form action="<?php echo site_url('login/aksi')?>" method="post">
				<div class="form-group">
				<label for="username" id="username"></label>
				<input type="text" class="form-control" id="usr" name="username" placeholder="Username.." value="<?= set_value('username');?>">
				<small><span class="text-danger"><i><?= form_error('username');?></i></span></small>
				</div>
				<div class="form-group" style="margin-bottom: 30px">
				<label for="password" id="password"></label>
				<input type="password" class="form-control" id="pwd" name="password" placeholder="Password.." value="<?= set_value('password');?>">
				<small><span class="text-danger"><i><?= form_error('password');?></i></span></small>
				<small><span class="text-danger"><i><?php echo $this->session->flashdata('pesan_flash');?></i></span></small>
				</div>

				<button type="submit" class="btn btn-primary btn-user btn-block" >Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>

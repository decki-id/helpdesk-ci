<?php if ($this->session->flashdata('flash-error')) : ?>
	<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>
	<?php $this->session->unset_userdata('flash-error') ?>
<?php elseif ($this->session->flashdata('flash-success')) : ?>
	<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash-success'); ?>"></div>
	<?php $this->session->unset_userdata('flash-success') ?>
<?php elseif ($this->session->flashdata('flash')) : ?>
	<div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php $this->session->unset_userdata('flash') ?>
<?php endif; ?>

<div id="scrollable-panel">
	<div class="d-flex justify-content-center min-vh-100 py-5 px-1">
		<div class="card w-50 w-mod my-auto">
			<div class="card-body">
				<div class="text-center">
					<img src="<?= base_url('images/'); ?>logo-ci.png" width="100">
					<h4 class="card-title mt-2">Helpdesk Ticketing System</h4>
				</div>
				<hr>
				<div class="card">
					<div class="card-body">
						<p class="card-text text-justify">
							Hi there! Thank you so much for visiting this project of mine, which is actually very basic,
							but I still wanted to deploy and put it along with the other projects on my website.<br>
              Below is the background of the project which I hope you'll take the time to read.
						</p>
						<hr class="w-25">
						<p class="card-text text-justify">
							This was my thesis project back in college, developed between November 2019 - February 2020.
							As indicated by the logo, the project was built using the CodeIgniter 3 PHP framework,
							along with Bootstrap CSS framework, a pinch of JavaScript, and MySQL as the DBMS.<br>
							It was also my first project to feature an email verification and notification system.
						</p>
						<hr class="w-25">
						<p class="card-text text-justify">
							I decided to create Helpdesk Ticketing System because at the time, I was already working as
							an IT Support Specialist, and the work environment was still quite conventional — ticketing
							was done via email and/or WhatsApp, and daily activities were recorded using Notepad and
							saved locally as text files. However, after the thesis defense was completed, the system
							was never used. To this day, the division still doesn't use any ticketing portal, as
							customers have grown accustomed to submitting tickets via WhatsApp.
						</p>
						<hr class="w-25">
						<p class="card-text text-justify">
							Besides the email verification and notification features, the system primarily handles
							ticket submissions and updates, agent listings, customer companies and their respective
							points of contact, as well as simple reports.<br>
							Please sign up using a real email address so the system can perform the email verification
							and send notifications properly.
						</p>
					</div>
				</div>
				<hr>
				<div class="container px-5 pb-2">
					<form method="post" action="<?= base_url('auth/'); ?>">
						<div class="form-group row pb-mod">
							<label for="username" class="col-sm-4 col-form-label l-pt-mod">Username</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>" required autofocus>
							</div>
						</div>
						<div class="form-group row pt-mod">
							<label for="password" class="col-sm-4 col-form-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
						</div>
						<div class="row">
							<div class="col col-mb-mod"><button type="submit" class="btn btn-primary btn-block">Log In</button></div>
							<div class="col"><a href="<?= base_url('auth/signup/'); ?>" class="col btn btn-success">Sign Up</a></div>
						</div>
					</form>
				</div>
				<hr>
				<div class="text-center">
					<a href="<?= base_url('auth/forgotpassword/'); ?>"><small>Forgot Password?</small></a>
				</div>
			</div>
		</div>
	</div>
</div>
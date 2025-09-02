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
					<?= form_open_multipart('auth/signup/'); ?>
            <div class="form-group row px-md-first-mod">
              <label for="name" class="col-md-4 col-form-label l-pt-md-mod">Full Name</label>
              <div class="col-md-8 agent-field-custom">
                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" autofocus>
                <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="address" class="col-md-4 col-form-label">Address</label>
              <div class="col-md-8 agent-field-custom">
                <input type="text" class="form-control" id="address" name="address" value="<?= set_value('address'); ?>">
                <?= form_error('address', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="city" class="col-md-4 col-form-label">City</label>
              <div class="col-md-8 agent-field-custom">
                <input type="text" class="form-control" id="city" name="city" value="<?= set_value('city'); ?>">
                <?= form_error('city', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="phone" class="col-md-4 col-form-label">Mobile Phone</label>
              <div class="col-md-8 agent-field-custom">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="+6281234567890"
                  value="<?= set_value('phone'); ?>"
                >
                <?= form_error('phone', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="email" class="col-md-4 col-form-label">Email Address</label>
              <div class="col-md-8 agent-field-custom">
                <input type="email" class="form-control" id="email" name="email" placeholder="Please use your real email"
                  value="<?= set_value('email'); ?>"
                >
                <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="username" class="col-md-4 col-form-label">Username</label>
              <div class="col-md-8 agent-field-custom">
                <input type="text" class="form-control" id="username" name="username" placeholder="Without any spaces"
                  value="<?= set_value('username'); ?>"
                >
                <?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="password" class="col-md-4 col-form-label">Password</label>
              <div class="col-md-8 agent-field-custom">
                <input type="password" class="form-control" id="password" name="password" placeholder="At least 5 characters">
                <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="role_id" class="col-md-4 col-form-label">Role</label>
              <div class="col-md-8 agent-field-custom">
                <select class="form-control" id="role_id" name="role_id">
                  <option>--- Choose Role ---</option>
                  <?php foreach($roles as $role) : ?>
                    <option value="<?= $role['id'] ?>"><?= $role['role']; ?></option>
                  <?php endforeach; ?>
                </select>
                <!-- <input type="text" class="form-control" id="role_id" name="role_id" value="<?= set_value('role_id'); ?>"> -->
                <?= form_error('role_id', '<small class="text-danger pl-1">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row px-md-mod">
              <label for="image" class="col-md-4 col-form-label">Profile Picture</label>
              <div class="col-md-3 agent-field-custom text-center">
                <img src="<?= base_url('images/'); ?>default_user1.jpg" class="img-thumbnail" id="image-preview">
              </div>
              <div class="col-md-5">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label for="image" class="custom-file-label">Choose file</label>
                  <?= form_error('image', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
              </div>
            </div>
						<div class="row mt-4">
							<div class="col col-mod"><button type="submit" class="btn btn-primary btn-block">Sign Up</button></div>
							<div class="col"><a href="<?= base_url(); ?>" class="col btn btn-secondary">Back to Login Page</a></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
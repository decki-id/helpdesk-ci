<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="icon" type="image/png" href="<?= base_url('images/'); ?>favicon.ico" />
        <title>Helpdesk Ticketing System</title>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-441/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>libs/css/style-client.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/fontawesome/css/fontawesome-all.css">
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            <div class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm bg-white fixed-top" id="navbar-custom">
                <div class="container">
                    <a href="<?= base_url('staff/'); ?>"><img src="<?= base_url('images/'); ?>logo-ci.png" id="navbar-brand"></a>
                    <a href="<?= base_url('staff/'); ?>" class="navbar-brand" id="text-brand">Helpdesk Ticketing System</a>
                    <div class="navbar-nav ml-auto navbar-right-top">
                        <?php $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
                        <?php if ($url === '/helpdesk-ci/staff/') : ?>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/ticket_form/'); ?>" class="form-control button btn-primary">Create New Ticket</a>
                                </div>
                            </div>
                        <?php elseif ($url === '/helpdesk-ci/staff/profile/') :?>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/'); ?>" class="form-control button btn-secondary">Back</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/update_profile/'); ?>" class="form-control button btn-success">Update</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/change_profile_password/'); ?>" class="form-control button btn-danger">Change Password</a>
                                </div>
                            </div>
                        <?php elseif ($this->uri->segment(2) === 'ticket_details') : ?>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/'); ?>" class="form-control button btn-secondary">Back</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/print_ticket/'); ?><?= $ticket['id']; ?>/" class="form-control button btn-info" target="_blank">Print</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                    <a href="<?= base_url('staff/ticket_update_form/'); ?><?= $ticket['id']; ?>/" class="form-control button btn-success">Update</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <div class="top-search-bar">
                                <a href="<?= base_url('staff/delete_ticket/'); ?><?= $ticket['id']; ?>/" class="form-control button btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="nav-item dropdown nav-user">
                            <a href="#" class="nav-link nav-user-img" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                <img src="<?= base_url('images/'); ?><?= $this->session->userdata('image'); ?>" class="user-avatar-md">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                <?php if ($this->session->userdata('role_id') < 3) : ?>
                                    <div class="nav-user-info">
                                        <h6 class="mb-0 text-white"><?= $this->session->userdata('name'); ?></h6>
                                        <span><?= $this->session->userdata('email'); ?></span>
                                    </div>
                                <?php else : ?>
                                    <div class="nav-user-info text-center">
                                        <h6 class="mb-0 text-white"><?= $this->session->userdata('name'); ?></h6>
                                        <span><?= $this->session->userdata('company_brand'); ?></span>
                                    </div>
                                <?php endif; ?>
                                <a href="<?= base_url('staff/profile/'); ?>" class="dropdown-item"><i class="fas fa-user mr-2"></i><b>Profile</b></a>
                                <a href="<?= base_url('auth/logout/'); ?>" class="dropdown-item"><i class="fas fa-power-off mr-2"></i><b>Log Out</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php if ($this->session->flashdata('flash')) : ?>
    <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php $this->session->unset_userdata('flash') ?>
<?php endif; ?>

<div class="ticket-box">
    <?php if (!$tickets) : ?>
        <div class="dashboard-wrapper text-center">
            <h4>No tickets here.</h4>
            <p>You don't have any tickets in this view.</p>
            <a href="<?= base_url('client/ticket_form/'); ?>">Create new ticket</a>
        </div>
    <?php endif; ?>
    <?php foreach($tickets as $t) : ?>
        <div class="col-xl-auto mb-3">
            <div class="card shadow h-100 bl-style">
                <div class="card-body w-55">
                    <div class="row no-gutters align-items-center">
                        <table class="no-border">
                            <tr>
                                <th rowspan="3">
                                    <a href="<?= base_url('client/ticket_details/'); ?><?= $t['id']; ?>/">
                                        <img src="<?= base_url('images/'); ?><?= $t['contact_image']; ?>" class="user-avatar-md mr-3">
                                    </a>
                                </th>
                                <td><b><a href="<?= base_url('client/ticket_details/'); ?><?= $t['id']; ?>/" id="ticket-link"><?= $t['subject']; ?></a></b> #<?= $t['id']; ?></td>
                            <tr>
                                <td><b><?= $t['contact_name']; ?> (<?= $t['company_brand']; ?>)</b></td>
                            </tr>
                            <tr>
                                <td>Created on <b><?= date("d F Y", strtotime($t['date_created'])); ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-body position-absolute w-45 right-0">
                    <div class="row no-gutters align-items-center">
                        <table class="no-border mt-4">
                            <tr>
                                <td>Assignee: <b><?= $t['agent_name']; ?></b></td>
                            </tr>
                            <tr>
                                <td>Status: <b><?= $t['status']; ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="ticket-filter">
    <div class="text-center mb-3"><b>FILTERS</b></div>
    <form method="post" action="">
        <label><b>By Period</b></label>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text period" id="from">From</span>
                </div>
                <input type="date" class="form-control" id="from" name="from">
                <div class="input-group-append">
                    <span class="input-group-text period-x">&#65279;</span>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="until">Until</span>
                </div>
                <input type="date" class="form-control" id="until" name="until">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-grey"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <form method="post" action="">
        <label for="type"><b>Type</b></label>
        <div class="form-group input-group">
            <select class="form-control" id="type" name="type">
                <option>---</option>
                <option>On The Spot</option>
                <option>Remote</option>
                <option>Visit</option>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-grey"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <form method="post" action="">
        <label for="agent_name"><b>Assignee</b></label>
        <div class="form-group input-group">
            <select class="form-control" id="agent_name" name="agent_name">
                <option>---</option>
                <?php foreach ($agent as $ag) : ?>
                    <option><?= $ag['name']; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-grey"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <form method="post" action="">
        <label for="status"><b>Status</b></label>
        <div class="form-group input-group">
            <select class="form-control" id="status" name="status">
                <option>---</option>
                <option>Open</option>
                <option>In Progress</option>
                <option>Pending</option>
                <option>Resolved</option>
            </select>
            <div class="input-group-append">
                <button type="submit" class="btn btn-grey"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</div>
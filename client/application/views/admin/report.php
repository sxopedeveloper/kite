<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
                    <h1>Trade Report</h1>
                    <p>Recent trades</p>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="streaming-table table" id="demo">
                                <thead>
                                    <tr>
                                        <th>UserID</th>
                                        <th>Transection ID</th>
                                        <th>Market</th>
                                        <th>SCRIPT</th>
                                        <th>QTY</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user):?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($user->client_id,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->trans_id,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->market,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->script,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->qty,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->amount,ENT_QUOTES,'UTF-8');?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_user">Create New User</a>
                    </div>
                    <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_group">Create New Group</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('admin/layout/footer'); ?>

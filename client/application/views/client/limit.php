<div class="page-content header-clear-medium tab-main">
        <div class="table-slide">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
                    <h1>Limit</h1>
                    <p>Set trades limit</p>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="streaming-table table" id="demo">
                                <thead>
                                    <tr>
                                        <th>Market</th>
                                        <th>SCRIPT</th>
                                        <th>QTY</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user):?>
                                    <?php 
                                        // print_r($user);
                                        // die();
                                    ?>
                                    <tr class="<?php echo htmlspecialchars($user->script);?>">
                                        <td><?php echo htmlspecialchars($user->market,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->tradingsymbol,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->qty,ENT_QUOTES,'UTF-8');?></td>
                                        <td><span class='ltp'>00.00</span></td>
                                        <td><?php echo htmlspecialchars($user->amount,ENT_QUOTES,'UTF-8');?></td>
                                        <td><?php echo htmlspecialchars($user->trade_time,ENT_QUOTES,'UTF-8');?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_user">Create New User</a>
                    </div>
                    <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_group">Create New Group</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
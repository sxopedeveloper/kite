<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
                    <h1>Client</h1>
                    <p>List Of Client Traders</p>

                    <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                </div>
                <div class="row">
                <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>admin/create_client">Create New User</a>
                    </div>
                    <div class="col-2 p-3">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>auth/create_group">Create New Group</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="streaming-table table" id="user_tab">
                                <thead>
                                    <tr>
                                       <th>#ClientCode</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php 

                                                foreach ($clients as $cli) {
                                                    echo "<tr>";
                                                    echo "<td class=\"text-muted\">".$cli->client_code."</td>";
                                                    echo "<td>
                                                            <div class=\"widget-content p-0\">
                                                                <div class=\"widget-content-wrapper\">
                                                                    <div class=\"widget-content-left flex2\">
                                                                        <div class=\"widget-heading\">".$cli->name."</div>
                                                                        <div class=\"widget-subheading opacity-7\">Client</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </td>";
                                                    echo "<td>".$cli->comment."</td>";
                                                    echo "<td>
                                                            <div class=\"badge badge-success\">Active</div>
                                                        </td>";

                                                        echo "<td class=\"text-center\">
                                                    <a type=\"button\" href=\"".base_url()."index.php/Admin/allocate/".$cli->id."\" class=\"btn btn-primary btn-sm\">Allocate</a>
                                                </td>";
                                                    echo "</tr>";
                                                }


                                            ?>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
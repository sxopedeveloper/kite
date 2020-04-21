<div class="animated fadeIn">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Clients
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <a href="<?php echo base_url();?>index.php/Client/create_client" class="btn btn-success">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">City</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                            	foreach ($clients as $cli) {
                                            		echo "<tr>";
                                            		echo "<td class=\"text-center text-muted\">".$cli->client_code."</td>";
                                            		echo "<td>
                                            				<div class=\"widget-content-left mr-3\">
                                                                <div class=\"widget-content-left\">
                                                                    <img width=\"40\" class=\"rounded-circle\" src=\"assets/images/avatars/4.jpg\" alt=\"\">
                                                                </div>
                                                            </div>
                                            				<div class=\"widget-content p-0\">
                                                       			<div class=\"widget-content-wrapper\">
		                                            				<div class=\"widget-content-left flex2\">
		                                                                <div class=\"widget-heading\">".$cli->name."</div>
		                                                                <div class=\"widget-subheading opacity-7\">Client</div>
		                                                            </div>
		                                                        </div>
		                                                    </div>
                                                          </td>";
                                                    echo "<td class=\"text-center\">".$cli->comment."</td>";
                                                    echo "<td class=\"text-center\">
                                                    		<div class=\"badge badge-success\">Active</div>
                                                		</td>";

                                                		echo "<td class=\"text-center\">
                                                    <a type=\"button\" href=\"".base_url()."index.php/Client/allocate/".$cli->id."\" class=\"btn btn-primary btn-sm\">Allocate</a>
                                                </td>";
                                            		echo "</tr>";
                                            	}


                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    <button class="btn-wide btn btn-success">Save</button> -->
                                </div>
                            </div>
                        </div>
                </div>
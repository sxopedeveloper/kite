<div class="app-main__outer">
                <div class="app-main__inner">
                	<div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Brokers
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <a href="<?php echo base_url();?>index.php/Broker/create_broker" class="btn btn-success">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">Remarks</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <td class="text-center text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">John Doe</div>
                                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Madrid</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr> -->
                                            <?php 

                                            	foreach ($broker as $bro) {
                                            		echo "<tr>";
                                            		echo "<td class=\"text-center text-muted\">".$bro->broker_code."</td>";
                                            		echo "<td>
                                            				<div class=\"widget-content-left mr-3\">
                                                                <div class=\"widget-content-left\">
                                                                    <img width=\"40\" class=\"rounded-circle\" src=\"assets/images/avatars/4.jpg\" alt=\"\">
                                                                </div>
                                                            </div>
                                            				<div class=\"widget-content p-0\">
                                                       			<div class=\"widget-content-wrapper\">
		                                            				<div class=\"widget-content-left flex2\">
		                                                                <div class=\"widget-heading\">".$bro->name."</div>
		                                                                <div class=\"widget-subheading opacity-7\">Broker</div>
		                                                            </div>
		                                                        </div>
		                                                    </div>
                                                          </td>";
                                                    echo "<td class=\"text-center\">".$bro->remark."</td>";
                                                    echo "<td class=\"text-center\">
                                                    		<div class=\"badge badge-success\">Active</div>
                                                		</td>";

                                                		echo "<td class=\"text-center\">
                                                    <button type=\"button\" id=\"PopoverCustomT-1\" class=\"btn btn-primary btn-sm\">Details</button>
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
                </div>
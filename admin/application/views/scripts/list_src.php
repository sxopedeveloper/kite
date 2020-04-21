 <div class="app-main__outer">
                <div class="app-main__inner">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Manage Scripts
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <!-- <button class="active btn btn-focus">Last Week</button> -->
                                            <a href="<?php echo base_url();?>Script/add_src" class="btn btn-focus">Add New</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Exchange</th>
                                                <th>MAX</th>
                                                <th>Single</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   

                                            foreach ($data as $sc) {
                                                echo "<tr>
                                                <td>".$sc->ID."</td>
                                                <td width='40%'>".$sc->Scrip."</td>
                                                <td>".$sc->Exch."</td>
                                                <td>".$sc->MaxQty."</td>
                                                <td>".$sc->SingleShot."</td>
                                                <td>
                                                    <a href='".base_url()."index.php/Script/edit_src/".$sc->ID."' class='btn btn-sm btn-warning'><i class='fa fa-cog'></i></a>
                                                    <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                                                </td>
                                                </tr>";
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
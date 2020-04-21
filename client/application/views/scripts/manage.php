<main class="vh-100 pt-3">
    <div class="container-fluid">
         <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Manage Script Group
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <!-- <button class="active btn btn-focus">Last Week</button> -->
                                            <a href="<?php echo base_url();?>index.php/Script/add_group" class="btn btn-focus">Add New</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>Group Name</th>
                                                <th>Group Code</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   

                                            foreach ($script as $sc) {
                                                echo "<tr>
                                                <td width='40%'>".$sc->g_name."</td>
                                                <td>".$sc->g_code."</td>
                                                <td>".$sc->remark."</td>
                                                <td>
                                                    <a href='".base_url()."index.php/Script/edit_group/".$sc->id."' class='btn btn-sm btn-warning'><i class='fa fa-cog'></i></a>
                                                    <a href='".base_url()."index.php/Script/delete_group/".$sc->id."'  class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>
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
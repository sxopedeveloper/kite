<main class="vh-100 pt-3">
    <div class="container-fluid">
                     
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Manage Script
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <!-- <button class="active btn btn-focus">Last Week</button> -->
                                            <!-- <button class="btn btn-focus">All Month</button> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive p-2">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover dataTable2">
                                        <thead>
                                            <tr>
                                                <!-- <th width="1%"><input type="checkbox" name=""></th> -->
                                                <th>Script</th>
                                                <th>Type</th>
                                                <th>Segment</th>
                                                <th>Exchange</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   

                                            foreach ($script as $sc) {
                                                echo "<tr>
                                                <td>".$sc->data."</td>
                                                <td>".$sc->instrument_type."</td>
                                                <td>".$sc->segment."</td>
                                                <td>".$sc->exchange."</td>
                                                <td>
                                                    <button class='btn btn-sm btn-success'><i class='fa fa-chevron-circle-right'></i></button>
                                                    <button class='btn btn-sm btn-warning'><i class='fa fa-cog'></i></button>
                                                    <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                                                </td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="fa fa-trash"> </i></button> -->
                                    <!-- <button class="btn-wide btn btn-success">Save</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
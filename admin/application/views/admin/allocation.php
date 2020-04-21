 <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Modify Script Allocation</h5>
                <!-- <form action="<?php echo base_url();?>index.php/Admin/modify_script" method="POST"> -->
                     <div class="row">
                        <!-- <div class="col-md-2">
                            <label>Segment</label>
                                <div class="form-group">
                                    <select id="segment" name="segment" class="form-control form-control-sm">
                                        <option value="NSE">NSE</option>
                                        <option value="INDICES">INDICES</option>
                                        <option value="CDS-OPT">CDS-OPT</option>
                                        <option value="CDS-FUT">CDS-FUT</option>
                                        <option value="NFO-OPT">NFO-OPT</option>
                                        <option value="NFO-FUT">NFO-FUT</option>
                                        <option value="BSE">BSE</option>
                                        <option value="MCX">MCX</option>
                                        <option value="MCX-OPT">MCX-OPT</option>
                                    </select>
                                </div>
                        </div> -->
                        <div class="col-md-4">
                            <label>Script</label>
                            <div class="form-group">
                                <select class="allocaltion form-control"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="Single">Single Shot</label>
                            <input id="Single" type="number" name="data[single]" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="Max">Max Qty</label>
                            <input id="Max" type="number" name="data[maxqty]" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label for="Brokrage">Brokrage</label>
                            <input id="Brokrage" type="number" name="data[bro]" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <div class="form-group">
                                <button class="form-control btn btn-sm btn-primary" id="addAllocation"><i class="fa fa-plus"></i> Add Scripts</button>
                            </div>
                        </div>
                    </div>

                    <hr/>
                    <div class="row">
                        <div class="col-md-10">
                            <label>Add Group</label>
                            <div class="form-group">
                                <select class="form-control" id="grp">
                                    <option value="0">-- Select Group --</option>
                                    <?php
                                    foreach($s_group as $sg){
                                        echo "<option value=".$sg->id.">".$sg->g_name."</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <div class="form-group">
                                <button class="form-control btn btn-sm btn-primary" id="addGroup"><i class="fa fa-plus"></i> Add Group</button>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="range_from">Range From</label>
                            <input id="range_from" type="number" class="form-control form-control-sm range_req">
                        </div>
                        <div class="col-md-2">
                            <label for="range_to">Range To</label>
                            <input id="range_to" type="number" class="form-control form-control-sm range_req">
                        </div>
                         <div class="col-md-2">
                            <label for="Single">Single Shot</label>
                            <input id="range_Single" type="number" class="form-control form-control-sm range_req">
                        </div>
                        <div class="col-md-2">
                            <label for="Max">Max Qty</label>
                            <input id="range_Max" type="number" class="form-control form-control-sm range_req">
                        </div>
                        <div class="col-md-2">
                            <label for="Brokrage">Brokrage</label>
                            <input id="range_Brokrage" type="number" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <div class="form-group">
                                <button class="form-control btn btn-sm btn-primary" id="addByRange"><i class="fa fa-plus"></i> Add Range Vise</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        

                        <div class="col-md-12">
                            <label for="exampleEmail" class="col-form-label">Select Script For : <strong><?php echo $details[0]->client_code;?></strong></label>
                            <input type="hidden" id="client_code" value="<?php echo $details[0]->client_code;?>">
                        <button style="margin-bottom: 10px;" class="btn btn-primary btn-sm delete_all" data-url="/kite1-0-0/admin/index.php/Admin/deleteAll">Delete All Selected</button>
                            <table class="table table-respnsive table-striped" id="example">
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="" id="master" /></td>
                                        <td>Script</td>
                                        <td>Single Shot</td>
                                        <td>Max Qty</td>
                                        <td>Brokrage</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                              <tbody>
                                  <?php
                                    // print_r($data);
                                    // exit();
                                    foreach ($data as $s) {
                                        $url = base_url().'index.php/Admin/remove_allocation/'.$s->ID;
                                        echo "<tr>
                                        <td><input type='checkbox' class=\"sub_chk\" data-id=".$s->ID." /></td>
                                        <td>".$s->Scrip."</td>
                                        <td>".$s->MaxQty."</td>
                                        <td>".$s->SingleShot."</td>
                                        <td>".$s->Brokerage."</td>
                                        <td><a href='".$url."'><i class='fa fa-trash'></i> DELETE</a></td>
                                        </tr>";
                                    }
                                  ?>
                              
                              </tbody>  
                            </table>
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-12 offset-sm-2">
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
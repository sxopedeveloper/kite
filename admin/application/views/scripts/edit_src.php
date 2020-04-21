 <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Modify New Script</h5>
                <form action="<?php echo base_url();?>index.php/Script/save_src" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Name</label>
                                <input name="data[Scrip]" placeholder="Name" type="text" class="form-control" value="<?php echo $data[0]->Scrip;?>">
                                <input type="hidden" name="flag" value="<?php echo $data[0]->ID;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label class="col-form-label">Exchange</label>
                                <select name="data[Exch]" class="form-control">
                                    <option <?php if($data[0]->MaxQty=='NSE'){ echo "selected";} ?> value="NSE">NSE</option>
                                    <option <?php if($data[0]->MaxQty=='BSE'){ echo "selected";} ?> value="BSE">BSE</option>
                                    <option <?php if($data[0]->MaxQty=='MCX'){ echo "selected";} ?> value="MCX">MCX</option>
                                    <option <?php if($data[0]->MaxQty=='Currency'){ echo "selected";} ?> value="Currency">Currency</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Max Qty</label>
                                <input name="data[MaxQty]" placeholder="Code" type="text" class="form-control" value="<?php echo $data[0]->MaxQty; ?>" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Single Shot</label>
                                <input name="data[SingleShot]" placeholder="Code" type="text" class="form-control" value="<?php echo $data[0]->SingleShot; ?>" >
                            </div>
                        </div>
                        
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-12 offset-sm-2">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
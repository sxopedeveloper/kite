 <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Add New Script</h5>
                <form action="<?php echo base_url();?>Script/save_src" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label class="col-form-label">Name</label>
                                <input name="data[Scrip]" placeholder="Name" type="text" class="form-control" value="">
                                <input type="hidden" name="flag" value="0">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label class="col-form-label">Exchange</label>
                                <select name="data[Exch]" class="form-control">
                                    <option value="NSE">NSE</option>
                                    <option value="BSE">BSE</option>
                                    <option value="MCX">MCX</option>
                                    <option value="Currency">Currency</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label class="col-form-label">Max Qty</label>
                                <input name="data[MaxQty]" placeholder="Code" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label class="col-form-label">Single Shot</label>
                                <input name="data[SingleShot]" placeholder="Code" type="text" class="form-control" value="">
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
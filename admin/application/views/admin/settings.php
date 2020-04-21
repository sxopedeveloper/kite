 <main class="vh-100 pt-3">
        <div class="container-fluid">
            <h3>Customer Can See Listed Script</h3>
                    <div class="card shadow ">
                        <div class="card-body">
                            <div class="col-12">
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
                            </div>
                                
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="js-data-example-ajax form-control"></select>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <button class="form-control btn btn-sm btn-primary" id="addNew"><i class="fa fa-plus"></i> Add Scripts</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="mt-3">
                <div class="card shadow">
                   
                    <!-- <div class="col-12"> -->
                        <div class="table-responsive">
                                <table class="table" id="main">
                                    <thead>
                                        <th width="1%">&nbsp;</th>
                                        <th>Script</th>
                                        <th>Buy Price</th>
                                        <th>Sell Price</th>
                                        <th>LTP</th>
                                        <th>HIGH</th>
                                        <th>LOW</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($instrument_token as $inst) {
                                                    echo "<tr id='".$inst->instrument_token."'>
                                                            <td><i class='fa fa-bars'></i></td>
                                                            <td class='script'>".$inst->tradingsymbol."</td>
                                                            <td><span class='buy_p'>0.00</span></td>
                                                            <td><span class='sell_p'>0.00</span></td>
                                                            <td><span class='ltp'>0.00</span></td>
                                                            <td><span class='high'>0.00</span></td>
                                                            <td><span class='low'>0.00</span></td>
                                                        </tr>";
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </main>
</div>

 <main class="vh-100 pt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <label>Instrument Type</label>
                                <div class="form-group">
                                    <select id="inst_type" name="inst_type" class="form-control form-control-sm">
                                        <option value="EQ">EQ</option>
                                        <option value="CE">CE</option>
                                        <option value="FUT">FUT</option>
                                        <option value="PE">PE</option>                
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <label>Exchange</label>
                            <div class="form-group">
                                <select id="exchange" name="exchange" class="form-control form-control-sm">
                                    <option value="NSE">NSE</option>
                                    <option value="BSE">BSE</option>
                                    <option value="CDS">CDS</option>
                                    <option value="NFO">NFO</option>
                                    <option value="MCX">MCX</option>
                                </select>
                            </div>                    
                        </div> -->
                        <div class="col-md-2">
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
                        
                        <div class="col-md-8">
                            <label>Script</label>
                            <div class="form-group">
                                <select class="js-data-example-ajax form-control"></select>
                            </div>
                        </div>
                        <!-- <div class="col-md-2">
                            <label>Alias</label>
                            <input type="text" name="Alias" class="form-control form-control-sm">
                        </div> -->
                    <div class="col-md-2">
                        <label>&nbsp;</label>
                        <div class="form-group">
                            <button class="form-control btn btn-sm btn-primary" id="addNew"><i class="fa fa-plus"></i> Add Scripts</button>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="row">
                        <div class="col-12">
                            <h3>Active Script</h3>
                        </div>
                    </div>
                <div class="col-12">
                    <div class="table-responsive">
                            <table class="table datatable2" id="main">
                                <thead>
                                    <th width="1%">Action</th>
                                    <th>Script</th>
                                    <th>Market</th>
                                    <th width="10%">Buy Price</th>
                                    <th width="10%">Sell Price</th>
                                    <th width="10%">LTP</th>
                                    <th>HIGH</th>
                                    <th>LOW</th>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($instrument_token as $inst) {
                                                echo "<tr id='".$inst->instrument_token."'>
                                                        <td><a href=".base_url()."index.php/Script/remove/".$inst->instrument_token."><i class='fa fa-trash'></i></a></td>
                                                        <td class='script'>".$inst->tradingsymbol."</td>
                                                        <td class='script'>".$inst->segment."</td>
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
                </div>
            </div>
        </div>
    </main>
</div>

    <div class="page-content header-clear-medium tab-main">
        <div class="table-slide">
        <br>
        <div class="container">
            <div class="form-group">
                <select id="fname" class="js-data-example-ajax form-control" style="width:100%;"></select><hr/>
                <button class="btn btn-danger btn-sm form-control" id="watch_one"><i class="fa fa-plus"></i> Add</button>
            </div>
        </div>
        <hr>
        <div class="table-responsive tab-inner">
            <table class="streaming-table table table-borderless" id="streamingTable1">
                <thead class="text-black-50 small" >
                <tr>
                    <th>
                        <span class="d-block">Script</span>
                        <span class="d-block small">(Segment)</span>
                    </th>
                    <th>
                        <span class="d-block">LTP</span>
                        <span class="d-block small">(Change)</span>
                    </th>
                    <th>
                        <span class="d-block">BID</span>
                        <span class="d-block small">(Qty)</span>
                    </th>
                    <th>
                        <span class="d-block">ASK</span>
                        <span class="d-block small">(Qty)</span>
                    </th>
                    <th>
                        <span class="d-block">HIGH</span>
                        <span class="d-block">LOW</span>
                    </th>
                    <th>
                        <span class="d-block">OPEN</span>
                        <span class="d-block">CLOSE</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php
                    foreach ($instu as $inst) {
                        echo "<tr id='".$inst->instrument_token."'>
                            <td >
                                <span class='d-block script_name'>".$inst->tradingsymbol."</span>
                                <span class='d-block small script_ex'>(".$inst->exchange.")</span>
                            </td>
                            <td>
                                <span class='d-block text-danger'><img src=".base_url()."'assets/images/caret-down.svg' alt=''/> <span class='ltp'>4150.00</span></span>
                                <span class='d-block small text-muted'><span class='chng'>0.00</span> (<span class='chngrs'>0.00</span>%)</span>
                            </td>
                            <td class='text-success'>
                                <span class='d-block'><span class='buy_p'>0.00</span></span>
                                <span class='d-block small'>(<span class='buy_q'>0.00</span>)</span>
                            </td>
                            <td class='text-danger'>
                                <span class='d-block'><span class='sell_p'>0.00</span></span>
                                <span class='d-block small'>(<span class='sell_q'>0.00</span>)</span>
                            </td>
                            <td>
                                <span class='d-block small text-success'><img src='images/caret-up.svg' alt=''/> <span class='high'>0.00</span></span>
                                <span class='d-block small text-danger'><img src='images/caret-down.svg' alt=''/> <span class='low'>0.00</span></span>
                            </td>
                            <td>
                                <span class='d-block small'><span class='sopen'>0.00</span></span>
                                <span class='d-block small'><span class='sclose'>0.00</span></span>
                            </td>
                        </tr>";
                    }
                ?>
                </tbody>
            </table>

    </div>
</div>
</div>
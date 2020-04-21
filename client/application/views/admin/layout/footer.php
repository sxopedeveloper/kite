
</div>
<div class="version-info">
  Version 1.0.0
</div> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content overflow-hidden border-0 shadow-lg">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title" id="myModalLabel">CRUDEOILM DEC FUT</h5>
                    <p class="small mb-0">
                        <span>MCX</span>
                        <span class="text-danger mx-1">4150.00</span>
                        <span>-4.00 (-0.07%)</span>
                    </p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body">
                <table class="table table-sm table-borderless mb-3">
                    <tr class="text-black-50 small">
                        <td>BID</td>
                        <td>ASK</td>
                        <td>HIGH</td>
                        <td>LOW</td>
                    </tr>
                    <tr>
                        <td class="text-success">
                            <span>4160</span>
                            <span class="small">(265)</span>
                        </td>
                        <td class="text-danger">
                            <span>4163</span>
                            <span class="small">(243)</span>
                        </td>
                        <td>4172</td>
                        <td>4147</td>
                    </tr>
                </table>
                <form action="#">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="limit">
                        <label class="custom-control-label" for="limit">Limit Order</label>
                    </div>
                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <input type="number" class="form-control" id="qty" placeholder=" " min="1" autocomplete="disabled">
                            <label for="qty">Quantity</label>
                        </div>
                        <div class="form-group flex-grow-1 ml-2">
                            <input type="number" class="form-control" id="price" placeholder=" " autocomplete="disabled" disabled>
                            <label for="price">Price</label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="button" class="btn btn-success flex-grow-1 mr-2">Buy</button>
                        <button type="button" class="btn btn-danger flex-grow-1 ml-2">Sale</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
<script type="text/javascript">
   
    $(".dataTable").dataTable({
        scrollY: 300,
        paging: false
    });
    $(".dataTable2").dataTable({
        paging: true
    });
  </script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ticker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>
</html>
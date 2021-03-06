
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


  
<script type="text/javascript">
var ticker = new KiteTicker({api_key: "kjllz3s85ak07q7a", access_token: "kNnnNHo7M3eTpDUvX7Q2TvkoGKRKcJ2U"});
ticker.connect();
ticker.on("ticks", onTicks);
ticker.on("connect", subscribe);
function onTicks(ticks) {
    var color1 = "#FF6347";
    var color2 = "#90EE90";
    $.each( ticks, function( key, value ) {

        if(($("#"+value.instrument_token).find(".ltp").text())>value.last_price){
            $("#"+value.instrument_token).find(".ltp").parents('td').css('color', color1);
          }else if(($("#"+value.instrument_token).find(".ltp").text())<value.last_price){
            $("#"+value.instrument_token).find(".ltp").parents('td').css('color', color2);
          }else{
            $("#"+value.instrument_token).find(".ltp").parents('td').css('color', '#000');
          }

         

          if(($("#"+value.instrument_token).find(".sell_p").text())>value.last_price){
            $("#"+value.instrument_token).find(".sell_p").parents('td').css('background', color1);
          }else if(($("#"+value.instrument_token).find(".sell_p").text())<value.last_price){
            $("#"+value.instrument_token).find(".sell_p").parents('td').css('background', color2);
          }else{
            $("#"+value.instrument_token).find(".sell_p").parents('td').css('background', '#fff');
          }

          

          if(($("#"+value.instrument_token).find(".buy_p").text())>value.last_price){
            $("#"+value.instrument_token).find(".buy_p").parents('td').css('background', color1);
          }else if(($("#"+value.instrument_token).find(".buy_p").text())<value.last_price){
            $("#"+value.instrument_token).find(".buy_p").parents('td').css('background', color2);
          }else{
            $("#"+value.instrument_token).find(".buy_p").parents('td').css('background', '#fff');
          }

        $("#"+value.instrument_token).find('.ltp').text((value.last_price).toFixed(2));
        $("#"+value.instrument_token).find('.sell_q').text((value.sell_quantity));
        $("#"+value.instrument_token).find('.buy_q').text(value.buy_quantity);
        $("#"+value.instrument_token).find('.buy_p').text((value.depth.buy[0].price).toFixed(2));
        $("#"+value.instrument_token).find('.sell_p').text((value.depth.sell[0].price).toFixed(2));
        $("#"+value.instrument_token).find('.high').text((value.ohlc.high).toFixed(2));
        $("#"+value.instrument_token).find('.low').text((value.ohlc.low).toFixed(2));

        
      //console.log(value.instrument_token);
    });
    //console.log("Ticks", ticks);
}
function subscribe() {
      var items = [];
      i = 0;
       $.ajax({
            url: '<?php echo base_url();?>index.php/dashboard/ref_strem',
            dataType: 'json',
            type: "GET",
            success: function (data) {
              jQuery.each(data, function(index, itemData) {
                items[i++] = parseInt(itemData.instrument_token);
              });
              console.log(items);
              ticker.subscribe(items);
              ticker.setMode(ticker.modeFull, items);

            }
          });
    //var items = [5633,133633,931585,1510401,5263361,7670273,136021764,582913];
   

}

feather.replace()
    

</script>
<script type="text/javascript">

        $(document).ready(function() {

          $('input[type="checkbox"]').click(function(){
                var id = $(this).attr('id');
                 if ($('#'+id).is(':checked') == true){
                    $('.'+id).prop('disabled', false);
                 }
                 else{
                    $('.'+id).prop('disabled', true);
                    $('.'+id).val('');
                 }  

            });

           $('#limit').change(function () {
                if(!$(this).is(':checked')) {
                    $('#price').attr('disabled', 'true');
                } else {
                    $('#price').removeAttr('disabled');
                }
            });
          //$('#main').DataTable();
          $('.js-data-example-ajax').select2({
              minimumInputLength: 2,
              ajax: {
                  url: '<?php echo base_url();?>index.php/Dashboard/streaming',
                  dataType: 'json',
                  type: "GET",
                  quietMillis: 50,
                  data: function (params) {
                    var query = {
                      search: params.term
                    }
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                  },
                  processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                          //console.log(item);
                            return {
                                text: item.exchange+" "+item.name,
                                slug: item.exchange,
                                id: item.instrument_token
                            }
                        })
                    };
                }
              }
            });
      } );
  </script>

</body>
</html>
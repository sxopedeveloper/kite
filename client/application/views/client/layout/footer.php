</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content overflow-hidden border-0 shadow-lg">
            <div class="modal-header">
                <div id="title">
                    <!-- <h5 class="modal-title" id="myModalLabel">CRUDEOILM DEC FUT</h5>
                    <p class="small mb-0">
                        <span class="scr_ex">MCX</span>
                        <span class="text-danger mx-1 ltp">4150.00</span>
                        <span>-4.00 (-0.07%)</span>
                    </p> -->
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body">
                <table id="mod_tab" class="table table-sm table-borderless mb-3">
                    
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
                        <button id="buy_s" type="button" class="btn btn-success flex-grow-1 mr-2">Buy</button>
                        <button id="sell_s" type="button" class="btn btn-danger flex-grow-1 ml-2">Sale</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ticker.js"></script>
<script type="text/javascript">
    feather.replace()
    $('.streaming-table tbody tr').click(function () {
        $('#myModal').modal('show');
        var scr_name = $(this).find(".script_name").text();
        var scr_ex = $(this).find(".script_ex").text();
        var ins_token = $(this).closest('tr').attr('id');
        var buy_p = $(this).find('.buy_p').text();
        var buy_q = $(this).find('.buy_q').text();
        var sell_p = $(this).find('.sell_p').text();
        var sell_q = $(this).find('.sell_q').text();
        var hi = $(this).find('.high').text();
        var lo = $(this).find('.low').text();

        var ltp = $(this).find(".ltp").text();
        var chng = $(this).find(".chng").text();
        var chngrs = $(this).find(".chngrs").text();
        
        $("#myModal").find("#myModalLabel").text(scr_name);
        $("#myModal").find(".scr_ex").text(scr_ex);
        var title = "   <h5 class='modal-title' id='myModalLabel'>"+scr_name+"</h5>\n\
                        <p class='small mb-0 "+ins_token+"'>\n\
                            <span class='scr_ex'>"+scr_ex+"</span>\n\
                            <span class='text-danger mx-1 ltp'>"+ltp+"</span>\n\
                            <span><span class='chng'>"+chng+"</span> (<span class='chngrs'>"+chngrs+"</span>%)</span>\n\
                        </p>";
        var tab = "<tr class='text-black-50 small'>\n\
                        <td>BID</td>\n\
                        <td>ASK</td>\n\
                        <td>HIGH</td>\n\
                        <td>LOW</td>\n\
                    </tr>\n\
                    <tr id="+ins_token+" class='scr_rate'>\n\
                        <td class='text-success'>\n\
                            <span class='buy_p'>"+buy_p+"</span>\n\
                            <span class='small '>(<span class='buy_q'>"+buy_q+"</span>)</span>\n\
                        </td>\n\
                        <td class='text-danger'>\n\
                            <span class='sell_p'>"+sell_p+"</span>\n\
                            <span class='small'>(<span class='sell_q'>"+sell_q+"</span>)</span>\n\
                        </td>\n\
                        <td><span class='hi'>"+hi+"</span></td>\n\
                        <td><span class='lo'>"+lo+"</span></td>\n\
                    </tr>";
        $("#myModal").find("#mod_tab tr").remove();            
        $("#myModal").find("#mod_tab").append(tab);
        $("#myModal").find("#title>h5").remove();
        $("#myModal").find("#title>p").remove();
        $("#myModal").find("#title").append(title);
        //console.log(ins_token);
        //console.log($(this).find(".script_name").text());
    });
</script>

<script type="text/javascript">
        $(document).ready(function(){
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
            $("#addNew").click(function(){
              var token = $(".js-data-example-ajax").val();
              var name = ""; 
              name = $(".js-data-example-ajax").text();
              name = name.replace("NSE","");
              name = name.replace("BSE","");
              name = name.replace("MCX","");
              $('#main').append('<tr id='+token+'><td><i class="fa fa-bars"></i></td><td>'+name+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
              $(".js-data-example-ajax").empty();


              $.ajax({
                  url: '<?php echo base_url();?>index.php/Dashboard/streaming_add',
                  data: { 'id' : token },
                  type: "post",
                  cache: false,
                  success: function (savingStatus) {
                      console.log("Added Success");
                      location.reload();
                  },
                  error: function (xhr, ajaxOptions, thrownError) {
                      console.log("Failed");
                  }
              });

            });
        });
    </script>

<script>
var ticker = new KiteTicker({api_key: "kjllz3s85ak07q7a", access_token: "wELgGlIICOv5SPjydfl1h8l0iclscK6S"});
ticker.connect();
ticker.on("ticks", onTicks);
ticker.on("connect", subscribe);
function onTicks(ticks) {
    var color1 = "#dc3545";
    var color2 = "#28a745";
    $.each( ticks, function( key, value ) {

        if(($("#"+value.instrument_token).find(".ltp").text())>value.last_price){
            $("#"+value.instrument_token).find(".ltp").css('color', color1);
          }else if(($("#"+value.instrument_token).find(".ltp").text())<value.last_price){
            $("#"+value.instrument_token).find(".ltp").css('color', color2);
          }else{
            $("#"+value.instrument_token).find(".ltp").css('color', '#212529');
          }

         

          if(($("#"+value.instrument_token).find(".sell_p").text())>value.last_price){
            $("#"+value.instrument_token).find(".sell_p").css('color', color1);
          }else if(($("#"+value.instrument_token).find(".sell_p").text())<value.last_price){
            $("#"+value.instrument_token).find(".sell_p").css('color', color2);
          }else{
            $("#"+value.instrument_token).find(".sell_p").css('color', '#212529');
          }

          

          if(($("#"+value.instrument_token).find(".buy_p").text())>value.last_price){
            $("#"+value.instrument_token).find(".buy_p").css('color', color1);
          }else if(($("#"+value.instrument_token).find(".buy_p").text())<value.last_price){
            $("#"+value.instrument_token).find(".buy_p").css('color', color2);
          }else{
            $("#"+value.instrument_token).find(".buy_p").css('color', '#212529');
          }

        $("#"+value.instrument_token).find('.ltp').text(((value.last_price).toFixed(2)));
        $("#"+value.instrument_token).find('.sell_q').text(value.sell_quantity);
        $("#"+value.instrument_token).find('.buy_q').text(value.buy_quantity);
        $("#"+value.instrument_token).find('.buy_p').text(((value.depth.buy[0].price).toFixed(2)));
        $("#"+value.instrument_token).find('.sell_p').text(((value.depth.sell[0].price).toFixed(2)));
        $("#"+value.instrument_token).find('.high').text(((value.ohlc.high).toFixed(2)));
        $("#"+value.instrument_token).find('.low').text(((value.ohlc.low).toFixed(2)));
        $("#"+value.instrument_token).find('.sopen').text(((value.ohlc.open).toFixed(2)));
        $("#"+value.instrument_token).find('.sclose').text(((value.ohlc.close).toFixed(2)));
        $("#"+value.instrument_token).find('.chngrs').text(((value.change).toFixed(2)));
        $("#"+value.instrument_token).find('.chng').text(((value.last_price)*(value.change)/100).toFixed(2));

        // Model 
        $("#myModal").find("#mod_tab tr").find("#"+value.instrument_token).find('.buy_p').text(((value.depth.buy[0].price).toFixed(2)));            
        $("#myModal").find("#mod_tab tr").find("#"+value.instrument_token).find('.sell_p').text(((value.depth.buy[0].price).toFixed(2)));            

        $("#myModal").find("."+value.instrument_token).find('.ltp').text(((value.last_price).toFixed(2)));
        



        
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
}
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
  <script type="text/javascript">
    
    $("#buy_s").click(function(){

      var token = ($("tr.scr_rate").attr('id'));
      var buy_price = $(".scr_rate > td > span.buy_p").text();
      var share_qty = ($("#qty").val());

      $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>index.php/Dashboard/sauda',
            data: {
              mode : 'BUY',
              token : token,
              buy_p : buy_price,
              buy_qty : share_qty
            },
            success: function (data) {
             // console.log(data);
             $("#myModal").modal('hide');
            }
          });
      

    });

    $("#sell_s").click(function(){
        
      $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>index.php/Dashboard/sauda',
            data: {
              mode : 'SELL',
              token : ($("tr.scr_rate").attr('id')),
              buy_p : $(".scr_rate > td > span.buy_p").text(),
              buy_qty : ($("#qty").val())
            },
            success: function (data) {
             // console.log(data);
             $("#myModal").modal('hide');

            }

          });

    });

  </script>
</body>
</html>
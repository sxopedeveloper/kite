				<div id="user-settings" class="menu menu-box-bottom menu-box-detached round-large" 
				    data-menu-effect="menu-over" data-menu-height="210">
				    <div class="content bottom-0">
				        <div class="menu-title main-menu-title">
				            <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
				        </div>
				        <div class="modal-content-main">
				            <div class="modal-header-main">
				                <div id="title">
					                <h5 class="modal-title" id="">User Menu</h5>
				                    <p class="small mb-0">
				                        <span class="scr_ex">User additional settings</span>
				                    </p>
				                </div> 
				            </div>

				            <div class="container">
					            <div class="form-group">
					            	<br/>
					                <!-- <select id="fname" class="js-data-example-ajax form-control" style="width:100%;"></select><hr/> -->
					                <!-- <button class="btn btn-danger btn-sm form-control" id="watch_one"><i class="fa fa-plus"></i> Add</button> -->
				                	<a href="#" class="btn btn-success btn-sm form-control">Edit Profile</a>
					            	&nbsp;
				                	<a href="<?php echo base_url();?>auth/logout" class="btn btn-danger btn-sm form-control">Logout</a>
					            </div>
					        </div>
				          
				        </div>
				                <!-- <div class="row">
				                	<button class="btn btn-sm btn-primary">User Profile change</button>
				                </div> -->
				    </div>
				</div>

				<div id="menu-settings" class="menu menu-box-bottom menu-box-detached round-large" 
				    data-menu-effect="menu-over" data-menu-height="310">
				    <div class="content bottom-0">
				            <a href="#" class="" id="remove_inst"><i class="fa fa-trash"></i></a>
				        <div class="menu-title main-menu-title">
				            <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
				        </div>
				        <div class="modal-content-main">
				            <div class="modal-header-main">
				                <div id="title">
					                <h5 class="modal-title" id="myModalLabel">CRUDEOILM DEC FUT</h5>
				                    <p class="small mb-0">
				                        <span class="scr_ex">MCX</span>
				                        <span class="text-danger mx-1 ltp">4150.00</span>
				                        <span>-4.00 (-0.07%)</span>
				                    </p>
				                </div> 
				            </div>
				            <form class="modal-body-main">
				                <table id="mod_tab" class="table table-sm table-borderless mb-3">

				                </table>
				                <form action="#">
				                    <div class="custom-control custom-checkbox mb-3">
				                        <input type="checkbox" class="custom-control-input styled-checkbox" id="limit">
				                        <label class="custom-control-label" for="limit">Limit Order</label>
				                    </div>
				                    <div class="d-flex cd-flex">
				                        <div class="form-group flex-grow-1 mr-2">
				                            <input type="number" class="form-control" id="qty" placeholder="Quantity" min="1"
				                                autocomplete="disabled">
				                            <!-- <label for="qty">Quantity</label> -->
				                        </div>
				                        <div class="form-group flex-grow-1 ml-2">
				                            <input type="number" class="form-control" id="price" placeholder="Price"
				                                autocomplete="disabled" >
				                            <!-- <label for="price">Price</label> -->
				                        </div>
				                    </div>
				                    <div class="d-flex cd-flex">
				                        <button id="buy_s" type="button" class="btn btn-success flex-grow-1 mr-2">Buy</button>
				                        <button id="sell_s" type="button" class="btn btn-danger flex-grow-1 ml-2">Sale</button>
				                    </div>
				                </form>
				        </div>
				    </div>
				</div>
				
				<script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/jquery.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/plugins.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/newDesign/scripts/custom.js"></script>
<!-- 				<script src="https://code.jquery.com/jquery-3.4.1.min.js"
				    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
				    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
				</script>
				<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> 
		 	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>  -->
 
				<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
				
				<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/ticker.js"></script>
				<script type="text/javascript">
					var ticker = new KiteTicker({api_key: "kbh3ereial04jcln", access_token: "nZ1PWs6CVHTE8rzflaOrGw00oK5kGSL0"});
					ticker.connect();
					ticker.on("ticks", onTicks);
					ticker.on("connect", subscribe);

					function onTicks(ticks) {
					    var color1 = "#dc3545";
					    var color2 = "#28a745";
					    $.each(ticks, function(key, value) {

					        if (($("#" + value.instrument_token).find(".ltp").text()) > value.last_price) {
					            $("#" + value.instrument_token).find(".ltp").css('color', color1);
					        } else if (($("#" + value.instrument_token).find(".ltp").text()) < value.last_price) {
					            $("#" + value.instrument_token).find(".ltp").css('color', color2);
					        } else {
					            $("#" + value.instrument_token).find(".ltp").css('color', '#666');
					        }



					        if (($("#" + value.instrument_token).find(".sell_p").text()) > value.last_price) {
					            $("#" + value.instrument_token).find(".sell_p").css('color', color1);
					        } else if (($("#" + value.instrument_token).find(".sell_p").text()) < value.last_price) {
					            $("#" + value.instrument_token).find(".sell_p").css('color', color2);
					        } else {
					            $("#" + value.instrument_token).find(".sell_p").css('color', '#666');
					        }



					        if (($("#" + value.instrument_token).find(".buy_p").text()) > value.last_price) {
					            $("#" + value.instrument_token).find(".buy_p").css('color', color1);
					        } else if (($("#" + value.instrument_token).find(".buy_p").text()) < value.last_price) {
					            $("#" + value.instrument_token).find(".buy_p").css('color', color2);
					        } else {
					            $("#" + value.instrument_token).find(".buy_p").css('color', '#666');
					        }

					        $("#" + value.instrument_token).find('.ltp').text(((value.last_price).toFixed(2)));
					        $("#" + value.instrument_token).find('.sell_q').text(value.sell_quantity);
					        $("#" + value.instrument_token).find('.buy_q').text(value.buy_quantity);
					        $("#" + value.instrument_token).find('.buy_p').text(((value.depth.buy[0].price).toFixed(2)));
					        $("#" + value.instrument_token).find('.sell_p').text(((value.depth.sell[0].price).toFixed(2)));
					        $("#" + value.instrument_token).find('.high').text(((value.ohlc.high).toFixed(2)));
					        $("#" + value.instrument_token).find('.low').text(((value.ohlc.low).toFixed(2)));
					        $("#" + value.instrument_token).find('.sopen').text(((value.ohlc.open).toFixed(2)));
					        $("#" + value.instrument_token).find('.sclose').text(((value.ohlc.close).toFixed(2)));
					        $("#" + value.instrument_token).find('.chngrs').text(((value.change).toFixed(2)));
					        $("#" + value.instrument_token).find('.chng').text(((value.last_price) * (value.change) / 100).toFixed(
					            2));

					        // Model 
					        $("#mod_tab").find("#" + value.instrument_token).find('.buy_p').text(((value.depth.buy[0].price).toFixed(2)));
					        $("#mod_tab").find("#" + value.instrument_token).find('.buy_q').text(((value.buy_quantity)));
					        $("#mod_tab").find("#" + value.instrument_token).find('.sell_p').text(((value.depth.sell[0].price).toFixed(2)));
					        $("#mod_tab").find("#" + value.instrument_token).find('.sell_q').text(((value.sell_quantity)));

					        $("#mod_tab").find("#" + value.instrument_token).find('.high').text(((value.ohlc.high).toFixed(2)));
					        $("#mod_tab").find("#" + value.instrument_token).find('.low').text(((value.ohlc.low).toFixed(2)));
					        

					        $("#menu-settings").find("." + value.instrument_token).find('.ltp').text(((value.last_price).toFixed(2)));
					        $("#menu-settings").find("." + value.instrument_token).find('.chngrs').text(((value.change).toFixed(2)));
					        $("#menu-settings").find("." + value.instrument_token).find('.chng').text(((value.last_price) * (value.change) / 100).toFixed(
					            2));





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
					        success: function(data) {
					            console.log(data);
					            jQuery.each(data, function(index, itemData) {
					                items[i++] = parseInt(itemData.instrument_token);
					            });
					            ticker.subscribe(items);
					            ticker.setMode(ticker.modeFull, items);

					        }
					    });
					}
				</script>

				<script type="text/javascript">
		    			
		    			$("#streamingTable1 >tbody>tr").click(function(){
		    				$("#menu-settings").addClass("menu-active");

		    				// console.log(scr_name);
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
					        
					        $("#menu-settings").find("#myModalLabel").text(scr_name);
					        $("#menu-settings").find(".scr_ex").text(scr_ex);
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
					        $("#menu-settings").find("#mod_tab tr").remove();            
					        $("#menu-settings").find("#mod_tab").append(tab);
					        $("#menu-settings").find("#title>h5").remove();
					        $("#menu-settings").find("#title>p").remove();
					        $("#menu-settings").find("#title").append(title);

		    			});

		    			$("#streamingTable2 >tbody>tr").click(function(){
		    				$("#menu-settings").addClass("menu-active");

		    				// console.log(scr_name);
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
					        
					        $("#menu-settings").find("#myModalLabel").text(scr_name);
					        $("#menu-settings").find(".scr_ex").text(scr_ex);
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
					        $("#menu-settings").find("#mod_tab tr").remove();            
					        $("#menu-settings").find("#mod_tab").append(tab);
					        $("#menu-settings").find("#title>h5").remove();
					        $("#menu-settings").find("#title>p").remove();
					        $("#menu-settings").find("#title").append(title);

		    			});

			            $('.js-data-example-ajax').select2({
					              minimumInputLength: 2,
					              ajax: {
					                 url: '<?php echo base_url();?>/Client/streaming',
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
					                          // console.log(item);
					                            return {
					                                text: item.exchange+" "+item.tradingsymbol,
					                                slug: item.exchange,
					                                id: item.instrument_token
					                            }
					                        })
					                    };
					                }
					              }
					    });

					    $("#watch_one").click(function(){
				              var token = $(".js-data-example-ajax").val();
				              var name = ""; 
				              name = $(".js-data-example-ajax").text();
				              name = name.replace("NSE","");
				              name = name.replace("BSE","");
				              name = name.replace("MCX","");
				              name = name.replace("NFO","");
				              // $('#streamingTable1').append('<tr id='+token+'><td><i class="fa fa-bars"></i></td><td>'+name+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');

				              let row = "<tr id="+token+">\n\
	                              <td>\n\
	                                  <span class='d-block script_name'>"+name+"</span>\n\
	                                  <span class='d-block small script_ex'>()</span>\n\
	                              </td>\n\
	                              <td>\n\
	                                  <span class='d-block text-danger'><img src='/assets/images/caret-down.svg' alt=''/> <span class='ltp'>00.00</span></span>\n\
	                                  <span class='d-block small text-muted'><span class='chng'>0.00</span> (<span class='chngrs'>0.00</span>%)</span>\n\
	                              </td>\n\
	                              <td class='text-success'>\n\
	                                  <span class='d-block'><span class='buy_p'>0.00</span></span>\n\
	                                  <span class='d-block small'>(<span class='buy_q'>0.00</span>)</span>\n\
	                              </td>\n\
	                              <td class='text-danger'>\n\
	                                  <span class='d-block'><span class='sell_p'>0.00</span></span>\n\
	                                  <span class='d-block small'>(<span class='sell_q'>0.00</span>)</span>\n\
	                              </td>\n\
	                              <td>\n\
	                                  <span class='d-block small text-success'><img src='/assets/images/caret-up.svg' alt=''/> <span class='high'>0.00</span></span>\n\
	                                  <span class='d-block small text-danger'><img src='/assets/images/caret-down.svg' alt=''/> <span class='low'>0.00</span></span>\n\
	                              </td>\n\
	                              <td>\n\
	                                  <span class='d-block small'><span class='sopen'>0.00</span></span>\n\
	                                  <span class='d-block small'><span class='sclose'>0.00</span></span>\n\
	                              </td>\n\
	                          </tr>";
				              $('#streamingTable1').append(row);
	                          $(".js-data-example-ajax").empty();


				              $.ajax({
				                  url: '<?php echo base_url();?>index.php/Client/watch_one',
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


		              	$("#watch_two").click(function(){
			              var token = $(".js-data-example-ajax").val();
			              var name = ""; 
			              name = $(".js-data-example-ajax").text();
			              name = name.replace("NSE","");
			              name = name.replace("BSE","");
			              name = name.replace("MCX","");
			              name = name.replace("NFO","");
			              // $('#streamingTable1').append('<tr id='+token+'><td><i class="fa fa-bars"></i></td><td>'+name+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');

			              let row = "<tr id="+token+">\n\
                              <td>\n\
                                  <span class='d-block script_name'>"+name+"</span>\n\
                                  <span class='d-block small script_ex'>()</span>\n\
                              </td>\n\
                              <td>\n\
                                  <span class='d-block text-danger'><img src='assets/images/caret-down.svg' alt=''/> <span class='ltp'>00.00</span></span>\n\
                                  <span class='d-block small text-muted'><span class='chng'>0.00</span> (<span class='chngrs'>0.00</span>%)</span>\n\
                              </td>\n\
                              <td class='text-success'>\n\
                                  <span class='d-block'><span class='buy_p'>0.00</span></span>\n\
                                  <span class='d-block small'>(<span class='buy_q'>0.00</span>)</span>\n\
                              </td>\n\
                              <td class='text-danger'>\n\
                                  <span class='d-block'><span class='sell_p'>0.00</span></span>\n\
                                  <span class='d-block small'>(<span class='sell_q'>0.00</span>)</span>\n\
                              </td>\n\
                              <td>\n\
                                  <span class='d-block small text-success'><img src='/assets/images/caret-up.svg' alt=''/> <span class='high'>0.00</span></span>\n\
                                  <span class='d-block small text-danger'><img src='/assets/images/caret-down.svg' alt=''/> <span class='low'>0.00</span></span>\n\
                              </td>\n\
                              <td>\n\
                                  <span class='d-block small'><span class='sopen'>0.00</span></span>\n\
                                  <span class='d-block small'><span class='sclose'>0.00</span></span>\n\
                              </td>\n\
                          </tr>";
			              $('#streamingTable2').append(row);
                          $(".js-data-example-ajax").empty();


			              $.ajax({
			                  url: '<?php echo base_url();?>index.php/Client/watch_two',
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

						$("#remove_inst").click(function(){
			            	
			            });
				</script>
				 <script type="text/javascript">
    
				    $("#buy_s").click(function(){

				      var token = ($("tr.scr_rate").attr('id'));
				      var price = $(".scr_rate > td > span.buy_p").text();
				      var exc = $("span.scr_ex").text();
				      var qty = ($("#qty").val());
				      var hi = $(".scr_rate > td > span.hi").text();
				      var lo = $(".scr_rate > td > span.lo").text();

				      if($('#limit').is(":checked")){
				      	var limit = $("#price").val();
				      		console.log(limit);
				      		if(limit>hi || limit<lo){
				      			
				      			$.ajax({
					            type: "POST",
					            url: '<?php echo base_url();?>index.php/Dashboard/limit_trade',
					            data: {
					              mode : 'BUY',
					              token : ($("tr.scr_rate").attr('id')),
					              price : limit,
					              qty : qty,
					              exc : exc
					            },
					            success: function (data) {
					             
						            alert("Limit Set Success");
				                    location.reload();

					            }

					          });
				      		}else{
				      			alert("Limit Can not be set");
				      			$("#price").focus();
				      		}


				      }else{

					      $.ajax({
					            type: "POST",
					            url: '<?php echo base_url();?>index.php/Dashboard/sauda',
					            data: {
					              mode : 'BUY',
					              token : token,
					              price : price,
					              qty : qty,
					              exc : exc
					            },
					            success: function (data) {
					             alert("Trade Success");
			                     location.reload();

					            }
					          });
				      }
				      

				    });

				    $("#sell_s").click(function(){
				        var token = ($("tr.scr_rate").attr('id'));
					    var price = $(".scr_rate > td > span.sell_p").text();
					    var qty = ($("#qty").val());
				      	var exc = $("span.scr_ex").text();
				      	var hi = $(".scr_rate > td > span.hi").text();
				      	var lo = $(".scr_rate > td > span.lo").text();

				      	if($('#limit').is(":checked")){
				      		var limit = $("#price").val();
				      		console.log(limit);
				      		if(limit>hi || limit<lo){
				      			
				      			$.ajax({
					            type: "POST",
					            url: '<?php echo base_url();?>index.php/Dashboard/limit_trade',
					            data: {
					              mode : 'SELL',
					              token : ($("tr.scr_rate").attr('id')),
					              price : limit,
					              qty : qty,
					              exc : exc
					            },
					            success: function (data) {
					             
						            alert("Limit Set Success");
				                    location.reload();

					            }

					          });
				      		}else{
				      			alert("Limit Can not be set");
				      			$("#price").focus();
				      		}

				      	}else{

					      $.ajax({
					            type: "POST",
					            url: '<?php echo base_url();?>index.php/Dashboard/sauda',
					            data: {
					              mode : 'SELL',
					              token : ($("tr.scr_rate").attr('id')),
					              price : price,
					              qty : qty,
					              exc : exc
					            },
					            success: function (data) {
					             
					             alert("Trade Success");
			                      location.reload();

					            }

					          });
				      	}
				      

				    });



				  </script>
				</body>

				</html>
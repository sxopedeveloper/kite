 <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Modify Script Allocation</h5>
                <form action="<?php echo base_url();?>index.php/Client/modify_script" method="POST">
                    <!-- <div class="row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Group Name</label>
                                <input name="data[name]" placeholder="Group Name" type="text" class="form-control" value="<?php echo $details[0]->g_name; ?>">
                                <input type="hidden" name="flag" value="<?php echo $details[0]->id; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Group Code</label>
                                <input name="data[code]" placeholder="Group Code" type="text" class="form-control" value="<?php echo $details[0]->g_code; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="exampleEmail" class="col-form-label">Remark</label>
                                <input name="data[remark]" placeholder="Remark" type="text" class="form-control" value="<?php echo $details[0]->remark; ?>">
                            </div>
                        </div>
                    </div> -->
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Select Script For : <strong><?php echo $details[0]->client_code;?></strong></label>
                        <input type="hidden" name="data[id]" value="<?php echo $details[0]->id;?>">
                        <div class="col-sm-12">
                        <table class="table table-respnsive table-striped" id="example">
                          <tbody>
                              <?php
                                $count = 0;
                                $active = json_decode($details[0]->s_active,true);
                                $limit = json_decode($details[0]->s_limit,true);
                                $single = json_decode($details[0]->s_single,true);
                                foreach ($data as $s) {
                                    $mykey = str_replace("&","-",$s->tradingsymbol);

                                    if($count==0){
                                        echo "<tr>";
                                    }
                                    if($count%3==0){
                                        echo "</tr><tr>";
                                    }
                                    echo "<td>
                                        <div class=\"widget-content p-0\">
                                            <div class=\"widget-content-wrapper\">
                                                <div class=\"widget-content-left mr-3\">
                                                    <div class=\"widget-content-left\">";
                                                    if(array_key_exists($mykey, $active)){
                                                        $check = "checked";
                                                    }
                                                    else {
                                                        $check = "";
                                                    }
                                                        echo "<input type='checkbox' name='data[valid][".$mykey."]' ".$check.">
                                                    
                                                    </div>
                                                </div>
                                                <div class=\"widget-content-left \">
                                                    <div class=\"widget-heading\">".$s->tradingsymbol."</div>
                                                    <div class=\"widget-subheading opacity-7\">
                                                    <div class='row'>";
                                                    if(isset($limit[$mykey])){

                                                        echo "<div class='col-md-6'>
                                                                <input class='form-control form-control-sm' type='text' placeholder='Limit' name='data[limit][".$mykey."]' value='".$limit[$mykey]."'>
                                                            </div>";
                                                    }else{
                                                        echo "<div class='col-md-6'>
                                                                <input class='form-control form-control-sm' type='text' placeholder='Limit' name='data[limit][".$mykey."]' value=''>
                                                            </div>";
                                                    }
                                                        if(isset($single[$mykey])){
                                                            echo "<div class='col-md-6'>
                                                                    <input class='form-control form-control-sm' type='text' placeholder='Single Shot Limit' name='data[single][".$mykey."]' value='".($single[$mykey])."'>
                                                                </div>";
                                                            }else{

                                                            echo "<div class='col-md-6'>
                                                                    <input class='form-control form-control-sm' type='text' placeholder='Single Shot Limit' name='data[single][".$mykey."]' value=''>
                                                                </div>";
                                                            }

                                                    echo "</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                    </td>";
                                    $count++;
                                }
                              ?>
                          </tr>
                          </tbody>  
                        </table>
                    </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-12 offset-sm-2">
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<main class="vh-100 pt-3">
    <div class="container-fluid">
                     
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Add New Group</h5>
                <form action="<?php echo base_url();?>index.php/Script/save_group" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Group Name</label> -->
                                <input name="data[name]" placeholder="Group Name" type="text" class="form-control" value="<?php echo $details[0]->g_name; ?>">
                                <input type="hidden" name="flag" value="<?php echo $details[0]->id; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Group Code</label> -->
                                <input name="data[code]" placeholder="Group Code" type="text" class="form-control" value="<?php echo $details[0]->g_code; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Remark</label> -->
                                <input name="data[remark]" placeholder="Remark" type="text" class="form-control" value="<?php echo $details[0]->remark; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <!-- <label for="exampleEmail" class="col-sm-2 col-form-label">Select Script</label> -->
                        <div class="col-sm-12">
                        <table class="table table-respnsive table-striped datatable" id="example">
                          <tbody>
                              <?php
                                $count = 0;
                                $active = json_decode($details[0]->s_active,true);
                                $limit = json_decode($details[0]->s_limit,true);
                                $single = json_decode($details[0]->s_single,true);
                                foreach ($data as $s) {
                                    $mykey = str_replace("&","-",$s->Scrip);

                                    if($count%3==0){
                                        echo "</tr><tr>";
                                    }
                                    if($count==0){
                                        echo "<tr>";
                                    }
                                    $dis='';
                                    echo "<td>
                                        <div class=\"widget-content p-0\">
                                            <div class=\"widget-content-wrapper\">
                                                <div class=\"widget-content-left mr-3\">
                                                    <div class=\"widget-content-left\">";
                                                    if(isset($limit[$mykey])){
                                                        if($limit[$mykey]==''){
                                                            $dis = "disabled";
                                                        }else{
                                                            $dis = "";
                                                        }
                                                    }
                                                    if(array_key_exists($mykey, $active)){
                                                        $check = "checked";
                                                    }
                                                    else {
                                                        $check = "";
                                                    }
                                                        echo "<input type='checkbox' name='data[valid][".$mykey."]' ".$check." id='".$mykey."'>
                                                    
                                                    </div>
                                                </div>
                                                <div class=\"widget-content-left \">
                                                    <div class=\"widget-heading\">".$s->Scrip."</div>
                                                    <div class=\"widget-subheading opacity-7\">
                                                    <div class='row'>
                                                        <div class='col-md-6'>";
                                                           if(isset($limit[$mykey])){
                                                            echo "<input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Limit' name='data[limit][".$mykey."]' value='".$limit[$mykey]."' ".$dis.">";
                                                           }else{
                                                            echo "<input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Limit' name='data[limit][".$mykey."]' value='' ".$dis.">";

                                                           }

                                                        echo "</div>
                                                        <div class='col-md-6'>";
                                                         if(isset($single[$mykey])){
                                                            echo "<input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Single Shot Limit' name='data[single][".$mykey."]' value='".($single[$mykey])."' ".$dis.">";
                                                         }else{
                                                            echo "<input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Single Shot Limit' name='data[single][".$mykey."]' value='' ".$dis.">";

                                                         }
                                                        echo "</div>
                                                    </div>
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
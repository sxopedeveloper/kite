 <main class="vh-100 pt-3">
    <div class="container-fluid">
       
     <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Add New Group</h5>
                <form action="<?php echo base_url();?>index.php/Script/save_group" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Group Name</label> -->
                                <input name="data[name]" placeholder="Group Name" type="text" class="form-control" required>
                                <input type="hidden" name="flag" value="0">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Group Code</label> -->
                                <input name="data[code]" placeholder="Group Code" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <!-- <label for="exampleEmail" class="col-form-label">Remark</label> -->
                                <input name="data[remark]" placeholder="Remark" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <!-- <label for="exampleEmail" class="col-sm-2 col-form-label">Select Script</label> -->
                        <div class="col-sm-12">
                        <table class="table table-respnsive table-striped">
                          <tbody>
                              <?php
                                $count = 0;
                                foreach ($data as $s) {
                                    $mykey = str_replace("&","-",$s->Scrip);
                                    // if($count%3==0){
                                        echo "<tr>";
                                    // }
                                    echo "<td>
                                        <div class=\"widget-content p-0\">
                                            <div class=\"widget-content-wrapper\">
                                                <div class=\"widget-content-left mr-3\">
                                                    <div class=\"widget-content-left\">
                                                        <input type='checkbox' name='data[valid][".$mykey."]' id='".$mykey."'>
                                                    </div>
                                                </div>
                                                <div class=\"widget-content-left \">
                                                    <div class=\"widget-heading\">".$s->Scrip."</div>
                                                    <div class=\"widget-subheading opacity-7\">
                                                    <div class='row'>
                                                        <div class='col-md-4'>
                                                            <input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Limit' name='data[limit][".$mykey."]' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Single Shot Limit' name='data[single][".$mykey."]' disabled>
                                                        </div>
                                                        <div class='col-md-4'>
                                                            <input class='form-control form-control-sm ".$mykey." ' type='text' placeholder='Brokrage' name='data[bro][".$mykey."]' disabled>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                    </td></tr>";
                                    // $count++;
                                }
                              ?>
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
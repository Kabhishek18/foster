  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Availibilty </h1>
            <?php if($avail['avail_type']==1){?>
            <p><span style="color: red"><i class="fas fa-dot-circle"></i></span> Offline</p>
            <?php }else{?>
            <p><span style="color:green"><i class="fas fa-dot-circle"></i></span> Online</p>  
            <?php  }?>  
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Availibilty</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Availibilty Details </h3>
                </div>
               <div class="card-body">
                <div class="form-group">
                  <label for="avail">Are You available ? </label>
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <select  class="form-control" id="availbil">
                            <option>Choose availabilty</option>
                            <option value="yes" <?=($avail['avail_type']?"":'selected')?>>Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>  
              </div> 
            </div>
          </div>



<!-- End  -->
          <?php if($avail['avail_type']== 0){?>
          <div class="col-md-3 no box">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Offline</h3>
                </div>
               <div class="card-body">
                <div class="form-group">
                  <label for="avail">You will be set to offline ? Your <span style="color: green">availiabilty</span> will get reset. </label>
                  <form class="" action="<?=base_url()?>home/avail_offline">
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="submit" class="btn btn-primary" name="" onClick="confirm('Are You Sure ??');" value="Be Offline">
                      <button type="reset" class="btn btn-primary" name="" onClick="window.location.reload();">Cancel </button>
                    </div>
                  </form>  
                </div>  
              </div> 
            </div>
          </div>
          <?php }?>
           <?php if($avail['avail_type']== 1){?>
             <div class="col-md-3 no box">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Offline</h3>
                </div>
               <div class="card-body">
                <div class="form-group">
                  <label for="avail">Status is already set to <span style="color: red">Offline</span> </label>
                  
                </div>  
              </div> 
            </div>
          </div>
          <?php }?>
          






             <div class="col-md-5 yes box">
               <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Date Online</h3>
                </div>
                <form method="post" action="<?=base_url()?>home/avail_online">
                   <div class="card-body">
                            <div class="form-group">
                                  <label>Start Date:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                        <input type="date" name="sdate" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    </div>
                              </div>

                             <div class="form-group">
                                  <label>End Date:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                        <input type="date" name="edate" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    </div>
                              </div>
                             <div class="form-group">
                                <label>Start Time:</label>
                                <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                    <input type="time" name="stime" class="form-control datetimepicker-input" data-target="#reservationdate">
                                </div>
                              </div>

                             <div class="form-group">
                                  <label>End Time:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                        <input type="time" name="etime" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    </div>
                              </div>
                             <div class="form-group">
                                  <button class="btn btn-primary" type="submit" >Submit </button>
                             </div> 

                  </div> 
               </form>
            </div>
          </div>
          <?php if($avail){if($avail['avail_type']== 0){?>          
             <div class="col-md-3 yes box">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Date Online</h3>
                </div>
                   <div class="card-body">
                            <div class="form-group">
                                  <label>Start Date:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                      <?=(empty($avail['start_date'])?'':date('F,d Y', strtotime($avail['start_date'])))?>
                                    </div>
                              </div>

                             <div class="form-group">
                                  <label>End Date:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                          <?=(empty($avail['end_date'])?'':date('F,d Y', strtotime($avail['end_date'])))?>
                                    </div>
                              </div>
                             <div class="form-group">
                                <label>Start Time:</label>
                                <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                          <?=(empty($avail['start_time'])?'':date('h:s:i', strtotime($avail['start_time'])))?>
                                </div>
                              </div>

                             <div class="form-group">
                                  <label>End Time:</label>
                                    <div class="input-group date" id="reservationdate" data-taraget-input="nearest">
                                        <?=(empty($avail['end_time'])?'':date('h:s:i', strtotime($avail['end_time'])))?>
                                    </div>
                              </div>
                           

                  </div> 
            </div>
          </div>
         <?php } }?>
<!-- End -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>

$(document).ready(function(){
    $("#availbil").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();

     $("#availbil").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});


  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

</script>
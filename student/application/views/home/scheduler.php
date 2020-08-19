    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Book A Trial</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Schedular</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->

    <?php $data= $this->session->user_account;
        if($data){  ?>
    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="courses_single_container">
                                <!-- Form -->
                                <div class="col-lg-12 form_grid">
                                    <h2 class="mb5">Get Free Trial</h2>
                                   <!--  <p>Foster Bright Learning</p> -->
                                    <form class="contact_form" id="contact_form"  action="<?=base_url()?>home/SchedulerData" method="post" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Available Date</label>
                                                    <select class="form-control">
                                                    <?php                                                        
                                                                // Start date
                                                                $date = $sdate_slot;
                                                                // End date
                                                                $end_date = $eslot_date;

                                                                while (strtotime($date) <= strtotime($end_date)) { ?>
                                                                      <option><?=date('F,m d',strtotime($date))?></option>
                                                                <?php $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                                                        }?>
                                                    </select>                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Time Slot</label>
                                                    <select class="form-control">
                                                    <?php $time_slot = json_decode($time_slot);
                                                        foreach($time_slot as $times){?>
                                                            <option><?=$times?></option>
                                                    <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Full Name</label>
                                                    <input id="form_name" name="name" class="form-control" required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Your Email</label>
                                                    <input id="form_email" name="email" class="form-control required email" required="required" type="email">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputSubject">Phone Number</label>
                                                    <input id="form_subject" name="number" class="form-control required" required="required" type="number">
                                                </div>
                                            </div>
                                              <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputSubject">Are you planning to study abroad or exploring PR (immigration) options? Pls, choose one. *</label><br>
                                                    <label><input name="plan" required="required" type="radio" checked="" value="Academic (Study Abroad)">Academic (Study Abroad)</label>
                                                    <label><input name="plan"  required="required" type="radio" value="General (PR)">General (PR)</label>
                                                </div>
                                            </div>
                                              <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputSubject">When are you planning to write IELTS? *</label>
                                                    <input id="form_subject" name="plan" class="form-control required" required="required" type="text">
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputSubject">What's your overall Target Band? *</label>
                                                    <input id="form_subject" name="plan" class="form-control required" required="required" type="text">
                                                </div>
                                            </div>
                                              <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputSubject">When are you likely to join us after attending the trial class? *</label><br>
                                                    <label><input name="join" required="required" type="radio" checked="" value="As soon as possible">As soon as possible</label>
                                                    <label><input name="join"  required="required" type="radio" value="Within 1 months">Within 1 month</label>
                                                    <label><input name="join"  required="required" type="radio" value="Within 2 months">Within 2 month</label>
                                                    <label><input name="join"  required="required" type="radio" value="I'm not Sure">I'm not Sure</label>

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Please share anything that will help prepare for our meeting.</label>
                                                    <textarea id="form_message" name="message" class="form-control required" rows="5" required="required"></textarea>
                                                </div>
                                                <div class="form-group ui_kit_button mb0">
                                                    <button type="submit" class="btn dbxshad btn-lg btn-thm">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Form -->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-xl-3">
                
                   <div class="selected_filter_widget style2">
                        <span class="flaticon-clock float-left" style="font-size: 35px"></span><h4 class="mt15 fz20 fw500"> &nbsp;45 min free trial</h4>
                        
                        <br>
                       <p> Hi there,</p>
                       <p>We are keen to invest time to understand your study abroad OR immigration aspirations. This 45 min window gives both of us an opportunity to evaluate each other and for us to present you with a suitable study program that will help you achieve your target band in the shortest possible duration.</p>   
                       <p>We look forward to seeing you for the trial class.</p> 
                       <p>Cheers,</p>
                       <p>Team</p>
                       <p>Foster Bright Learning</p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }else{?>
         <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="courses_single_container">
                                <!-- Form -->
                                <div class="col-lg-12 form_grid">
                                    <h2 class="mb5">Please Login to Book demo</h2>
                                   <!--  <p>Foster Bright Learning</p> -->
                                  <a href="#" class="btn btn-lg btn-dark" data-toggle="modal" data-target="#exampleModalCenter" style="width:80px;"> <span class="dn-md">Login</span></a> / <a href="#" class="btn btn-lg btn-dark" data-toggle="modal" data-target="#exampleModalCenter"><span class="dn-md">Sign Up</span></a>
                                </div>

                                <!-- Form -->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-xl-3">
                
                   <div class="selected_filter_widget style2">
                        <span class="flaticon-clock float-left" style="font-size: 35px"></span><h4 class="mt15 fz20 fw500"> &nbsp;45 min free trial</h4>
                        
                        <br>
                       <p> Hi there,</p>
                       <p>We are keen to invest time to understand your study abroad OR immigration aspirations. This 45 min window gives both of us an opportunity to evaluate each other and for us to present you with a suitable study program that will help you achieve your target band in the shortest possible duration.</p>   
                       <p>We look forward to seeing you for the trial class.</p> 
                       <p>Cheers,</p>
                       <p>Team</p>
                       <p>Foster Bright Learning</p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>

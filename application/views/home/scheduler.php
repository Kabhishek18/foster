<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url()?>foster/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>foster/assets/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                <h3></h3>
                <fieldset>
                    <span class="step-current"> <span class="step-current-content"><span class="step-number"><span>01</span>/03</span></span> </span>
                    <div class="fieldset-flex">
                        <figure>
                            <img src="<?=base_url()?>foster/assets/images/signup-img-1.png" alt="">
                        </figure>
                        <div class="fieldset-content">
                            <h2>Pick Your Dates for Demo Class !</h2>
                            <div class="form-flex">
                                <label for="rating_use">Select date</label>
                                <div class="">
                                    <input type="date" name="" value="">
                                </div>
                            </div>

                            <div class="form-flex">
                                <label for="rating_use">Select Time</label>
                                <div class="">
                                    <input type="Time" name=""  min="09:00" max="18:00">
                                </div>
                            </div>
                              <div class="form-flex">
                                <label for="rating_use">Select Time</label>
                                <div class="">
                                    <input type="datetime-local" name=""  min="09:00" max="18:00">
                                </div>
                            </div>
                             <div class="form-flex">
                                <div class="">
                                  <select name="timezone_offset" id="timezone-offset"   >
                                        <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                        <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                        <option value="-10:00">(GMT -10:00) Hawaii</option>
                                        <option value="-09:50">(GMT -9:30) Taiohae</option>
                                        <option value="-09:00">(GMT -9:00) Alaska</option>
                                        <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                        <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                        <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                        <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                        <option value="-04:50">(GMT -4:30) Caracas</option>
                                        <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                        <option value="-03:50">(GMT -3:30) Newfoundland</option>
                                        <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                        <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                        <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                        <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                        <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                        <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                        <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                        <option value="+03:50">(GMT +3:30) Tehran</option>
                                        <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                        <option value="+04:50">(GMT +4:30) Kabul</option>
                                        <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                        <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                        <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                        <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                        <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                        <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                        <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                        <option value="+08:75">(GMT +8:45) Eucla</option>
                                        <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                        <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                        <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                        <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                        <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                        <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                        <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                        <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                        <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                        <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <span class="step-current"><span class="step-current-content"><span class="step-number"><span>02</span>/03</span></span></span>
                    <div class="fieldset-flex">
                        <figure>
                            <img src="<?=base_url()?>foster/assets/images/signup-img-2.png" alt="">
                        </figure>
                        <div class="fieldset-content">
                            <div class="form-textarea">
                                <label for="your_review" class="form-label">Write A Note</label>
                                <textarea name="your_review" id="your_review" placeholder="Write your note here"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h3></h3>
                <fieldset>
                    <span class="step-current"><span class="step-current-content"><span class="step-number"><span>03</span>/03</span></span></span>
                    <div class="fieldset-flex">
                        <figure>
                            <img src="<?=base_url()?>foster/assets/images/signup-img-3.png" alt="">
                        </figure>
                        <div class="fieldset-content">
                            <label class="form-label">Enter your information manually below</label>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone number" />
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="<?=base_url()?>foster/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>foster/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>foster/assets/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="<?=base_url()?>foster/assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="<?=base_url()?>foster/assets/js/main.js"></script>
</body>

</html>
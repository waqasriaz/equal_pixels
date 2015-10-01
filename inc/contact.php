<script type="text/javascript">
    $(document).ready(function () {

        // process the form
        $('form').submit(function (event) {

            var captch = $("#correctsum").val();
            var captch_result = $("#result").val();

            if (captch != captch_result) {
                $("#result").addClass('captcha_error');
                $("#result").focus();
                return false;
            }

            var dataString = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "inc/process.php",
                data: dataString,
                success: function (data) {
                    //display message back to user here

                    if (data == "success") {
                        $("#email_success").html("<span class='alert alert-success'>Email Sent Successfully.</span>");
                    } else {
                        $("#email_success").html("<span class='alert alert-danger'>There is problem to send email.</span>");
                    }
                    console.log(data);
                },
                error: function () {
                    $("#email_success").html("<span class='alert alert-danger'>There is problem to send email.</span>");
                }
            });
            return false;

            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });
    });
</script>

<?php
$number1 = rand(1, 9);
$number2 = rand(1, 9);
$sum = $number1 + $number2;
?>
<section id="contact">

    <div class="col-lg-2 hidden-md  hidden-sm hidden-xs"></div>
    <div class="col-lg-8 col-xs-12 text-center contact-wrapper">
     <button class="x contact-trigger  btn"><i class="fa fa-times fa-1x"></i></button>


        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified contact-tabs hidden-xs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#message" aria-controls="message" role="tab" data-toggle="tab"> <i class="fa fa-fw fa-lg fa-send-o tab-icon"></i><span class="cta hidden-xs"><span class="verb">Send</span> Message </span> </a>
                </li>
                <li role="presentation">
                    <a href="#budget" aria-controls="budget" role="tab" data-toggle="tab"> <i class="fa fa-fw fa-lg -o fa-money tab-icon"></i><span class="cta hidden-xs"><span class="verb">Estimate</span> Budget</span></a>
                </li>
                <li role="presentation">
                    <a href="#consultation" aria-controls="consultation" role="tab" data-toggle="tab"> <i class="fa fa-fw fa-lg -o fa-calendar-o tab-icon"></i><span class="cta hidden-xs"><span class="verb">Book</span> Consultation</span></a>
                </li>
                <li role="presentation">
                    <a href="#-request-quote" aria-controls="quote" role="tab" data-toggle="tab"> <i class="fa fa-fw fa-lg -o fa-dollar tab-icon"></i><span class="cta hidden-xs"><span class="verb">Request</span> Quote</span></a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="message">
                    <div class="row">
                        <div class="col-sm-5 text-left" id="contact-info">
                            <h3>Contact info</h3>
                            <div class='contact-item'>
                                <i class="contact-icon fa fa-lg fa-map-marker"></i>
                                <p class="contact-data">Rotterdam, The Netherlands</p>
                            </div>
                            <div class='contact-item'>
                                <i class="fa fa-lg fa-phone"></i>
                                <p class="contact-data">
                                    <a href="tel:+31638453661">+31 (63) 845-3661</a>
                                </p>
                            </div>
                            <div class='contact-item'>
                                <i class="-phone fa fa-lg fa-skype"></i>
                                <p class="contact-data">
                                    <a href="skype:imperets?call">imperets</a>
                                </p>
                            </div>
                            <div class='contact-item'>
                                <i class="-phone fa fa-lg fa-envelope"></i>
                                <p class="contact-data"> <a href="mailto:info@equalpixels.com">info@equalpixels.com</a></p>
                            </div>
                            
                        </div>
                        <div class="col-sm-7 hidden-xs">
                            <div id="email_success"></div>
                            <h3 class="text-left">Send us a message</h3>
                            <form method="post" action="" role="form" class="text-right">
                                <input type="hidden" id="correctsum" name="correctsum" value="<?php echo $sum; ?>"/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" name="contact_email" required class="form-control" placeholder="Enter your email">
                                        <input type="text" name="contact_name" required class="form-control" placeholder="Enter your name">
                                        <textarea class="form-control" name="contact_msg" rows="6" placeholder="Enter your message"></textarea>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                                                        <div class="row contact-bottom">
                                                            <div class="col-sm-4">

                                <ul class="nav nav-tabs soc-links">
                                    <li>
                                        <a href=""><i class="fa fa-2x fa-facebook fa-fw"></i></a>

                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-2x fa-fw fa-twitter"></i></a>

                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-2x fa-fw fa-linkedin"></i></a>

                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-2x fa-behance fa-fw"></i></a>

                                    </li>
                                    <li></li>
                                </ul>
                           </div>                
                                        <div class="col-sm-8 hidden-xs">
                                            <span class="captcha-message">Prove you're a human:</span>
                                            <span id="1stNum"><?php echo $number1; ?></span>
                                            <span id="operator">+</span>
                                            <span id="2ndNum"><?php echo $number2; ?></span>
                                            <span>=</span>
                                            <span id="caclResult">
                                                <input type="text" name="result" class="form-control" id="result" placeholder="result">
                                            </span>
                                            <button type="submit" class="btn btn-primary send">Send</button>
                                        </div>
                                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="budget">
                    This feature is under construction
       
                </div>
                <div role="tabpanel" class="tab-pane" id="consultation">
                    This feature is under construction
  
                </div>
                <div role="tabpanel" class="tab-pane" id="request-quote">
                    This feature is under construction
                   
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 hidden-md hidden-sm hidden-xs"></div>
</section>

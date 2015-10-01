<?php
$overlay =          '<div class="dh-overlay">
                        <div class="port-info-wrapper">
                            <h3 class="port-title">Project Title</h3>
                            <h6 class="port-type">Project Type</h6>
                            <h6 class="port-skills">Skill1 / Skill2 / Skill3 / Skill4 / Skill5</h6>
                            <a href="" class="btn port-button">View</a>
                        </div>
                    </div>';
?>

<section id="portfolio">
    <div class="container text-center">
        <h2>Our Work<span class="dot">.</span></h2>
        <div class="portfolio-filter hidden-sm hidden-xs">
            <a class="btn port-filter">Design</a>
            <a class="btn port-filter">Web</a>
            <a class="btn port-filter">Mobile</a>
            <a class="btn port-filter">WordPress</a>
        </div>
        <div class="row">
            <div class="col-xs-1">
                <button class="upper-arrow btn hidden-md hidden-lg port-left"><i class="fa fa-long-arrow-left"></i></button>

            </div>
            <div class="col-xs-10">
                <div class="progress">
                    <div class="progress-bar" style="width: 0%;">
                        <span class="sr"></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-1">
                <button class="upper-arrow btn hidden-md hidden-lg port-right"><i class="fa fa-long-arrow-right"></i></button>
            </div>
        </div>

    </div>
    <div class="port-over">
        <div class="port-slider">
            <button class="btn hidden-sm hidden-xs arrow port-left"><i class="fa fa-long-arrow-left"></i></button>

            <div class="row portfolio-row">
                <div class="col-md-3 col-sm-6 left-skill dh-container port-box">
                    <img src="" class="img-responsive port-thumb">

                    <?php echo $overlay; ?>

                </div>
                <div class="col-md-3 col-sm-6 hidden-xs mid-skill dh-container port-box">
                    <img src="" class="img-responsive port-thumb">
                    <?php echo $overlay; ?>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs mid-skill dh-container port-box">
                    <img src="" class="img-responsive port-thumb">
                    <?php echo $overlay; ?>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs col-sm-6 right-skill dh-container port-box">
                    <img src="" class="img-responsive port-thumb">
                    <?php echo $overlay; ?>
                </div>
            </div>
            <button class="btn hidden-sm hidden-xs arrow port-right"><i class="fa fa-long-arrow-right"></i></button>
        </div>
    </div>
</section>


<!-- PORTFOLIO MODAL -->
<div class="modal fade port-modal">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
            <div class="loader-wrapper">
                <img src="img/ajax-loader.gif" class="loader">
            </div>
            <img src="" class="port-static-image img-responsive">
        </div>
    </div><!-- /.modal-content -->
</div>

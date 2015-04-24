<section id="mind-scroll"  style="margin-top: 10px;">
    <div class="container">
        <div class="row alert alert-success">
            <div class="col-md-2">
                <h4><?php echo Title::get_title(10); ?></h4>
            </div>
            <div class="col-md-10">
                <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()"><?php $this->get_marquee_news(9); ?></marquee>
            </div>
        </div>
    </div>
</section>
<section id="today-paper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row well">
                    <div class="col-md-12">
                        <?php $this->get_banner(); ?>
                    </div>                    
                </div>
            </div>
            <div class="col-md-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest1" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits1" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured1" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest1">
                        <?php $this->get_latest_updates_all(); ?>
                    </div>
                    <div class="tab-pane" id="hits1">
                        <?php $this->get_most_hits_all(); ?>
                    </div>
                    <div class="tab-pane" id="featured1">
                        <?php $this->get_latest_featured_all(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php $this->get_advertisement(10); ?>
            </div>
        </div>
    </div>
</section>
<section id="mind-features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php $this->get_advertisement(11); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(12); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(13); ?>
            </div>
        </div>
    </div>
</section>
<section id="news1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(1); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest1" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits1" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured1" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest1">
                        <?php $this->get_latest_updates(1); ?>
                    </div>
                    <div class="tab-pane" id="hits1">
                        <?php $this->get_most_hits(1); ?>
                    </div>
                    <div class="tab-pane" id="featured1">
                        <?php $this->get_latest_featured(1); ?>
                    </div>
                </div>
            </div>            
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(2); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest2" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits2" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured2" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest2">
                        <?php $this->get_latest_updates(2); ?>
                    </div>
                    <div class="tab-pane" id="hits2">
                        <?php $this->get_most_hits(2); ?>
                    </div>
                    <div class="tab-pane" id="featured2">
                        <?php $this->get_latest_featured(2); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(3); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest3" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits3" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured3" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest3">
                        <?php $this->get_latest_updates(3); ?>
                    </div>
                    <div class="tab-pane" id="hits3">
                        <?php $this->get_most_hits(3); ?>
                    </div>
                    <div class="tab-pane" id="featured3">
                        <?php $this->get_latest_featured(3); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>
<section id="mind-features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php $this->get_advertisement(1); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(2); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(3); ?>
            </div>
        </div>
    </div>
</section>
<section id="news2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(4); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest4" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits4" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured4" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest4">
                        <?php $this->get_latest_updates(4); ?>
                    </div>
                    <div class="tab-pane" id="hits4">
                        <?php $this->get_most_hits(4); ?>
                    </div>
                    <div class="tab-pane" id="featured4">
                        <?php $this->get_latest_featured(4); ?>
                    </div>
                </div>
            </div>            
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(5); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest5" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits5" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured5" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest5">
                        <?php $this->get_latest_updates(5); ?>
                    </div>
                    <div class="tab-pane" id="hits5">
                        <?php $this->get_most_hits(5); ?>
                    </div>
                    <div class="tab-pane" id="featured5">
                        <?php $this->get_latest_featured(5); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(6); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest6" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits6" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured6" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest6">
                        <?php $this->get_latest_updates(6); ?>
                    </div>
                    <div class="tab-pane" id="hits6">
                        <?php $this->get_most_hits(6); ?>
                    </div>
                    <div class="tab-pane" id="featured6">
                        <?php $this->get_latest_featured(6); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>
<section id="mind-features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php $this->get_advertisement(4); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(5); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(6); ?>
            </div>
        </div>
    </div>
</section>
<section id="news3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(7); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest7" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits7" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured7" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest7">
                        <?php $this->get_latest_updates(7); ?>
                    </div>
                    <div class="tab-pane" id="hits7">
                        <?php $this->get_most_hits(7); ?>
                    </div>
                    <div class="tab-pane" id="featured7">
                        <?php $this->get_latest_featured(7); ?>
                    </div>
                </div>
            </div>            
            <div class="col-md-4">
                <h2 class="section-title"><?php echo ContentCategory::getCategoryName(8); ?></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#latest8" data-toggle="tab"><?php echo Title::get_title(1); ?></a></li>
                    <li><a href="#hits8" data-toggle="tab"><?php echo Title::get_title(2); ?></a></li>
                    <li><a href="#featured8" data-toggle="tab"><?php echo Title::get_title(3); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="latest8">
                        <?php $this->get_latest_updates(8); ?>
                    </div>
                    <div class="tab-pane" id="hits8">
                        <?php $this->get_most_hits(8); ?>
                    </div>
                    <div class="tab-pane" id="featured8">
                        <?php $this->get_latest_featured(8); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="section-title"><i class="fa fa-facebook"></i> Facebook Like Box</h3>
                <?php
                $this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
                    'likebox' => array(
                        'url' => 'https://www.facebook.com/pages/thakurgaonnews24com/289619581232012',
                        'header' => 'true',
                        'width' => '360',
                        'height' => '500',
                        'layout' => 'light',
                        'show_post' => 'false',
                        'show_faces' => 'true',
                        'show_border' => 'true',
                    )
                ));
                ?>
            </div>
        </div>
    </div> <!-- container -->
</section>
<section id="mind-features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php $this->get_advertisement(7); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(8); ?>
            </div>
            <div class="col-md-4">
                <?php $this->get_advertisement(9); ?>
            </div>
        </div>
    </div>
</section>
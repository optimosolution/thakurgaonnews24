<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);
?>
<div class="row">
    <div class="col-md-8">
        <section>
            <h2 class="post-title"><?php echo $model->title; ?></h2>
            <div style="font-style: italic; color: #999;"><?php echo Content::get_date_view($model->created); ?></div>
            <p>
                <?php
//                $this->widget('application.extensions.SocialShareButton.SocialShareButton', array(
//                    'style' => 'horizontal',
//                    'networks' => array('facebook', 'googleplus', 'linkedin', 'twitter'),
//                    'data_via' => '', //twitter username (for twitter only, if exists else leave empty)
//                ));
                ?>
                <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51c72b3b6653178f"></script>
            <!-- AddThis Button END -->
            </p>
            <?php echo Content::get_picture($model->id); ?>            
            <?php echo $model->introtext; ?>
            <div class="block">
                <?php
                $this->widget('application.extensions.fb-comment.FBComment', array(
                    'url' => 'http://www.thakurgaonnews24.com/' . Yii::app()->request->url, // required site url
                    'posts' => 20, // optional no. of posts (default: 10)
                    'width' => 750 // optional width of comment box (default: 470)
                ));
                ?>                
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <aside class="sidebar">
            <div class="block">
                <ul class="nav nav-tabs" id="myTab2">
                    <li class="active"><a href="#fav" data-toggle="tab"><i class="fa fa-star"></i></a></li>
                    <li><a href="#hits" data-toggle="tab"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#featured" data-toggle="tab"><i class="fa fa-bookmark"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="fav">
                        <h3 class="post-title"><?php echo Title::get_title(4); ?></h3>
                        <?php $this->get_latest_updates($model->catid); ?>
                    </div>
                    <div class="tab-pane" id="hits">
                        <h3 class="post-title"><?php echo Title::get_title(2); ?></h3>
                        <?php $this->get_most_hits($model->catid); ?>
                    </div>
                    <div class="tab-pane" id="featured">
                        <h3 class="post-title"><?php echo Title::get_title(3); ?></h3>
                        <?php $this->get_latest_featured($model->catid); ?>
                    </div>
                </div> <!-- tab-content -->				
            </div>
            <div class="block">
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
        </aside> <!-- Sidebar -->
    </div>
</div>

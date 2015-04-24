<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = ContentCategory::getCategoryName($_REQUEST['id']) . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    ContentCategory::getCategoryName($_REQUEST['id']),
);
?>
<h1 class="section-title"><?php echo ContentCategory::getCategoryName($_REQUEST['id']); ?></h1>
<div class="row">
    <div class="col-md-8 col-md-push-4">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'pager' => array(
                'htmlOptions' => array(
                    'class' => 'pagination',
                ),
                'header' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'dt-row dt-bottom-row',
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ));
        ?>
    </div> <!-- col-md-8 -->
    <div class="col-md-4 col-md-pull-8">
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
                        <?php $this->get_latest_updates($_GET['id']); ?>
                    </div>
                    <div class="tab-pane" id="hits">
                        <h3 class="post-title"><?php echo Title::get_title(2); ?></h3>
                        <?php $this->get_most_hits($_GET['id']); ?>
                    </div>
                    <div class="tab-pane" id="featured">
                        <h3 class="post-title"><?php echo Title::get_title(3); ?></h3>
                        <?php $this->get_latest_featured($_GET['id']); ?>
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
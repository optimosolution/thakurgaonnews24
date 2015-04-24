<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);
?>
<div class="row">
    <div class="col-md-12">
        <section>
            <h2 class="post-title"><?php echo $model->title; ?></h2>
            <p>
                <?php
                $this->widget('application.extensions.SocialShareButton.SocialShareButton', array(
                    'style' => 'horizontal',
                    'networks' => array('facebook', 'googleplus', 'linkedin', 'twitter'),
                    'data_via' => '', //twitter username (for twitter only, if exists else leave empty)
                ));
                ?>
            </p>
            <?php echo Content::get_picture($model->id); ?>
        </section>
    </div>
</div>

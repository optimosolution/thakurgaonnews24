<?php
/* @var $this ContentController */
/* @var $data Content */
?>
<article class="post animated fadeInDown">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3 class="post-title">
                <?php echo CHtml::link(CHtml::encode($data->title), array('/content/view', 'id' => CHtml::encode($data->id)), array('class' => 'transicion')); ?>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <?php echo Content::get_picture($data->id); ?>
                    <?php //echo mb_substr($this->strip_html_tags(CHtml::decode($data->introtext)), 0, 1500, 'UTF-8'); ?>
                    <?php //echo mb_substr($data->introtext, 0, 1000, 'UTF-8'); ?>
                    <?php echo $data->introtext; ?>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <i class="fa fa-clock-o"></i> <?php echo Content::get_date_time(CHtml::encode($data->created)); ?> <i class="fa fa-users"> </i> <?php echo CHtml::encode($data->hits); ?> hits
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <?php echo CHtml::link('Read more &raquo;', array('/content/view', 'id' => CHtml::encode($data->id)), array('class' => 'pull-right')); ?>
                </div>
            </div>
        </div>
    </div>
</article> <!-- post -->
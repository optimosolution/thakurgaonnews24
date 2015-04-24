<?php
/* @var $this GalleryController */
/* @var $data Banner */
?>
<div class="col-md-3">
    <?php
    $logo = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $data->banner, $data->name, array('alt' => $data->name, 'class' => 'img-responsive', 'title' => $data->name, 'style' => ''));
    echo CHtml::link($logo, Yii::app()->baseUrl . '/uploads/banners/' . $data->banner, array('class' => 'thumbnail', 'data-lightbox' => 'captions'));
    ?>
</div>
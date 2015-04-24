<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->pageTitle = BannerCategory::get_title($_REQUEST['id']) . ' - ' . Yii::app()->name;
$this->breadcrumbs = array(
    BannerCategory::get_title($_REQUEST['id']),
);
?>
<fieldset>
    <legend><?php echo BannerCategory::get_title($_REQUEST['id']); ?></legend>
    <?php
    $this->widget('bootstrap.widgets.TbListView', array(
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
</fieldset>
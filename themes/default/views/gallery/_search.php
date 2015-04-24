<?php
/* @var $this GalleryController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>11)); ?>

                    <?php echo $form->textFieldControlGroup($model,'catid',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'alias',array('span'=>5,'maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'banner',array('span'=>5,'maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'clickurl',array('span'=>5,'maxlength'=>200)); ?>

                    <?php echo $form->textAreaControlGroup($model,'description',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'published',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'sticky',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ordering',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'created_on',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'created_by',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'publish_up',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'publish_down',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
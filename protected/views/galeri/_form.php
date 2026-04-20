<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'galeri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	 'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'judul'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'judul'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'deskripsi'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'deskripsi'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'gambar'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->fileField($model,'gambar',array('class'=>'form-control','required'=>true)); ?>
		  <p class="help-block">Gambar dengan ekstensi jpg, jpeg, gif, dan png.</p>
		  <?php echo $form->error($model,'gambar'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'direktori'); ?></label>
          <div class="col-sm-6">
          	<style> .select2-results__group {display: none !important;} </style>
          	<?php
              $opts = CHtml::listData(Dirgaleri::model()->findAll(),'id_direktori','nama_direktori');
              echo $form->dropDownList($model,'direktori',array(''=>'Pilih..',$opts),array('class'=>'form-control select2','style'=>'width:100%'));              
            ?>
      		<?php echo $form->error($model,'direktori'); ?>
          </div>
        </div>
       
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/galeri/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>
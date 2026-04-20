<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwalpoli-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
'htmlOptions'=>array('class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'klinik'); ?></label>
          <div class="col-sm-6">
          	<style> .select2-results__group {display: none !important;} </style>
          	<?php
              $opts = CHtml::listData(Klinik::model()->findAll(),'id_klinik','nama_klinik');
              echo $form->dropDownList($model,'klinik',array(''=>'Pilih..',$opts),array('class'=>'form-control select2','style'=>'width:100%'));              
            ?>
      		<?php echo $form->error($model,'klinik'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'dokter'); ?></label>
          <div class="col-sm-6">
            <style> .select2-results__group {display: none !important;} </style>
          	<?php
              $opts = CHtml::listData(Dokter::model()->findAll(),'id_dokter','nama_dokter');
              echo $form->dropDownList($model,'dokter',array(''=>'Pilih..',$opts),array('class'=>'form-control select2','style'=>'width:100%'));              
            ?>
      		<?php echo $form->error($model,'dokter'); ?>
          </div>
        </div>
        <!-- <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'hari'); ?></label>
          <div class="col-sm-6">
          	<?php echo $form->dropDownList($model,'hari',array(''=>'Pilih..','minggu'=>'Minggu','senin'=>'Senin','selasa'=>'Selasa','rabu'=>'Rabu','kamis'=>'Kamis','jumat'=>'Jumat','sabtu'=>'Sabtu'),array('class'=>'form-control select2','style'=>'width:100%')); ?>
      		<?php echo $form->error($model,'hari'); ?>
          </div>
        </div> -->
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'hari'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'hari',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'hari'); ?>
          </div>
        </div><div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'jam'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'jam',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'jam'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'keterangan'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'keterangan',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'keterangan'); ?>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/jadwalpoli/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>
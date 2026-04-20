<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
   'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'form-horizontal')
)); ?>

      <div class="box-body">
        <div class="form-group" style="display: none">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'id_dokter'); ?></label>
          <div class="col-sm-6">
            <?php echo $form->textField($model,'id_dokter',array('class'=>'form-control','readonly'=>true,'value'=> (($model->isNewRecord) ? $model->genIdEntry() : $model->id_dokter),)); ?>
          <?php echo $form->error($model,'id_dokter'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'nama_dokter'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'nama_dokter',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'nama_dokter'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'foto'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->fileField($model,'foto',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'foto'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'tempat_lahir'); ?></label>
          <div class="col-sm-6">
          <?php echo $form->textField($model,'tempat_lahir',array('class'=>'form-control')); ?>
          <?php echo $form->error($model,'tempat_lahir'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'tgl_lahir'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'tgl_lahir',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'tgl_lahir'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'jk'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->dropDownList($model,'jk',array(''=>'Pilih..','l'=>'Laki-laki','p'=>'Perempuan'),array('class'=>'form-control select2','style'=>'width:100%')); ?>
			<?php echo $form->error($model,'jk'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'keterangan'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'keterangan',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'keterangan'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'no_izin'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'no_izin',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'no_izin'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'id_spesialis'); ?></label>
          <div class="col-sm-6">
      		<?php
              $opts = CHtml::listData(Spesialis::model()->findAll(),'kd_spesialis','nama_spesialis');
              echo $form->dropDownList($model,'id_spesialis',array(''=>'Pilih..',$opts),array('class'=>'form-control select2','style'=>'width:100%'));              
            ?>
      		<?php echo $form->error($model,'id_spesialis'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><?php echo $form->labelEx($model,'status_praktik'); ?></label>
          <div class="col-sm-6">
      		<?php echo $form->textField($model,'status_praktik',array('class'=>'form-control')); ?>
      		<?php echo $form->error($model,'status_praktik'); ?>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/dokter/admin" class="btn btn-danger btn-flat">Kembali</a>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save',array('class'=>'btn btn-success btn-flat pull-right')); ?>
      </div>
      <!-- /.box-footer -->

<?php $this->endWidget(); ?>

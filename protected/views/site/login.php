<div class="login-box">
  <?php if(Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success" style="margin-bottom: 15px;">
      <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
  <?php endif; ?>

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
  <div class="login-box-body">
	  <div class="login-logo">
      <img src="<?= Yii::app()->request->baseUrl; ?>/images/logo-xs.png" style="display: block;height: 70px;margin: 0 auto">
	    <a href="<?= Yii::app()->request->baseUrl; ?>" style="color: #3bb3c2"><b>PELITA</b>INSANI</a>
	  </div>

      <div class="form-group has-feedback">
      	<?php echo $form->textField($model, 'username', ['type'=>'text','class' => "form-control", 'placeholder' => "Masukkan Username"]); ?>
        <?php echo $form->error($model, 'username',['style'=>'text-align:center']); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      	 <?php echo $form->passwordField($model, 'password', ['type'=>'password','class' => "form-control", 'placeholder' => 'Masukkan Password']); ?>
         <?php echo $form->error($model, 'password',['style'=>'text-align:center']); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
      <div class="row">
        <div class="col-xs-6" style="padding-top: 8px;">
          <a href="javascript:;" data-toggle="modal" data-target="#modalTambahUser" style="color: #3bb3c2; font-weight: 600;">
            Tambah data user
          </a>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          <a href="<?php echo Yii::app()->request->urlReferrer; ?>" class="btn btn-danger btn-block btn-flat">Kembali</a>
        </div>
      </div>
  </div>
  <?php $this->endWidget(); ?>
</div>

<div class="modal fade" id="modalTambahUser" tabindex="-1" role="dialog" aria-labelledby="modalTambahUserLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php $userForm=$this->beginWidget('CActiveForm', array(
        'id'=>'user-create-form',
        'enableClientValidation'=>false,
      )); ?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalTambahUserLabel">Tambah Data User</h4>
      </div>
      <div class="modal-body">
        <?php echo $userForm->errorSummary($userModel, '', '', array('class'=>'alert alert-danger')); ?>

        <div class="form-group">
          <?php echo $userForm->labelEx($userModel, 'username'); ?>
          <?php echo $userForm->textField($userModel, 'username', array('class'=>'form-control', 'placeholder'=>'Masukkan username')); ?>
          <?php echo $userForm->error($userModel, 'username'); ?>
        </div>

        <div class="form-group">
          <?php echo $userForm->labelEx($userModel, 'password'); ?>
          <?php echo $userForm->passwordField($userModel, 'password', array('class'=>'form-control', 'placeholder'=>'Masukkan password')); ?>
          <?php echo $userForm->error($userModel, 'password'); ?>
        </div>

        <div class="form-group" style="margin-bottom: 0;">
          <?php echo $userForm->labelEx($userModel, 'nama'); ?>
          <?php echo $userForm->textField($userModel, 'nama', array('class'=>'form-control', 'placeholder'=>'Masukkan nama user')); ?>
          <?php echo $userForm->error($userModel, 'nama'); ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php $this->endWidget(); ?>
    </div>
  </div>
</div>

<script>
  <?php if(!empty($showUserModal) || $userModel->hasErrors()): ?>
    $(window).on('load', function () {
      $('#modalTambahUser').modal('show');
    });
  <?php endif; ?>
</script>

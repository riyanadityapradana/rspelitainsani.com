<?php

$fas = Fasilitas::model()->findByAttributes(array('id_fasilitas'=>$_POST['id']));

?>
<img src="<?= Yii::app()->request->baseUrl; ?>/images/fasilitas/<?= $fas->gambar;?>" style="max-width: 100%;">
</br>
<?= $fas->nama;?>
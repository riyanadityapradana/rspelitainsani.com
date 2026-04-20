<?php

$galeri = Galeri::model()->findByAttributes(array('id_galeri'=>$_POST['id']));

?>
<img src="<?= Yii::app()->request->baseUrl; ?>/images/galeri/<?= $galeri->gambar;?>" style="max-width: 100%;">
</br>
<?= $galeri->judul;?>
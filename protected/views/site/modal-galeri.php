<?php

$galeri = Galeri::model()->findByAttributes(array('id_galeri'=>$_POST['id']));

?>

<img class="modalg-content" src="<?= Yii::app()->request->baseUrl; ?>/images/galeri/<?= $galeri->gambar;?>">
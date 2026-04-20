<?php

/**
 * This is the model class for table "t_fasilitas".
 *
 * The followings are the available columns in table 't_fasilitas':
 * @property integer $id_fasilitas
 * @property string $nama
 * @property string $menu
 * @property string $deskripsi
 * @property string $gambar
 * @property integer $kategori
 */
class Fasilitas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_fasilitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, kategori', 'required'),
			array('gambar', 'required', 'on'=>'insert'),
			array('kategori', 'numerical', 'integerOnly'=>true),
			array('menu', 'length', 'max'=>15),
			array('deskripsi', 'safe'),
			array('gambar', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>false, 'on'=>'insert'),
			array('gambar', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_fasilitas, nama, menu, deskripsi, gambar, kategori', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fasilitas' => 'Id Fasilitas',
			'nama' => 'Nama',
			'menu' => 'Menu',
			'deskripsi' => 'Deskripsi',
			'gambar' => 'Gambar',
			'kategori' => 'Kategori',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_fasilitas',$this->id_fasilitas);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('menu',$this->menu,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('kategori',$this->kategori);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fasilitas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

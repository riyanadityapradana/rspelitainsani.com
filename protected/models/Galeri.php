<?php

/**
 * This is the model class for table "t_galeri".
 *
 * The followings are the available columns in table 't_galeri':
 * @property integer $id_galeri
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property string $direktori
 */
class Galeri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_galeri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, direktori', 'required'),
			array('gambar', 'required', 'on'=>'insert'),
			array('direktori', 'length', 'max'=>3),
			array('judul, deskripsi', 'safe'),
			array('gambar', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>false, 'on'=>'insert'),
			array('gambar', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_galeri, judul, deskripsi, gambar, direktori', 'safe', 'on'=>'search'),
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
			'id_galeri' => 'Id Galeri',
			'judul' => 'Judul',
			'deskripsi' => 'Deskripsi',
			'gambar' => 'Gambar',
			'direktori' => 'Direktori',
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

		$criteria->compare('id_galeri',$this->id_galeri);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('direktori',$this->direktori,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Galeri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

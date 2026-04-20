<?php

/**
 * This is the model class for table "t_konten".
 *
 * The followings are the available columns in table 't_konten':
 * @property integer $id_konten
 * @property string $judul
 * @property string $isi
 * @property string $gambar
 * @property string $tgl_entry
 * @property integer $kategori
 * @property integer $status
 */
class Konten extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_konten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('id_konten, judul, isi, gambar, tgl_entry, kategori, status', 'required'),
			array('id_konten, kategori, status', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>200),
			array('isi, gambar, tgl_berita', 'safe'),
			array('gambar', 'file', 'types'=>'jpg, jpeg, gif, png'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_konten, judul, isi, gambar, tgl_entry, kategori, status', 'safe', 'on'=>'search'),
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
			'id_konten' => 'Id Konten',
			'judul' => 'Judul',
			'isi' => 'Isi',
			'gambar' => 'Gambar',
			'tgl_entry' => 'Tgl Entry',
			'kategori' => 'Kategori',
			'status' => 'Status',
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

		$criteria->compare('id_konten',$this->id_konten);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('tgl_entry',$this->tgl_entry,true);
		$criteria->compare('kategori',$this->kategori);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Konten the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

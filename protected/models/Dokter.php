<?php

/**
 * This is the model class for table "t_dokter".
 *
 * The followings are the available columns in table 't_dokter':
 * @property string $id_dokter
 * @property string $nama_dokter
 * @property string $foto
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $jk
 * @property string $keterangan
 * @property string $no_izin
 * @property string $id_spesialis
 * @property string $status_praktik
 */
class Dokter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_dokter';
	}
    public function genIdEntry()
    {
        $_first = "001";
        $last_po = $this->model()->find(array('order'=>'id_dokter DESC'));
        $no = $_first; 
        if($last_po != null){
			$_no = $last_po->id_dokter;
            $_no++;
            $_no = substr("000", strlen($_no)).$_no;
            $no = $_no;
            // $no++;
            // $no = substr("000", strlen($no)) . $no;
        }
        return $no;
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokter, nama_dokter', 'required'),
			array('id_dokter, tempat_lahir, no_izin, status_praktik', 'length', 'max'=>20),
			array('foto', 'length', 'max'=>200),
			array('jk', 'length', 'max'=>1),
			array('id_spesialis', 'length', 'max'=>3),
			array('tgl_lahir, keterangan', 'safe'),
			array('foto', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>false, 'on'=>'insert'),
			array('foto', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dokter, nama_dokter, foto, tempat_lahir, tgl_lahir, jk, keterangan, no_izin, id_spesialis, status_praktik', 'safe', 'on'=>'search'),
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
			'id_dokter' => 'Id Dokter',
			'nama_dokter' => 'Nama Dokter',
			'foto' => 'Foto',
			'tempat_lahir' => 'Tempat Lahir',
			'tgl_lahir' => 'Tgl Lahir',
			'jk' => 'Jenis Kelamin',
			'keterangan' => 'Keterangan',
			'no_izin' => 'No. Izin',
			'id_spesialis' => 'Spesialis',
			'status_praktik' => 'Status Praktik',
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

		$criteria->compare('id_dokter',$this->id_dokter,true);
		$criteria->compare('nama_dokter',$this->nama_dokter,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('jk',$this->jk,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('no_izin',$this->no_izin,true);
		$criteria->compare('id_spesialis',$this->id_spesialis,true);
		$criteria->compare('status_praktik',$this->status_praktik,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dokter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

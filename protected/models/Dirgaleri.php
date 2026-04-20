<?php

/**
 * This is the model class for table "t_dirgaleri".
 *
 * The followings are the available columns in table 't_dirgaleri':
 * @property string $id_direktori
 * @property string $nama_direktori
 */
class Dirgaleri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_dirgaleri';
	}

    public function genIdEntry()
    {
        $_first = "001";
        $last_po = $this->model()->find(array('order'=>'id_direktori DESC'));
        $no = $_first; 
        if($last_po != null){
			$_no = $last_po->id_direktori;
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
			array('id_direktori, nama_direktori', 'required'),
			array('id_direktori', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_direktori, nama_direktori', 'safe', 'on'=>'search'),
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
			'id_direktori' => 'Id Direktori',
			'nama_direktori' => 'Nama Direktori',
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

		$criteria->compare('id_direktori',$this->id_direktori,true);
		$criteria->compare('nama_direktori',$this->nama_direktori,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dirgaleri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

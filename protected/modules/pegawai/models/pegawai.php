<?php

/**
 * This is the model class for table "pegawai".
 *
 * The followings are the available columns in table 'pegawai':
 * @property integer $nik
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $phone
 * @property string $jenkel
 * @property string $createTime
 * @property string $updateTime
 */
class pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, email, phone, jenkel', 'required'),
			array('nama, email', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>15),
			array('jenkel', 'length', 'max'=>20),
			array('updateTime', 'safe'),
			array('createTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nik, nama, alamat, email, phone, jenkel, createTime, updateTime', 'safe', 'on'=>'search'),
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
			'nik' => 'Nik',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'email' => 'Email',
			'phone' => 'Phone',
			'jenkel' => 'Jenkel',
			'createTime' => 'Create Time',
			'updateTime' => 'Update Time',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nik',$this->nik);

		$criteria->compare('nama',$this->nama,true);

		$criteria->compare('alamat',$this->alamat,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('jenkel',$this->jenkel,true);

		$criteria->compare('createTime',$this->createTime,true);

		$criteria->compare('updateTime',$this->updateTime,true);

		return new CActiveDataProvider('pegawai', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
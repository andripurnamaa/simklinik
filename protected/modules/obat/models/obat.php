<?php

/**
 * This is the model class for table "obat".
 *
 * The followings are the available columns in table 'obat':
 * @property integer $id_obat
 * @property string $nama
 * @property integer $stok
 * @property double $harga_jual
 * @property double $harga_beli
 * @property integer $id_satuan
 * @property string $createTime
 * @property string $updateTime
 */
class obat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_obat, nama, stok, harga_jual, harga_beli, id_satuan, createTime', 'required'),
			array('id_obat, stok, id_satuan', 'numerical', 'integerOnly'=>true),
			array('harga_jual, harga_beli', 'numerical'),
			array('nama', 'length', 'max'=>200),
			array('updateTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_obat, nama, stok, harga_jual, harga_beli, id_satuan, createTime, updateTime', 'safe', 'on'=>'search'),
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
			'id_obat' => 'Id Obat',
			'nama' => 'Nama',
			'stok' => 'Stok',
			'harga_jual' => 'Harga Jual',
			'harga_beli' => 'Harga Beli',
			'id_satuan' => 'Id Satuan',
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

		$criteria->compare('id_obat',$this->id_obat);

		$criteria->compare('nama',$this->nama,true);

		$criteria->compare('stok',$this->stok);

		$criteria->compare('harga_jual',$this->harga_jual);

		$criteria->compare('harga_beli',$this->harga_beli);

		$criteria->compare('id_satuan',$this->id_satuan);

		$criteria->compare('createTime',$this->createTime,true);

		$criteria->compare('updateTime',$this->updateTime,true);

		return new CActiveDataProvider('obat', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return obat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
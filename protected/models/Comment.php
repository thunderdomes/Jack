<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id
 * @property string $nama
 * @property string $sim
 * @property string $berlaku
 * @property string $telp
 * @property string $email
 * @property integer $tipe
 * @property integer $design
 * @property integer $comfort
 * @property integer $performance
 * @property integer $features
 * @property string $comment
 * @property string $image_url
 * @property string $finger_id
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipe, design, comfort, performance, features', 'numerical', 'integerOnly'=>true),
			array('nama, email', 'length', 'max'=>30),
			array('sim', 'length', 'max'=>50),
			array('telp', 'length', 'max'=>20),
			array('berlaku, comment, image_url, finger_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, sim, berlaku, telp, email, tipe, design, comfort, performance, features, comment, image_url, finger_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nama' => 'Nama',
			'sim' => 'Sim',
			'berlaku' => 'Berlaku',
			'telp' => 'Telp',
			'email' => 'Email',
			'tipe' => 'Tipe',
			'design' => 'Design',
			'comfort' => 'Comfort',
			'performance' => 'Performance',
			'features' => 'Features',
			'comment' => 'Comment',
			'image_url' => 'Image Url',
			'finger_id' => 'Finger',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('sim',$this->sim,true);
		$criteria->compare('berlaku',$this->berlaku,true);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tipe',$this->tipe);
		$criteria->compare('design',$this->design);
		$criteria->compare('comfort',$this->comfort);
		$criteria->compare('performance',$this->performance);
		$criteria->compare('features',$this->features);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('finger_id',$this->finger_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
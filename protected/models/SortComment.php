<?php

/**
 * This is the model class for table "sort_comment".
 *
 * The followings are the available columns in table 'sort_comment':
 * @property integer $id
 * @property string $comment
 * @property string $finger_id
 * @property integer $tipe
 * @property integer $design
 * @property integer $comfort
 * @property integer $performance
 * @property integer $features
 */
class SortComment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SortComment the static model class
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
		return 'sort_comment';
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
			array('comment, finger_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comment, finger_id, tipe, design, comfort, performance, features', 'safe', 'on'=>'search'),
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
			'comment' => 'Comment',
			'finger_id' => 'Finger',
			'tipe' => 'Tipe',
			'design' => 'Design',
			'comfort' => 'Comfort',
			'performance' => 'Performance',
			'features' => 'Features',
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
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('finger_id',$this->finger_id,true);
		$criteria->compare('tipe',$this->tipe);
		$criteria->compare('design',$this->design);
		$criteria->compare('comfort',$this->comfort);
		$criteria->compare('performance',$this->performance);
		$criteria->compare('features',$this->features);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
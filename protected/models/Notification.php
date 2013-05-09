<?php

/**
 * This is the model class for table "notification".
 *
 * The followings are the available columns in table 'notification':
 * @property integer $not_id
 * @property integer $q_id
 * @property string $person1
 * @property string $person2
 * @property string $activity
 */
class Notification extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Notification the static model class
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
		return 'notification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('q_id', 'numerical', 'integerOnly'=>true),
			array('person1, person2', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('not_id, q_id, person1, person2, activity', 'safe', 'on'=>'search'),
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
			'not_id' => 'Not',
			'q_id' => 'Q',
			'person1' => 'Person1',
			'person2' => 'Person2',
			'activity' => 'Activity',
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

		$criteria->compare('not_id',$this->not_id);
		$criteria->compare('q_id',$this->q_id);
		$criteria->compare('person1',$this->person1,true);
		$criteria->compare('person2',$this->person2,true);
		$criteria->compare('activity',$this->activity,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
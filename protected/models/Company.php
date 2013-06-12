<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $com_id
 * @property string $com_name
 * @property string $com_add
 * @property string $com_logo
 * @property string $com_emp
 * @property string $com_follower
 * @property string $com_about
 * @property string $com_creator
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('com_name, com_add, com_about', 'required'),
			array('com_name', 'length', 'max'=>1000),
			array('com_logo, com_creator', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('com_id, com_name, com_add, com_logo, com_emp, com_follower, com_about, com_creator', 'safe', 'on'=>'search'),
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
			'com_id' => 'Com',
			'com_name' => 'Com Name',
			'com_add' => 'Com Add',
			'com_logo' => 'Com Logo',
			'com_emp' => 'Com Emp',
			'com_follower' => 'Com Follower',
			'com_about' => 'Com About',
			'com_creator' => 'Com Creator',
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

		$criteria->compare('com_id',$this->com_id);
		$criteria->compare('com_name',$this->com_name,true);
		$criteria->compare('com_add',$this->com_add,true);
		$criteria->compare('com_logo',$this->com_logo,true);
		$criteria->compare('com_emp',$this->com_emp,true);
		$criteria->compare('com_follower',$this->com_follower,true);
		$criteria->compare('com_about',$this->com_about,true);
		$criteria->compare('com_creator',$this->com_creator,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
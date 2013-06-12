<?php

/**
 * This is the model class for table "institution".
 *
 * The followings are the available columns in table 'institution':
 * @property integer $inst_id
 * @property string $inst_name
 * @property string $inst_add
 * @property string $inst_website
 * @property string $inst_about
 * @property string $inst_follower
 * @property string $inst_logo
 * @property string $inst_student
 * @property string $inst_creator
 */
class Institution extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Institution the static model class
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
		return 'institution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inst_name, inst_add, inst_website, inst_about, inst_follower, inst_logo, inst_student, inst_creator', 'required'),
			array('inst_name, inst_website', 'length', 'max'=>100),
			array('inst_logo', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('inst_id, inst_name, inst_add, inst_website, inst_about, inst_follower, inst_logo, inst_student, inst_creator', 'safe', 'on'=>'search'),
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
			'inst_id' => 'Inst',
			'inst_name' => 'Inst Name',
			'inst_add' => 'Inst Add',
			'inst_website' => 'Inst Website',
			'inst_about' => 'Inst About',
			'inst_follower' => 'Inst Follower',
			'inst_logo' => 'Inst Logo',
			'inst_student' => 'Inst Student',
			'inst_creator' => 'Inst Creator',
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

		$criteria->compare('inst_id',$this->inst_id);
		$criteria->compare('inst_name',$this->inst_name,true);
		$criteria->compare('inst_add',$this->inst_add,true);
		$criteria->compare('inst_website',$this->inst_website,true);
		$criteria->compare('inst_about',$this->inst_about,true);
		$criteria->compare('inst_follower',$this->inst_follower,true);
		$criteria->compare('inst_logo',$this->inst_logo,true);
		$criteria->compare('inst_student',$this->inst_student,true);
		$criteria->compare('inst_creator',$this->inst_creator,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
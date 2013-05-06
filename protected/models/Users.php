<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $user_id
 * @property string $f_name
 * @property string $l_name
 * @property string $username
 * @property string $password
 * @property string $batch
 * @property string $stream
 * @property integer $roll
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('f_name, l_name, email_id, username, password, batch, stream, roll', 'required'),
			array('roll', 'numerical', 'integerOnly'=>true),
			array('f_name, l_name, username, batch', 'length', 'max'=>50),
			array('password, stream', 'length', 'max'=>50),
			array('username', 'unique', 'attributeName'=> 'username', 'caseSensitive' => 'false'),
			array('email_id', 'unique', 'attributeName'=> 'email_id', 'caseSensitive' => 'false'),
			array('email_id','email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, f_name, l_name, username, password, batch, stream, roll', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'f_name' => 'First Name',
			'l_name' => 'Last Name',
			'email_id' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'batch' => 'Batch',
			'stream' => 'Stream',
			'roll' => 'Roll',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('f_name',$this->f_name,true);
		$criteria->compare('l_name',$this->l_name,true);
		$criteria->compare('email_id',$this->email_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('batch',$this->batch,true);
		$criteria->compare('stream',$this->stream,true);
		$criteria->compare('roll',$this->roll);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
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
			array('f_name, l_name, email_id, username, password', 'required'),
			array('f_name, l_name, username', 'length', 'max'=>50),
			array('password', 'length', 'max'=>50),
			array('username', 'unique', 'attributeName'=> 'username', 'caseSensitive' => 'false'),
			array('email_id', 'unique', 'attributeName'=> 'email_id', 'caseSensitive' => 'false'),
			array('email_id','email'),
			array('image', 'file', 'types'=>'jpg, gif, png','allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, f_name, l_name, username, email_id','safe', 'on'=>'search'),
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
			'verification' => 'Verification',
			'image' => 'Choose Display Picture',
			
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
		$criteria->compare('verification',$this->verification,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function findByUsername($username){
		return $this->find('username LIKE "'.$username.'"');
	}

	public function findIdByUsername($username){
		$user = $this->find('username LIKE "'.$username.'"');
		return $user->user_id;
	}

	public function findByUserid($id){
		return $this->findByPk($id);
	}

	public function findNameByUsername($username){
		$username = explode(' ',$username);
		if($username[0]=='Anonymous' || $username[0]=='Anonymus'){
			return 'Anonymous User';
		}
		else{
			$user = self::findByUsername(end($username));
			return ucwords($user->f_name)." ".ucwords($user->l_name);
		}
	}
	
	public function findNameByUserid($id){
		//die(var_dump($id));
		$id = explode(' ',$id);
		if($id[0]=='Anonymous' || $id[0]=='Anonymus'){
			return 'Anonymous User';
		}
		else{
			$user = self::findByUserid(end($id));
			$name = ucwords($user->f_name)." ".ucwords($user->l_name);
			return CHtml::link($name, array(Yii::app()->baseUrl.'/../'.urlencode($user->username)));
		}
	}
	
	

}
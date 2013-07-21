<?php

/**
 * This is the model class for table "question".
 *
 * The followings are the available columns in table 'question':
 * @property integer $q_id
 * @property string $q_body
 * @property string $add_time
 * @property string $last_update
 * @property integer $user_id
 */
class Question extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Question the static model class
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
		return 'question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('q_body,q_desc', 'required'),
			// array('user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('q_id,q_body,q_desc, add_time, last_update, user_id', 'safe', 'on'=>'search'),
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
			'q_id' => 'Q',
			'q_body' => 'Question',
			'q_desc' => 'Description',
			'add_time' => 'Add Time',
			'last_update' => 'Last Update',
			'user_id' => 'User',
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

		$criteria->compare('q_id',$this->q_id);
		$criteria->compare('q_body',$this->q_body,true);
		$criteria->compare('q_desc',$this->q_desc,true);
		$criteria->compare('add_time',$this->add_time,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	private function keyword($word)
	{
		$what = trim($word);
		return explode(" ", $what);
	}
	
	public function searchQuestion($what)
	{
		$result = Question::model()->findAll("q_body LIKE '".$what."'");
		if(sizeof($result) == 1)
			return $result;
		else{
			$keyword = self::keyword($what);
			$sum = 1;
			$size = sizeof($keyword);
			for($i = 0; $i < $size; $i++)
	        	{
	        		$sum = $sum + $i + 1; 
	        		if(strlen($keyword[$i]) == 1)
	        			unset($keyword[$i]);
	        				
	       			if($i == 0)
	        			{
	        				$cond = "CASE WHEN  q_body LIKE '%".$keyword[$i]."%' THEN ".($size-$i)." ELSE 0 END";
	        			}
	       			else
	        			{ 
	        				$cond .= " + CASE WHEN q_body LIKE '%".$keyword[$i]."%' THEN ".($size-$i)." ELSE 0 END";
	        			}
	        	}
	        $sql = "SELECT *
	    					FROM (
								SELECT * ,(
	                                      ".$cond." 
	 									   ) AS numMatches
										    FROM question
										    ) AS t
								 WHERE numMatches >= 1
					ORDER BY numMatches DESC";
	        $question = Question::model()->findAllBySql($sql);
	        return $question;
		}
	}


	public function getBodyById($id){
			$ques = $this->findByPk($id);
			return $ques->q_body;
		
	}
}
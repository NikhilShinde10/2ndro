<?php 

/**
 * This is the model class for table "user_menu_access_master".
 *
 * The followings are the available columns in table 'user_menu_access_master':
 * @property integer $id
 * @property integer $user
 * @property integer $menu
 * @property integer $access
 */
class UserMenuAccessMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserMenuAccessMaster the static model class
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
		return 'user_menu_access_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user, menu,create_action,update_action,delete_action,view_action', 'required'),
			array('user, menu, access', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user, menu, access', 'safe', 'on'=>'search'),
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
			'user' => 'User',
			'menu' => 'Menu',
			'access' => 'Access',
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
		$criteria->compare('user',$this->user);
		$criteria->compare('menu',$this->menu);
		$criteria->compare('access',$this->access);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
public function getAllowAccess()
        {
		//$um_id=Yii::app()->user->getId();
		//$query="select u.username from user_master u,user_menu_access_master a where a.menu=16 AND a.user=u.um_id AND a.access=1 AND a.user=u.um_id union select username from user_master where um_id NOT IN(select user from user_menu_access_master)";
		$query="select u.username from myt_user u,user_menu_access_master a where a.menu=7 AND a.user=u.id AND a.access=1";
		$command=Yii::app()->db->createCommand($query);
		$access=$command->queryAll();
		$allow=array("none");
		$count=count($access);
		for($counter=0;$counter<$count;$counter++)
		{
			$allow[$counter]=$access[$counter]['username'];
		}
		return $allow;
        }

        public function getDenyAccess()
        {
		//$um_id=Yii::app()->user->getId();
		$query="select u.username from myt_user u,user_menu_access_master a where a.menu=7 AND a.access=0 AND a.user=u.id"; 
		$command=Yii::app()->db->createCommand($query);
		$access=$command->queryAll();
		$deny=array("none");
		$count=count($access);
		for($counter=0;$counter<$count;$counter++)
		{
			$deny[$counter]=$access[$counter]['username'];
		}
		return $deny;
        }
}

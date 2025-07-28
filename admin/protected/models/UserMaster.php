<?php

/**
 *
 * @property integer $admin_id
 * @property string $admin_name
 * @property string $admin_password
 * @property string $admin_email
 * @property integer $admin_status
 */
class UserMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admin_name, role_id, admin_password, admin_email, admin_status', 'required'),
			array('admin_status', 'numerical', 'integerOnly'=>true),
			array('admin_name, admin_password, admin_email', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('admin_id, role_id,admin_name, admin_password, admin_email, admin_status', 'safe', 'on'=>'search'),
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
			'admin_id' => 'Id',
			'admin_name' => 'Name',
			'admin_password' => 'Password',
			'admin_email' => 'Email',
			'admin_status' => 'Status',
			'role_id'=>'Role',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('admin_name',$this->admin_name,true);
		$criteria->compare('admin_password',$this->admin_password,true);
		$criteria->compare('admin_email',$this->admin_email,true);
		$criteria->compare('admin_status',$this->admin_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php 

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id
 * @property string $address
 * @property double $map_iframe
 * @property string $email
 * @property integer $phone
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address,phone, email', 'required'),
			//array('phone', 'numerical', 'integerOnly'=>true),
			array('address', 'length', 'max'=>300),
			array('map_iframe', 'length', 'max'=>500),
			array('email, facebook, linkedin, twitter', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, address, map_iframe, email, phone, facebook, linkedin, twitter', 'safe', 'on'=>'search'),
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
			'address' => 'Address',
			'map_iframe' => 'Map',
			'email' => 'Email',
			'phone' => 'Phone',
			'facebook' => 'Facebook',
			'linkedin' => 'Linkedin',
			'twitter' => 'Twitter',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('map_iframe',$this->map_iframe,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('linkedin',$this->linkedin,true);
		$criteria->compare('twitter',$this->twitter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

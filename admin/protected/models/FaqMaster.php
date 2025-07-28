<?php

/**
 * This is the model class for table "faq_master".
 *
 * The followings are the available columns in table 'faq_master':
 * @property integer $id
 * @property integer $active
 * @property string $created_at
 */
class FaqMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'faq_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, details, active,type', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			array('created_at,sequence,details,type','safe'),
		
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, details, active, created_at,type', 'safe', 'on'=>'search'),
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
			'title' => 'Heading',
			'details' => 'Description',
			'active' => 'Active',
			'created_at' => 'Created At',
			'type'=>'Type'
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

		$criteria=new CDbCriteria();

//echo Yii::app()->session['college'];die;//echo $college;die;
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->addSearchCondition('active',1);
		$criteria->addSearchCondition('type',$this->type,true);
		//$criteria->compare('college_id',$this->created_at,true);
		//$criteria->addIncondition('college_id',Yii::app()->session['college']);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				    'defaultOrder'=>'t.id DESC',
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FaqMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}

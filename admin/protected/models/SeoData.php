<?php

/**
 * This is the model class for table "seo_data".
 *
 * The followings are the available columns in table 'seo_data':
 * @property integer $id
 * @property integer $menu
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property string $alias
 */
class SeoData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seo_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu, meta_title, meta_keyword, meta_description', 'required'),
			array('menu', 'numerical', 'integerOnly'=>true),
			array('meta_title, alias', 'length', 'max'=>200),
			array('meta_keyword, meta_description', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, menu, meta_title, meta_keyword, meta_description, alias', 'safe', 'on'=>'search'),
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
			'menu' => 'Menu',
			'meta_title' => 'Meta Title',
			'meta_keyword' => 'Meta Keyword',
			'meta_description' => 'Meta Description',
			'alias' => 'Alias',
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
		$criteria->compare('menu',$this->menu);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('alias',$this->alias,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SeoData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

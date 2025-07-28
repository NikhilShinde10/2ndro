<?php 

/**
 * This is the model class for table "AboutUs".
 *
 * The followings are the available columns in table 'AboutUs':
 * @property integer $id
 * @property string $title
 * @property integer $description
 * @property string $created_at
 * @property integer $active
 */
class AboutUs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aboutus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, sub_title,block1,block2,created_at, banner,image,paragraph', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title,  sub_title,block1,block2, created_at, active,paragraph', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'sub_title' => 'Sub Title',
			'created_at' => 'Created At',
			'active' => 'Active',
			'block1'=>'Block1',
		    'block2'=>'Block2',
			'banner'=>'Banner',
			'image'=>'Image',
			'paragraph'=>'Paragraph'
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('sub_title',$this->sub_title,true);
		$criteria->compare('block1',$this->block1);
		$criteria->compare('block2',$this->block2);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('paragraph',$this->paragraph);
		$criteria->order = 'id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AboutUs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function dimensionValidation($attribute,$param){

	    if(is_object($this->logo)){

	        list($width, $height) = getimagesize($this->logo->tempname);

	        if($height<=300)

	            $this->addError('image','Image height should be 300px');

	    }  
	}
}

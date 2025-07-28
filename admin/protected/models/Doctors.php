<?php 

/**
 * This is the model class for table "doctors".
 *
 * The followings are the available columns in table 'doctors':
 * @property integer $id
 * @property string $name
 * @property string $designation
 * @property string $image
 * @property string $details
 * @property integer $active
 * @property string $created_date
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property integer $sort
 */
class Doctors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'doctors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image,details, active,specialisation,interest,education', 'required'),
			array('active, sort', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>100),
			// array('image', 'file',

	        // 'types'=>'jpg, gif, png, jpeg',

	        // 'maxSize'=>1024 * 1024 * 10, // 50 MB

	        // 'minSize'=>10 * 10 * 20, // 20 MB

	        // 'allowEmpty'=>true),
		
	  /*  array('image','dimensionValidation'),*/
			array('created_date, sort,image','safe'),
			// The following rule is used by search().
			// @todo Please remove those attr ibutes that should not be searched.
			array('id, name, designation, image, details, active, created_date, sort,specialisation,interest,education', 'safe', 'on'=>'search'),
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
			//'Specialization'=>array('Specialization', 'Services', 'id')

			'Specialization'=>array(self::BELONGS_TO, 'Services', 'specialisation'),


		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'image' => 'Image',
			'active' => 'Active',
			'created_date' => 'Created Date',
			'specialisation'=>'Specialisation',
			'details'=>'Expertise',
			'interest'=>'Special Interest',
			'education'=>'Education',
			'sort' => 'Sort'
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('specialisation',$this->specialisation,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('sort',$this->sort);
		$criteria->order = 'id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Doctors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function dimensionValidation($attribute,$param){

	    if(is_object($this->image)){

	        list($width, $height) = getimagesize($this->image->tempname);

	        if($width!=300 || $height!=300)

	            $this->addError('image','Photo size should be 300*300 dimension');

	    }  

	}
}

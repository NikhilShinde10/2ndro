<?php 

/**
 * This is the model class for table "home_setting".
 *
 * The followings are the available columns in table 'home_setting':
 * @property integer $id
 * @property string $home_slider_image
 * @property string $home_slider_h1
 * @property string $home_slider_h2
 * @property string $about_us
 * @property string $focus_area
 * @property string $about_area_image
 * @property string $service_area
 * @property string $service_image
 * @property string $copyright
 * @property string $logo
 * @property string $about_title
 * @property string $focus_title
 * @property string $service_title
 * @property string $emergancy_block
 */
class HomeSetting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'home_setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('home_slider_image,home_slider_image1,home_slider_subtitle1,home_slider_subtitle2, home_slider_h1, home_slider_h2, about_us, focus_area, about_area_image, service_area, service_image, copyright, emergancy_block, logo, about_title,focus_title,service_title,tagline', 'required'),
			array('home_slider_image, home_slider_h1, home_slider_h2, about_area_image, service_image, about_title,focus_title,service_title', 'length', 'max'=>100),
			array('focus_area, service_area', 'length', 'max'=>1000),
			array('copyright', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, home_slider_image,home_slider_image1,home_slider_subtitle1,home_slider_subtitle2, home_slider_h1, home_slider_h2, about_us, focus_area, about_area_image, service_area, service_image, copyright,about_title,focus_title,service_title,logo,emergancy_block,tagline', 'safe', 'on'=>'search'),
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
			'home_slider_image' => 'Slider Image 1',
			'home_slider_image1' => 'Slider Image 2',
			'home_slider_subtitle1' => 'Slider SubHeading 1',
			'home_slider_subtitle2' => 'Slider SubHeading 2',
			'home_slider_h1' => 'Slider Heading 1',
			'home_slider_h2' => 'Slider Heading 2',
			'about_title' => 'About Block Title',
			'about_us' => 'About Us',
			'about_area_image' => 'About Block Image',
			'focus_title' => 'Patient Block Title',
			'focus_area' => 'Patient Block Details',
			'service_title' => 'Service Title',			
			'service_area' => 'Our Service',
			'service_image' => 'Service Image',
			'copyright' => 'Copyright Text',
			'emergancy_block' => 'Emergancy Block',
			'logo'=>'Logo',
			'tagline'=>'Tagline'
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
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('home_slider_image',$this->home_slider_image,true);
		$criteria->compare('home_slider_h1',$this->home_slider_h1,true);
		$criteria->compare('home_slider_h2',$this->home_slider_h2,true);
		$criteria->compare('about_us',$this->about_us,true);
		$criteria->compare('focus_area',$this->focus_area,true);
		$criteria->compare('about_area_image',$this->about_area_image,true);
		$criteria->compare('service_area',$this->service_area,true);
		$criteria->compare('service_image',$this->service_image,true);
		$criteria->compare('copyright',$this->copyright,true);
		$criteria->compare('about_title',$this->about_title,true);
		$criteria->compare('service_title',$this->service_title,true);
		$criteria->compare('focus_title',$this->focus_title,true);
		$criteria->compare('emergancy_block',$this->emergancy_block,true);
		$criteria->compare('tagline',$this->tagline,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HomeSetting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

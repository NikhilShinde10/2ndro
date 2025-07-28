<?php 

/**
 * This is the model class for table "menu_master".
 *
 * The followings are the available columns in table 'menu_master':
 * @property integer $menu_id
 * @property string $menu_desc
 * @property string $menu_url
 * @property integer $parent_id
 * @property integer $active
 */
class MenuMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuMaster the static model class
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
		return 'menu_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_desc, menu_url, parent_id,sequence_no, active,icon', 'required'),
			array('parent_id, active', 'numerical', 'integerOnly'=>true),
			array('menu_desc, menu_url, controller, action', 'length', 'max'=>500),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('menu_id, menu_desc, menu_url, parent_id, active', 'safe', 'on'=>'search'),
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
			'ParentMenu' => array(self::BELONGS_TO, 'MenuMaster', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'menu_id' => 'Menu',
			'menu_desc' => 'Menu Description',
			'menu_url' => 'Menu URL',
			'parent_id' => 'Parent',
			'sequence_no'=>'Submenu Sequence',
			'active' => 'Active',
			'action'=>'Action',
			'controller'=>'Controller',
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

		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('menu_desc',$this->menu_desc,true);
		$criteria->compare('menu_url',$this->menu_url,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('active',$this->active);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>false,
		));
	}
	public function GenrateTopMenu()
	{
		$topMenu="";
		$ParentMenuMaster=MenuMaster::model()->findAll(array("condition"=>"parent_id=0 AND active=1","order"=>"sequence_no"));
		
		foreach($ParentMenuMaster as $parentModel)
		{
			//print_r($parentModel->menu_id);
			$topMenu.=$this->CreateTopMenuChild($parentModel->menu_id, $parentModel->menu_desc, $parentModel->menu_url,$parentModel);
		}
		return $topMenu;

	}
	public function CreateTopMenuChild($menuId, $menuName, $menuUrl,$parentModel)
	{
		$topMenu="";
		$ChildModelMaster=MenuMaster::model()->findAll(array("condition"=>"parent_id=".$menuId." AND active=1","order"=>"sequence_no"));
		if (count($ChildModelMaster) == 0)
		{
			/* Top Menu  Child With No Parent */
			$topMenu.= "<li ><a id='menu_id_".$menuId."' href='index.php?r=".$menuUrl."'>".$menuName."</a></li>";
		}
		else
		{
			/* Top Menu Parent Having Childs */
			$topMenu.= "<li class='dropdown '><a id='menu_id_".$menuId."' href='index.php?r=".$menuUrl."' class='dropdown-toggle' data-toggle='dropdown'>".$menuName." <span class='caret'></span></a>";
			/* Top Menu Childs */
			$topMenu.= "<ul  class='dropdown-menu' role='menu'>";
				foreach ($ChildModelMaster as $ChildModel)
				{
					$topMenu.=$this->CreateTopMenuChild($ChildModel->menu_id, $ChildModel->menu_desc, $ChildModel->menu_url,$ChildModel);
				}
			$topMenu.= "</ul>";/* Top Menu Childs Close */
			$topMenu.= "</li>";/* Top Menu Parent Close */
		}
		return $topMenu;
	}
	public function GenrateLeftMenu()
	{
		$id = Yii::app()->user->getId();
		$userdata=UserMaster::model()->findByPk($id);
		
		$ParentMenuMaster=MenuMaster::model()->findAll(array("condition"=>"parent_id=0 AND active=1","order"=>"sequence_no"));
		
		$leftMenu="";


		foreach($ParentMenuMaster as $parentModel)
		{
			//print_r($parentModel->menu_id);
			$leftMenu.=$this->CreateLeftMenuChild($parentModel->menu_id, $parentModel->menu_desc, $parentModel->menu_url,$parentModel);
		}
		return $leftMenu;

	}

	public function CreateLeftMenuChild($menuId, $menuName, $menuUrl,$parentModel)
	{
		$leftMenu="";
		
		$ChildModelMaster=MenuMaster::model()->findAll(array("condition"=>"parent_id=".$menuId."  AND active=1 ","order"=>"sequence_no"));
		
		if (count($ChildModelMaster) == 0)
		{
			/* Top Menu  Child With No Parent */
			$leftMenu.= "<li > <a id='menu_id_".$menuId."' href='index.php?r=".$menuUrl."' title='".$menuName."'>
 <i class='fa ".$parentModel['icon']."'></i>
        <span class='nav-label'>".$menuName."</span>       
    </a></li>";		
		}
		else
		{

 
			 $leftMenu.= "<li class='treeview '><a id='menu_id_".$menuId."' href='".$menuUrl."' title='".$menuName."'><i class='fa ".$parentModel['icon']."'></i></i> <span class='nav-label'>".$menuName."</span><span class='fa arrow'></span></a>";
		        /* Left Menu Childs */
		        $leftMenu.= " <ul class='nav nav-second-level collapse'>";
				foreach ($ChildModelMaster as $ChildModel)
				{
					$leftMenu.=$this->CreateLeftMenuChild($ChildModel->menu_id, $ChildModel->menu_desc, $ChildModel->menu_url,$ChildModel);
				}
			$leftMenu.= "</ul>";/* Top Menu Childs Close */
			$leftMenu.= "</li>";/* Top Menu Parent Close */
		}
		return $leftMenu;
	}
	public function CreateMenulist($role_id,$access,$create,$update,$delete,$view,$menuId, $menuName, $menuUrl,$parentModel,$flag)
	{
		$leftMenu="";
		if($flag==1)
		{
		$ChildModelMaster=Yii::app()->db->createCommand("select m.menu_id,m.menu_desc,m.menu_url,u.access,u.create_action,u.update_action,u.delete_action,u.view_action,m.sequence_no from menu_master m, user_menu_access_master u where u.user=$role_id AND u.menu=m.menu_id and m.parent_id=$menuId and m.active=1 union 
select m.menu_id,m.menu_desc,m.menu_url,'0' as access,'0' as create_action,'0' as update_action,'0' as delete_action,'0' as view_action,sequence_no from menu_master m where m.menu_id NOT IN(select menu from user_menu_access_master where user=$role_id) and m.parent_id=$menuId and m.active=1 order by sequence_no asc")->queryAll();
		}
		else
		{
$ChildModelMaster=Yii::app()->db->createCommand("select menu_id,menu_desc,'0' as access,'0' as create_action,'0' as update_action,'0' as delete_action,'0' as view_action,menu_url,sequence_no from menu_master where parent_id=$menuId and active=1 order by sequence_no asc")->queryAll();
		}

		if (count($ChildModelMaster) == 0)
		{
			/* Top Menu  Child With No Parent */
			$UserMaster=UserMaster::model()->findByPk(Yii::app()->user->getId());
			
			$leftMenu.=  "<tr class='top-row'><td><i class='fa fa-arrow-right'></i>".$menuName."</td><td id='access1'>";
			if($access==1)
			$leftMenu.= "<input type='checkbox' name='".$menuId."-ck"."' id='".$menuId."-ck"."' value='yes' checked />";
			else
			$leftMenu.= "<input type='checkbox' name='".$menuId."-ck"."' id='".$menuId."-ck"."' value='yes' />";
					$leftMenu.= "</td></tr>";

		}
		else
		{

			$leftMenu.=  "<tr class='sub-row'><td><i class='fa fa-circle'></i>".$menuName."</td><td id='access1'>";
			if($access==1)
			$leftMenu.= "<input type='checkbox' name='".$menuId."-ck"."' id='".$menuId."-ck"."' value='yes' checked />";
			else
			$leftMenu.= "<input type='checkbox' name='".$menuId."-ck"."' id='".$menuId."-ck"."' value='yes' />";
		$leftMenu.= "</td>></tr>";
		        /* Left Menu Childs */
				foreach ($ChildModelMaster as $ChildModel)
				{
					$leftMenu.=$this->CreateMenulist($role_id,$ChildModel['access'],$ChildModel['create_action'],$ChildModel['menu_id'], $ChildModel['menu_desc'], $ChildModel['menu_url'],$ChildModel,$flag);

				}			
		}
		return $leftMenu;

	}
}

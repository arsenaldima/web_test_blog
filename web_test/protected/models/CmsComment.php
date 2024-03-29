<?php

/**
 * This is the model class for table "cms_comment".
 *
 * The followings are the available columns in table 'cms_comment':
 * @property integer $id
 * @property string $content
 * @property integer $page_id
 * @property integer $created
 * @property integer $user_id
 * @property string $guest
 * @property string $status
 */
class CmsComment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cms_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('page_id, created, user_id', 'numerical', 'integerOnly'=>true),
			array('guest', 'length', 'max'=>255),

            array('guest','email','on'=>'ComSet'),
            array('guest, content','required','on'=>'ComSet'),

            array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, content, page_id, created, user_id, guest, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('user'=>array(self::BELONGS_TO,'CmsUser','user_id'),
           'page'=>array(self::BELONGS_TO,'CmsPage','id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
            'status'=>'Статус',
			'content' => 'Коментарий',
			'page_id' => 'Страница',
			'created' => 'Дата',
			'user_id' => 'Пользователь',
			'guest' => 'Гость',
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
		$criteria->compare('content',$this->content,true);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('created',$this->created);
		$criteria->compare('user_id',$this->user_id);
        $criteria->compare('status',$this->status,true);
		$criteria->compare('guest',$this->guest,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CmsComment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave(){

        if($this->isNewRecord)
        {$this->created=time();


        }
        return parent::beforeSave();
    }

    public static function vivod($id)
    {
        $criteria= new CDbCriteria;
        $criteria->compare('page_id',$id);

        return new CActiveDataProvider('CmsComment',array('criteria'=>$criteria));
    }
}

<?php

/**
 * This is the model class for table "cover_image".
 *
 * The followings are the available columns in table 'cover_image':
 * @property integer $id
 * @property integer $table_id
 * @property string $table_name
 * @property string $image
 * @property string $alt
 * @property string $path
 * @property string $style
 * @property integer $status
 */
class CoverImage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cover_image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('table_id, table_name, image, alt, path, style, status', 'required'),
			array('table_id, status', 'numerical', 'integerOnly'=>true),
			array('table_name', 'length', 'max'=>11),
			array('image, alt, path, style', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, table_id, table_name, image, alt, path, style, status', 'safe', 'on'=>'search'),
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
			'table_id' => 'Table',
			'table_name' => 'Table Name',
			'image' => 'Image',
			'alt' => 'Alt',
			'path' => 'Path',
			'style' => 'Style',
			'status' => 'Status',
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
		$criteria->compare('table_id',$this->table_id);
		$criteria->compare('table_name',$this->table_name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CoverImage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

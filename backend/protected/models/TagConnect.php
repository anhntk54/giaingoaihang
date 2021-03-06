<?php

/**
 * This is the model class for table "tag_connect".
 *
 * The followings are the available columns in table 'tag_connect':
 * @property integer $id
 * @property integer $tag_id
 * @property integer $table_id
 * @property string $table_name
 */
class TagConnect extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tag_connect';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tag_id, table_id, table_name', 'required'),
			array('tag_id, table_id', 'numerical', 'integerOnly'=>true),
			array('table_name', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tag_id, table_id, table_name', 'safe', 'on'=>'search'),
		);
	}
	public function getTags($id,$table)
	{
		$str = '';
		$i = 0;
		$values = TagConnect::model()->findAll("table_id = $id and table_name = '".$table."'");
		foreach ($values as $value) {
			if ($i == count($values) -1) {
				$str = $str.$value->tag->name;
			}else{
				$str = $str.$value->tag->name.',';
			}
			$i ++;
		}
		return $str;
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tag'=> array(self::BELONGS_TO,'Tags','tag_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tag_id' => 'Tag',
			'table_id' => 'Table',
			'table_name' => 'Table Name',
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
		$criteria->compare('tag_id',$this->tag_id);
		$criteria->compare('table_id',$this->table_id);
		$criteria->compare('table_name',$this->table_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TagConnect the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

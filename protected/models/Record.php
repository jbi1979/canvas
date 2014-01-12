<?php

/**
 * This is the model class for table "canvas_record".
 *
 * The followings are the available columns in table 'canvas_record':
 * @property string $id
 * @property string $image_id
 * @property string $name
 * @property string $record_info
 * @property string $created_at
 */
class Record extends CanvasActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'canvas_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image_id, record_info, created_at', 'required'),
			array('image_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>100),
			array('result_path' , 'length', 'max' => 100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image_id, name, record_info, created_at', 'safe', 'on'=>'search'),
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
			'image_id' => 'Image',
			'name' => 'Name',
			'record_info' => 'Record Info',
			'result_path' => 'Result Path',
			'created_at' => 'Created At',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('image_id',$this->image_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('record_info',$this->record_info,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Record the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

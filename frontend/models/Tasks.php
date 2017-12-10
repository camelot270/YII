<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Tasks".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_project
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id_project'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_project' => 'Id Project',
        ];
    }

    public function getProject()
    {
        return $this->hasOne(Projects::className(), [ 'id' => 'id_project']);
    }
}

<?php

namespace frontend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $name
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'name'], 'required'],
            [['id_user'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'name' => 'Name',
        ];
    }

    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['project_id' => 'id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), [ 'id' => 'id_user']);
    }
}

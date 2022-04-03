<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property int|null $state_id
 * @property int|null $created_on
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','image'], 'required'],
            [['state_id', 'created_on'], 'integer'],
            [['title'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'state_id' => 'State ID',
            'created_on' => 'Created On',
        ];
    }

    public function getImageUrl(){
        return \Yii::$app->urlManager->createUrl($this->image);    
    }
}

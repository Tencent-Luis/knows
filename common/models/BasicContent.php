<?php
namespace common\models;
/**
 * This is the model class for table "basic_content".
 * 内容管理表模型类
 * @property integer $id
 * @property integer $site_id
 * @property string $title
 * @property string $sub_title
 * @property string $content
 * @property integer $create_time
 * @property integer $creater_id
 * @property integer $update_time
 * @property integer $is_del
 */
class BasicContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_id', 'create_time', 'creater_id', 'update_time', 'is_del'], 'integer'],
            [['content'], 'required'],
            [['content'], 'string'],
            [['title', 'sub_title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_id' => 'Site ID',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'content' => 'Content',
            'create_time' => 'Create Time',
            'creater_id' => 'Creater ID',
            'update_time' => 'Update Time',
            'is_del' => 'Is Del',
        ];
    }
}

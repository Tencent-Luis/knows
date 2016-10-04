<?php
namespace common\models;
/**
 * This is the model class for table "basic_resource".
 * 资源组管理表模型类
 * @property integer $id
 * @property integer $site_id
 * @property string $resource_name
 * @property integer $resource_type
 * @property integer $update_time
 * @property integer $create_time
 * @property integer $is_del
 */
class BasicResource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_resource';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'site_id', 'resource_type', 'update_time', 'create_time', 'is_del'], 'integer'],
            [['resource_name'], 'string', 'max' => 100],
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
            'resource_name' => 'Resource Name',
            'resource_type' => 'Resource Type',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
            'is_del' => 'Is Del',
        ];
    }
}

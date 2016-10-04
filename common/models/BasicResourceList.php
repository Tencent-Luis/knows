<?php
namespace common\models;
/**
 * This is the model class for table "basic_resource_list".
 * 资源详情管理表模型类
 * @property integer $id
 * @property integer $resource_id
 * @property string $resource_address
 * @property string $description
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $is_del
 */
class BasicResourceList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_resource_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_id', 'create_time', 'update_time', 'is_del'], 'integer'],
            [['resource_address', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resource_id' => 'Resource ID',
            'resource_address' => 'Resource Address',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'is_del' => 'Is Del',
        ];
    }
}

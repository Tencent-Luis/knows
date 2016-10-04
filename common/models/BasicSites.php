<?php
namespace common\models;
/**
 * This is the model class for table "basic_sites".
 * 站点表模型类
 * @property integer $id
 * @property string $site_name
 * @property string $address
 * @property integer $status
 * @property integer $online_time
 * @property integer $create_time
 * @property integer $update_time
 */
class BasicSites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_sites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'online_time', 'create_time', 'update_time'], 'integer'],
            [['site_name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'address' => 'Address',
            'status' => 'Status',
            'online_time' => 'Online Time',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}

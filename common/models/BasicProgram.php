<?php
namespace common\models;
/**
 * This is the model class for table "basic_program".
 * 栏目管理表模型类
 * @property integer $id
 * @property string $program_name
 * @property integer $program_sort
 * @property integer $site_id
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $is_del
 */
class BasicProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['program_sort', 'site_id', 'create_time', 'update_time', 'is_del'], 'integer'],
            [['program_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'program_name' => 'Program Name',
            'program_sort' => 'Program Sort',
            'site_id' => 'Site ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'is_del' => 'Is Del',
        ];
    }
}

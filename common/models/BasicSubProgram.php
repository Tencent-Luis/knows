<?php
namespace common\models;
/**
 * This is the model class for table "basic_sub_program".
 * 子栏目管理表模型类
 * @property integer $id
 * @property integer $site_id
 * @property integer $program_id
 * @property string $sub_program_name
 * @property integer $sub_program_sort
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $is_del
 */
class BasicSubProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_sub_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_id', 'program_id', 'sub_program_sort', 'create_time', 'update_time', 'is_del'], 'integer'],
            [['sub_program_name'], 'string', 'max' => 100],
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
            'program_id' => 'Program ID',
            'sub_program_name' => 'Sub Program Name',
            'sub_program_sort' => 'Sub Program Sort',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'is_del' => 'Is Del',
        ];
    }
}

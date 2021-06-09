<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "units_coverage".
 *
 * @property int $id
 * @property int $statements
 * @property int $branches
 * @property int $functions
 * @property int $lines
 * @property string $branch
 * @property int $created_at
 * @property string $username
 *
 */
class M210607195007UnitsCoverage extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'units_coverage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statements', 'branches', 'functions', 'lines', 'branch', 'created_at'], 'required'],
            [['created_at'], 'integer'],
            [['statements', 'branches', 'functions', 'lines'], 'double'],
            [['branch','username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'statements' => 'Statements',
            'branches' => 'Branches',
            'functions' => 'Functions',
            'lines' => 'Lines',
            'branch' => 'Branch',
            'created_at' => 'Created At',
        ];
    }
}

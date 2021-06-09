<?php
namespace console\controllers;

use common\models\M210607195007UnitsCoverage;
use Yii;
use yii\console\Controller;

class UnitsController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionParseFile($file, $branch, $username,$build_id)
    {

        $content = file_get_contents($file);
//        $branch = 'dev';
//        $content = '=============================== Coverage summary ===============================
//[19:32:12]	[Step 1/1]     Statements   : 0.06% ( 17/27628 )
//[19:32:12]	[Step 1/1]     Branches     : 0.01% ( 1/13666 )
//[19:32:12]	[Step 1/1]     Functions    : 0.02% ( 1/6181 )
//[19:32:12]	[Step 1/1]     Lines        : 0.06% ( 17/27028 )
//[19:32:12]	[Step 1/1]     ================================================================================';

        $unit = new M210607195007UnitsCoverage();

        preg_match('/Statements\s+:\s(\d.\d\d)/', $content, $matches, PREG_OFFSET_CAPTURE);
        $unit->statements = (float)$matches[1][0];

        preg_match('/Branches\s+:\s(\d.\d\d)/', $content, $matches, PREG_OFFSET_CAPTURE);
        $unit->branches = (float)$matches[1][0];

        preg_match('/Functions\s+:\s(\d.\d\d)/', $content, $matches, PREG_OFFSET_CAPTURE);
        $unit->functions = (float)$matches[1][0];

        preg_match('/Lines\s+:\s(\d.\d\d)/', $content, $matches, PREG_OFFSET_CAPTURE);
        $unit->lines = (float)$matches[1][0];

        $unit->branch = $branch;
        $unit->created_at = (new \DateTime())->getTimestamp();
        $unit->username = $username;
        $unit->build_id = $build_id;

        var_dump($unit->attributes);
        var_dump($unit->save());
        var_dump($unit->errors);

    }
    public function actionDump()
    {
        var_dump(M210607195007UnitsCoverage::find()->asArray()->all());
    }

}

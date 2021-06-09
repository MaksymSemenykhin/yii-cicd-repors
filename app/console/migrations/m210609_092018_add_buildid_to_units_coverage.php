<?php

use yii\db\Migration;

/**
 * Class m210609_092018_add_buildid_to_units_coverage
 */
class m210609_092018_add_buildid_to_units_coverage extends Migration
{
    public function up()
    {
        $this->addColumn('{{%units_coverage}}', 'build_id', $this->smallInteger()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%units_coverage}}', 'build_id');
    }
}

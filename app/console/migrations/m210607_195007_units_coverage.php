<?php

use yii\db\Migration;

/**
 * Class m210607_195007_units_coverage
 */
class m210607_195007_units_coverage extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%units_coverage}}', [
            'id' => $this->primaryKey(),

            'statements' => $this->float(3,6)->notNull(),
            'branches'   => $this->float(3,6)->notNull(),
            'functions'  => $this->float(3,6)->notNull(),
            'lines'      => $this->float(3,6)->notNull(),

            'branch'      => $this->string()->notNull(),

            'created_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%units_coverage}}');
    }
}

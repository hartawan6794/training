<?php

use yii\db\Migration;

/**
 * Class m220210_025338_gaji
 */
class m220210_025338_gaji extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gaji',[
            'id' => $this->primaryKey(),
            'id_pegawai' => $this->integer(),
            'gaji_pokok' => $this->float(),
            'tunjangan_istri' => $this->float(),
            'tunjangan_anak' => $this->float(),
            'tunjangan_makan' => $this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gaji');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220210_025338_gaji cannot be reverted.\n";

        return false;
    }
    */
}

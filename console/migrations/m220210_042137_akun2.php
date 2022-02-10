<?php

use yii\db\Migration;

/**
 * Class m220210_042137_akun2
 */
class m220210_042137_akun2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('akun2',[
            'kd_akun2' => $this->tinyInteger()->notNull(),
            'kd_akun1' => $this->tinyInteger()->notNull(),
            'akun2' => $this->string(100)->notNull(),
        ]);

        $this->addPrimaryKey('akun2_pk','akun2',[
            'kd_akun2','kd_akun1'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('akun2');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220210_042137_akun2 cannot be reverted.\n";

        return false;
    }
    */
}

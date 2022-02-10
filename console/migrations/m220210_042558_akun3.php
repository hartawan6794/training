<?php

use yii\db\Migration;

/**
 * Class m220210_042558_akun3
 */
class m220210_042558_akun3 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('akun3',[
            'kd_akun1' => $this->tinyInteger()->notNull(),
            'kd_akun2' => $this->tinyInteger()->notNull(),
            'kd_akun3' => $this->tinyInteger()->notNull(),
            'akun3' => $this->string(100)->notNull(),
        ]);

        $this->addPrimaryKey('akun3_pk','akun3',[
            'kd_akun1','kd_akun2','kd_akun3'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('akun3');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220210_042558_akun3 cannot be reverted.\n";

        return false;
    }
    */
}

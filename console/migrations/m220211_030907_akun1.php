<?php

use yii\db\Migration;

/**
 * Class m220211_030907_akun1
 */
class m220211_030907_akun1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('akun1',[
            'kd_akun1' => $this->tinyInteger()->notNull(),
            'akun1' => $this->string(100)->notNull(),
        ]);

        $this->addPrimaryKey('akun1_pk','akun1',[
            'kd_akun1'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('akun1');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220211_030907_akun1 cannot be reverted.\n";

        return false;
    }
    */
}

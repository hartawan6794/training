<?php

use yii\db\Migration;

/**
 * Class m220210_020625_pegawai
 */
class m220210_020625_pegawai extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pegawai',[
            'id' => $this->primaryKey(),
            'nip' => $this->string(50)->notNull(),
            'nama' => $this->string(150)->notNull(),
            'jekel' => $this->string(30)->notNull(),
            'tempat_lahir' => $this->string(150)->notNull(),
            'tanggal_lahir' => $this->date(),
            'telpon' => $this->string(20)->notNull(),
            'agama' => $this->string(30)->notNull(),
            'alamat' => $this->string(200)->notNull(),
            'golongan' => $this->string(100)->notNull()
        ]);

        // $this->batchInsert('pegawai',[
        //     'id','nip','nama','jekel','tempat_lahir','tanggal_lahir','telpon','agama','alamat','golongan'
        // ],[
        //     '1','123','training','laki-laki','bandar lampung','1995-09-12','0812xxx','Islam','Jl. Kayu Manis','non-asn'
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pegawai');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220210_020625_pegawai cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m230523_081439_create_obat_055
 */
class m230523_081439_create_obat_055 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('obat_055', [
            'id' => $this->primaryKey(),
            'kode_obat' =>$this->string()->notNull(),
            'harga' =>$this->decimal(10,0)->notNull(),
            'stok_obat' =>$this->integer()->notNull()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230523_081439_obat_055 cannot be reverted.\n";


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230523_081439_create_obat_055 cannot be reverted.\n";

        return false;
    }
    */
}

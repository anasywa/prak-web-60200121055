<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa055}}`.
 */
class m230530_003938_create_mahasiswa055_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa055}}', [
            'id055' => $this->primaryKey(),
            'nim055' =>$this->string()->notNull(),
            'nama055' =>$this->string()->notNull(),
            'kelas055' =>$this->string()->notNull(),
            'status055' =>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa055}}');
    }
}

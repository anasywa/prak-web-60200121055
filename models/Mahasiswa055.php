<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa055".
 *
 * @property int $id055
 * @property string $nim055
 * @property string $nama055
 * @property string $kelas055
 * @property string $status055
 *
 * @property Profil055[] $profil055s
 */
class Mahasiswa055 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa055';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim055', 'nama055', 'kelas055', 'status055'], 'required'],
            [['nim055', 'nama055', 'kelas055', 'status055'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id055' => 'ID',
            'nim055' => 'No Induk Mahasiswa',
            'nama055' => 'Nama Mahasiswa',
            'kelas055' => 'Kelas',
            'status055' => 'Status',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_055".
 *
 * @property int $Id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 *
 * @property Profil055[] $profil055
 */
class Mahasiswa055 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_055';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Nim', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['Id'], 'integer'],
            [['Nim'], 'string', 'max' => 13],
            [['Nama', 'Jurusan'], 'string', 'max' => 100],
            [['Kelas'], 'string', 'max' => 10],
            [['Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nim' => 'No.Induk Mahasiswa',
            'Nama' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil055]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil055()
    {
        return $this->hasOne(Profil055::class, ['Id_mahasiswa' => 'Id']);
    }
}

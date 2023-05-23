<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MataKuliah".
 *
 * @property int $id
 * @property string $kode_mk
 * @property string $nama_mk
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'MataKuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nama_mk'], 'required'],
            [['kode_mk'], 'string', 'max' => 20],
            [['nama_mk'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'Kode MataKuliah',
            'nama_mk' => 'Nama MataKuliah',
        ];
    }
}

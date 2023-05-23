<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_055".
 *
 * @property int $id
 * @property string $kode_obat
 * @property float $harga
 * @property int $stok_obat
 */
class Obat055 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_055';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_obat', 'harga', 'stok_obat'], 'required'],
            [['id', 'stok_obat'], 'integer'],
            [['harga'], 'number'],
            [['kode_obat'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
     /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat055()
    {
        return $this->hasMany(Obat055::className(), ['id']);
    }
}
   
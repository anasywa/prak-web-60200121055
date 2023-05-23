<<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'kode_mk',
            'nama_mk',
        ]
    ])

?>
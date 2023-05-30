<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id055',
            'nim055',
            'nama055',
            'kelas055',
            'status055',
        ],
    ]);
?>
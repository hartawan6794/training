<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pegawai',
            'nip',
            'nama',
            'jekel',
            'tempat_lahir',
            //'tanggal_lahir',
            //'telpon',
            //'agama',
            //'alamat',
            //'golongan',
            [
                'header' => 'Aksi',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, frontend\models\Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                 }
            ],
        ],
    ]); ?>

<!--     
    <?php
        echo "<table class='table-bordered table table-striped'";
        echo "<tr>";
        echo "<th style='width:5%;'>No</th>";
        echo "<th>NIP</th>";
        echo "<th>Nama</th>";
        echo "<th>Jenis Kelamin</th>";
        echo "<th>Tempat Tanggal Lahir</th>";
        echo "<th>Golongan</th>";
        echo "<th>Aksi</th>";
        echo "</tr>";
        $no = 1;
        foreach($pegawai as $pegawai){
        echo "<tr>";
        echo "<td>$pegawai->id_pegawai</td>";
        echo "<td>$pegawai->nip</td>";
        echo "<td>$pegawai->nama</td>";
        echo "<td>$pegawai->jekel</td>";
        echo "<td>$pegawai->tempat_lahir, $pegawai->tanggal_lahir</td>";
        echo "<td>$pegawai->golongan</td>";
        echo "<td>
        <a href='/training/frontend/web/index.php?r=pegawai%2Fview&id_pegawai=$pegawai->id_pegawai'><i class='fa fa-pencil'></i>Detail</a>
        <a href='/training/frontend/web/index.php?r=pegawai%2Fupdate&id_pegawai=$pegawai->id_pegawai'>Edit</a>
        <a href='/training/frontend/web/index.php?r=pegawai%2Fdelete&id_pegawai=$pegawai->id_pegawai'>Hapus</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>  -->

</div>

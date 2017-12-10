<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= Html::encode("{$task->name} ({$task->id_project})") ?>:
                <?= $task->id ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
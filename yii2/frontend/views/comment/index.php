<?php
/**
 * Team: NKU Data Titans
 * Coding by 武桐西 2112515
 * 留言页面
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '留言';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<h2 data-text="COMMENT" class="comment-title">COMMENT</h2>
</div>
<div class="container">
    <div class="comment-box">
    <div class="comment-header"><?= Html::encode($this->title) ?></div>
    <div id="comments">
        <?php foreach ($comments as $comment): ?>
                <hr class="comment-hr">
                <div class="comment-usr-info">
                    <span class="comment-usr-name"><?= Html::encode("{$comment->cuser}") ?></span>
                    <span class="comment-usr-date"><?= Html::encode("{$comment->cdate}") ?></span>
                </div>
                <p class="comment-content"><?= Html::encode("{$comment->ccomment}") ?></p>
        <?php endforeach; ?>
    </div>
    <div class="comment-form">
        <div class="comment-header">发表评论</div>
        <!-- form开始 -->
    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
                'template' => "{label}\n<div class=\"comment-inputdiv\">{input}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                'inputOptions' => ['class' => 'comment-input'],
    ]
    ]); ?>
        <?= $form->field($model, 'user')->label('昵称') ?>
        <?= $form->field($model, 'comment')->textarea()->label('内容') ?>
        <div class="form-group">
            <?= Html::submitButton('发表', ['class' => 'comment-btn']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
        <!-- form结束 -->
    </div>
</div>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null, null, window.location.href)
    }
</script>
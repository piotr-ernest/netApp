
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'postForm',
            'enableAjaxValidation' => false
        ));
        ?>

        <p class="note">
            Pola z gwiazdką są wymagane.
        </p>

        <?php if (true === $saved): ?>
            <div style="color: #6666ff"><p>Dane zostały zapisane.</p></div>
        <?php endif; ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <div class="form-group">
                <?php echo $form->labelEx($model, 'title'); ?>
                <?php echo $form->textField($model, 'title', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'title'); ?>
            </div>


        </div>

        <div class="row">
            <div class="form-group">
                <?php echo $form->labelEx($model, 'content'); ?>
                <?php echo $form->textArea($model, 'content', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'content'); ?>
            </div>

        </div>

        <div class="row">
            <div class="form-group">
                <?php echo $form->labelEx($model, 'author'); ?>
                <?php echo $form->textField($model, 'author', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'author'); ?>
            </div>
        </div>


        <div class="row buttons">
            <?php echo CHtml::submitButton('Zapisz'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div><hr>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <?php while ($r = each($results)): ?>
            <div style="box-shadow: 1px 1px 1px #9999ff;">
                <h3><?php echo $r['value']['title']; ?><span style="color: #999999; font-size: 12px;"><?php echo date('Y-m-d H:i', $r['value']['date_created']) ?></span></h3>
                <p><?php echo $r['value']['content']; ?></p>
            </div>
            <p><?php echo 'Autor: ' . $r['value']['author']; ?></p><hr>
        <?php endwhile; ?>
    </div>
</div>

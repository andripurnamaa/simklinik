<?php $this->pageTitle=Yii::app()->name . ' - Login'; ?>
<div class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card p-4">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'LoginForm',
                        'enableAjaxValidation'=>true,
                        )); 
                    ?>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h4 class="text-center">Login</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        
                            <label for="exampleInputEmail1">Email</label>
                            <?php echo $form->textField($model,'username', ['class' => 'form-control']); ?>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <?php echo $form->passwordField($model,'password', ['class' => 'form-control']); ?>
                        
                    </div>
                    <div class="form-check">
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                        <?php echo $form->label($model,'rememberMe'); ?>
                    </div>
                    <?php echo CHtml::submitButton('Login', ['class' => 'btn btn-primary btn-lg']); ?>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

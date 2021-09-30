<?php
/** @var $model \app\models\User */
$this->title = 'Add new user';
?>


<section class="vh-100" style="background-color: #fff;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 fs-2 fw-medium">Add new user</p>

                                <?php $form = \app\Core\Form\Form::begin('', 'post') ?>

                                <div class="d-flex flex-row align-items-center mb-4 fs-5 fw-medium">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0 ">
                                        <?php echo $form->field($model, 'username') ?>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4 fs-5 fw-medium">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <?php echo $form->field($model, 'email') ?>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4 fs-5 fw-medium">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <?php echo $form->field($model, 'password')->passwordField() ?>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4 fs-5 fw-medium">
                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button class="btn btn-danger btn-lg fs-4 fw-medium" type="submit">Add new user
                                    </button>
                                </div>

                                <?php \app\Core\Form\Form::end() ?>

                            </div>
                            <div class="col-md-9 col-lg-6 col-xl-5 align-items-center order-1 d-flex">
                                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw3.png"
                                     class="img-fluid"
                                     alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

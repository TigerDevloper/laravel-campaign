<html>
<head>
    <meta charset="UTF-8">

    <title>{{ __('Login') }}</title>
    <meta name="generator" content="CRUDBooster">
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="http://localhost:8000/vendor/crudbooster/assets/logo_crudbooster.png">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="<?php echo e(asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- support rtl-->
    
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo e(asset('vendor/crudbooster/assets/css/main.css')); ?>">
    <style type="text/css">
        .login-page, .register-page {
            background: #dddddd url('<?php echo e(asset('vendor/crudbooster/assets/bg_blur3.jpg')); ?>');
            color: #ffffff  !important;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box, .register-box {
            margin: 2% auto;
        }

        .login-box-body {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: #666666  !important;
        }

        html, body {
            overflow: hidden;
        }
    </style>
</head>

<body class="login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">
            <img title="CampaignPlanner" src="<?php echo e(asset('vendor/crudbooster/assets/logo_crudbooster.png')); ?>" style="max-width: 100%;max-height:170px">
        </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        <!-- <div class="alert alert-warning">
            Thank You, See You Later !
        </div> -->
        
        <p class="login-box-msg">Please login to start your session</p>
        <form method="POST" action="{{ route('login') }}">
            <?php echo csrf_field(); ?>

            <div class="form-group has-feedback">
                <input id="email" autocomplete="off" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus required="" placeholder="{{ __('E-Mail Address') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                <?php endif; ?>
            </div>


            <div class="form-group has-feedback">
                <input id="password" autocomplete="off" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required="" placeholder="<?php echo e(__('Password')); ?>">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div style="margin-bottom:10px" class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        <i class="fa fa-lock"></i> <?php echo e(__('Login')); ?>

                    </button>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-xs-12" align="center">
                    <p style="padding:10px 0px 10px 0px">
                    <?php echo e(__('Forgot Your Password?')); ?> <a href="<?php echo e(url('admin/forgot')); ?>">Click here</a>
                    </p>
                </div>
            </div> -->
        </form>


        <br>
        <!--a href="#">I forgot my password</a-->

    </div><!-- /.login-box-body -->

</div><!-- /.login-box -->


<!-- jQuery 2.1.3 -->
<script src="<?ph
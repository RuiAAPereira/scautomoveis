
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login</title>
    <!-- Icons-->
    <link href="core-ui/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="core-ui/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="core-ui/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="core-ui/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="core-ui/css/style.css" rel="stylesheet">
    <link href="core-ui/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
      <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Entrar na sua conta</p>
                <form class="" action="/users" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" id="password" value="">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Login</button>
                  </div>
                  <div class="col-6 text-right">
                  <?php if (isset($validation)): ?>
                    <div class="col-12">
                      <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                      </div>
                    </div>
                  <?php endif; ?>
                    <!-- <button type="button" class="btn btn-link px-0">Forgot password?</button> -->
                  </div>
                </div>
                </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Atenção!</h2>
                  <p>Apenas os administradores do site podem ter acesso a esta página.</p>
                  <a type="button" class="btn btn-primary active mt-3" href="/">Voltar para o site!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap and necessary plugins-->
    <script src="core-ui/vendors/jquery/js/jquery.min.js"></script>
    <script src="core-ui/vendors/popper.js/js/popper.min.js"></script>
    <script src="core-ui/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="core-ui/vendors/pace-progress/js/pace.min.js"></script>
    <script src="core-ui/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="core-ui/vendors/@coreui/coreui/js/coreui.min.js"></script>
  </body>
</html>
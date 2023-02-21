<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ورود </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <a class="hiddenanchor" id="reset"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @include("Admin.error")
                @include("Admin.user.login_eroor")
                <form method="post" action="">
                    {{ csrf_field()  }}
                    <h1> ورود</h1>
                    <div>
                        <input type="text" class="form-control" name="email" placeholder="نام کاربری" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="رمز ورود" required="" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" href="">ورود</button>

                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">


                        <div>
                            <h1><i class="fa fa-coffee"></i> Coflks </h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>

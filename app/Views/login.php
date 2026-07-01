<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | BURJO Century</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            margin:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#2563eb,#0f172a);
            overflow:hidden;
        }

        body::before{
            content:'';
            position:absolute;
            width:500px;
            height:500px;
            background:#60a5fa;
            border-radius:50%;
            top:-150px;
            left:-120px;
            opacity:.25;
        }

        body::after{
            content:'';
            position:absolute;
            width:400px;
            height:400px;
            background:#38bdf8;
            border-radius:50%;
            bottom:-120px;
            right:-120px;
            opacity:.25;
        }

        .login-card{

            position:relative;
            z-index:10;

            width:420px;

            background:rgba(255,255,255,.12);

            backdrop-filter:blur(20px);

            border:1px solid rgba(255,255,255,.15);

            border-radius:25px;

            padding:40px;

            box-shadow:0 25px 60px rgba(0,0,0,.25);

        }

        .logo{

            width:90px;
            height:90px;

            border-radius:50%;

            background:white;

            margin:auto;

            display:flex;

            align-items:center;

            justify-content:center;

            font-size:40px;

            color:#2563eb;

            margin-bottom:20px;

        }

        h2{

            color:white;

            font-weight:700;

            text-align:center;

        }

        p{

            color:#dbeafe;

            text-align:center;

            margin-bottom:30px;

        }

        .form-control{

            height:52px;

            border-radius:15px;

            border:none;

            padding-left:45px;

        }

        .input-group-text{

            border:none;

            background:white;

            border-radius:15px 0 0 15px;

        }

        .btn-login{

            height:52px;

            border-radius:15px;

            font-weight:600;

            font-size:16px;

            background:#2563eb;

            border:none;

            transition:.3s;

        }

        .btn-login:hover{

            background:#1d4ed8;

            transform:translateY(-2px);

        }

        .copyright{

            color:#dbeafe;

            text-align:center;

            margin-top:20px;

            font-size:13px;

        }

    </style>

</head>

<body>

<div class="login-card">

    <div class="logo">
        <i class="bi bi-shop"></i>
    </div>

    <h2>BURJO Century</h2>

    <p>Silakan login untuk masuk ke sistem</p>

    <?php if(session()->getFlashdata('error')) : ?>

        <div class="alert alert-danger">

            <?= session()->getFlashdata('error') ?>

        </div>

    <?php endif; ?>

    <form action="<?= base_url('login/auth') ?>" method="post">

        <?= csrf_field(); ?>

        <div class="mb-3">

            <div class="input-group">

                <span class="input-group-text">

                    <i class="bi bi-person"></i>

                </span>

                <input
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Username"
                    required>

            </div>

        </div>

        <div class="mb-4">

            <div class="input-group">

                <span class="input-group-text">

                    <i class="bi bi-lock"></i>

                </span>

                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Password"
                    required>

            </div>

        </div>

        <button class="btn btn-primary btn-login w-100">

            <i class="bi bi-box-arrow-in-right"></i>

            Login

        </button>

    </form>

    <div class="copyright">

        © <?= date('Y') ?> BURJO Century

    </div>

</div>

</body>

</html>
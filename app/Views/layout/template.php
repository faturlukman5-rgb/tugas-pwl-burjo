<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'BURJO Century' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            margin:0;
            background:#f4f7fc;
        }

        .wrapper{
            display:flex;
        }

        /* SIDEBAR */
        .sidebar{
            width:260px;
            min-height:100vh;
            background:linear-gradient(180deg,#0f172a,#1e293b);
            color:white;
            position:fixed;
            left:0;
            top:0;
            z-index:1000;
        }

        .logo{
            padding:25px;
            text-align:center;
            font-size:22px;
            font-weight:700;
            border-bottom:1px solid rgba(255,255,255,.1);
        }

        .sidebar-menu{
            padding:15px;
        }

        .sidebar-menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px 15px;
            margin-bottom:10px;
            border-radius:12px;
            transition:.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active{
            background:#2563eb;
        }

        .sidebar-menu i{
            margin-right:10px;
        }

        /* MAIN CONTENT */
        .main-content{
            margin-left:260px;
            width:100%;
        }

        /* NAVBAR */
        .top-navbar{
            background:white;
            padding:15px 25px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .search-box{
            width:350px;
        }

        .search-box input{
            border-radius:12px;
            border:1px solid #ddd;
        }

        .admin-box{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .admin-avatar{
            width:42px;
            height:42px;
            border-radius:50%;
            background:#2563eb;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight:bold;
        }

        /* CONTENT */
        .content{
            padding:30px;
        }

        /* CARD */
        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 12px 25px rgba(0,0,0,.12);
        }

        /* TABLE */
        .table{
            vertical-align:middle;
        }

        /* FOOTER */
        .footer{
            text-align:center;
            padding:20px;
            color:#6c757d;
        }

        @media(max-width:768px){

            .sidebar{
                width:220px;
            }

            .main-content{
                margin-left:220px;
            }

            .search-box{
                width:200px;
            }
        }
    </style>
</head>

<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            BURJO Century
        </div>

        <div class="sidebar-menu">

            <a href="<?= base_url('/') ?>" class="<?= uri_string()=='' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <a href="<?= base_url('menu') ?>" class="<?= uri_string()=='menu' ? 'active' : '' ?>">
                <i class="bi bi-grid"></i>
                Daftar Menu
            </a>

            <a href="<?= base_url('menu/create') ?>" class="<?= uri_string()=='menu/create' ? 'active' : '' ?>">
                <i class="bi bi-plus-circle"></i>
                Tambah Menu
            </a>

        </div>

    </div>

    <!-- MAIN -->
    <div class="main-content">

        <!-- NAVBAR -->
        <div class="top-navbar">

            <div class="search-box">
                <input type="text"
                       class="form-control"
                       placeholder="Cari menu...">
            </div>

            

        </div>

        <!-- CONTENT -->
        <div class="content">

            <?= $this->renderSection('content') ?>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            © <?= date('Y') ?> BURJO Century | Sistem Manajemen Menu Burjo
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'BURJO Century' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#f8fafc,#e2e8f0);
            overflow-x:hidden;
        }

        .wrapper{
            display:flex;
        }

        /* SIDEBAR */

        .sidebar{
            width:270px;
            min-height:100vh;
            background:#0f172a;
            position:fixed;
            left:0;
            top:0;
            z-index:1000;
        }

        .logo{
            padding:30px 20px;
            text-align:center;
            border-bottom:1px solid rgba(255,255,255,.08);
        }

        .logo h4{
            color:white;
            font-weight:700;
            margin:0;
        }

        .logo p{
            color:#94a3b8;
            margin:0;
            font-size:13px;
        }

        .sidebar-menu{
            padding:20px 15px;
        }

        .sidebar-menu a{
            display:flex;
            align-items:center;
            gap:12px;
            text-decoration:none;
            color:#cbd5e1;
            padding:14px 18px;
            margin-bottom:10px;
            border-radius:14px;
            transition:.3s;
            font-weight:500;
        }

        .sidebar-menu a:hover{
            background:rgba(255,255,255,.05);
            color:white;
            transform:translateX(4px);
        }

        .sidebar-menu a.active{
            background:#2563eb;
            color:white;
            border-left:4px solid #93c5fd;
        }

        .sidebar-menu i{
            font-size:18px;
        }

        /* MAIN CONTENT */

        .main-content{
            margin-left:270px;
            width:100%;
            min-height:100vh;
        }

        /* NAVBAR */

        .top-navbar{
            background:white;
            border-bottom:1px solid #e2e8f0;
            padding:18px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            position:sticky;
            top:0;
            z-index:999;
        }

        .search-box{
            width:350px;
        }

        .search-box input{
            background:#f1f5f9;
            border:none;
            border-radius:12px;
            padding:12px 15px;
        }

        .search-box input:focus{
            box-shadow:none;
            background:#e2e8f0;
        }

        .admin-box{
            display:flex;
            align-items:center;
            gap:12px;
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
            font-weight:700;
        }

        .admin-info h6{
            margin:0;
            font-size:14px;
            font-weight:600;
        }

        .admin-info small{
            color:#64748b;
        }

        /* CONTENT */

        .content{
            padding:30px;
        }

        /* CARD */

        .card{
            border:none;
            border-radius:24px;
            overflow:hidden;
            background:white;
            box-shadow:0 8px 30px rgba(15,23,42,.08);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-4px);
        }

        /* TABLE */

        .table thead th{
            background:#2563eb;
            color:white;
            border:none;
        }

        .table tbody td{
            vertical-align:middle;
        }

        /* BUTTON */

        .btn{
            border-radius:12px;
            font-weight:500;
        }

        /* FOOTER */

        .footer{
            text-align:center;
            padding:25px;
            color:#64748b;
            font-size:14px;
        }

        /* MOBILE */

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

        @media(max-width:576px){

            .sidebar{
                display:none;
            }

            .main-content{
                margin-left:0;
            }

            .search-box{
                display:none;
            }

            .top-navbar{
                padding:15px;
            }
        }

    </style>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            <h4><i class="bi bi-shop"></i> BURJO Century</h4>
            <p>Restaurant Management</p>
        </div>

        <div class="sidebar-menu">

            <a href="<?= base_url('/') ?>" class="<?= uri_string()=='' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <a href="<?= base_url('menu') ?>" class="<?= uri_string()=='menu' ? 'active' : '' ?>">
                <i class="bi bi-grid-fill"></i>
                Daftar Menu
            </a>

            <a href="<?= base_url('menu/create') ?>" class="<?= uri_string()=='menu/create' ? 'active' : '' ?>">
                <i class="bi bi-plus-circle-fill"></i>
                Tambah Menu
            </a>

            <a href="<?= base_url('pelanggan') ?>"
   class="<?= uri_string()=='pelanggan' ? 'active' : '' ?>">
    <i class="bi bi-people-fill"></i>
    Pelanggan
</a>

<a href="<?= base_url('logout') ?>" class="btn btn-danger">
    <i class="bi bi-box-arrow-right"></i> Logout
</a>
        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- NAVBAR -->
        <div class="top-navbar">

            <div class="search-box">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari menu..."
                >
            </div>

            <div class="admin-box">

                <div class="admin-info text-end">
                    <h6>Administrator</h6>
                    <small>BURJO Century</small>
                </div>

                <div class="admin-avatar">
                    A
                </div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="content">

            <?= $this->renderSection('content') ?>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            © <?= date('Y') ?> BURJO Century • Restaurant Management System
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
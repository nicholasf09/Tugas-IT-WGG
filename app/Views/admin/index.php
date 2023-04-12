<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>


    <style>
    @import url(https://fonts.googleapis.com/css?family=Poppins);
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }

        section {
            height: auto;
            position: absolute;
            min-height: 200vh;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url(https://upload.wikimedia.org/wikipedia/commons/a/a4/100_views_edo_076.jpg);
        }

        .top {
            display: flex;
            justify-content: center;

        }

        .navbar {
            margin-top: 25px;
            padding-left: 8%;
            padding-right: 8%;
            padding-top: 5;
            height: 12%;
            display: flex;
            align-items: center;
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            justify-content: center;
            color: #EDE9D5;

        }

        .menu-outline {
            width: 30px;
            cursor: pointer;
        }

        nav {
            flex: 1;
            text-align: right;
        }

        nav ul li {
            position: relative;
            list-style: none;
            display: inline-block;
            margin-right: 60px;

        }

        nav ul li a {
            text-decoration: none;
            color: #EDE9D5;
            position: relative;
            transition: .5s;
        }

        nav ul li a:hover {
            text-decoration: underline;
            stroke: #EDE9D5;
        }

        ion-icon {
            color: #EDE9D5;
            font-size: 30px;
        }

        .form-box {
            margin-top: 60px;
            position: relative;
            width: 900px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(18px);
            display: flex;
            justify-content: center;
            align-items: center;
            top: 50px;
            box-shadow: 0px 0px 2px 0px #fff;
            margin-bottom: 85px;
        }

        h2 {
            font-size: 2em;
            color: #EDE9D5;
            text-align: center;
        }


        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }
        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #EDE9D5;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            transition: .5s;
        }

        button:hover {
            background: #8d311e;
            color: #fff;

        }
        table {
            width: 100%;
            table-layout: absolute;
            margin-right: 170px;
            margin-bottom: 20px;
        }

        .tbl-header {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .tbl-content {
            margin-right: 50px;
            height: 300px;
            overflow-x: auto;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        th {
            padding: 30px 65px;
            text-align: center;
            font-weight: 500;
            font-size: 14px;
            color: #fff;
            text-transform: uppercase;
            border-bottom: solid .8px rgba(255, 255, 255, 0.1);
            border-left: solid .8px rgba(255, 255, 255, 0.1);
        }

        td {
            padding: 20px;
            text-align: center;
            vertical-align: middle;
            font-weight: 300;
            font-size: 14px;
            color: #fff;
            border-bottom: solid .8px rgba(255, 255, 255, 0.1);
            border-left: solid .8px rgba(255, 255, 255, 0.1);
        }

        .tabel h2 {
            margin: 40px;
            font-size: 40px;
            transition: .5s;
        }

        .tabel h2:hover {
            color: #8d311e;
            cursor: default;
        }

        .tabel button {
            height: 35px;
            width: 50%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-align: center;
            margin-left: 0;
        }
        .button {
            margin-right: 10px;
            text-decoration: none;
            font-family: 'poppins', sans-serif;
            color: black;
            width: 100%;
            padding: 8px 14px;
            font-size: larger;
            border-radius: 5px;
            background: #EDE9D5;
            font-size: 1em;
            font-weight: 600;
            transition: 0.5s;
        }
        .button:hover{
            color: #fff;
            background-color: #37306B;
        }
        .versi2 {
            height: auto;
        }
        .tengah{
            padding: 10px;
            text-align:center;
        }
        .addAdmin{
            border-radius: 5px;
            padding: 10px 26px;
            text-decoration: none;
        }
        .addAdmin:hover{
            background-color: #8d311e;
        }
    </style>
</head>

<body>
    <section>
        <div class="navbar">
                <h1 class="logo">TOKYO METROPOLITAN ART</h1>
                <nav class="navigation">
                    <ul>
                        <li><a href="<?=site_url('Home')?>">Home</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="<?=site_url('admin')?>">Admin</a></li>
                    </ul>
                </nav>
                <ion-icon name="menu"></ion-icon>
            </div>

        <div class="container my-5">

            <!-- <?php if (session()->has('msg_success')): ?>

                <div class="alert alert-success">
                    <?=session()->getFlashdata('msg_success')?>
                </div>

            <?php elseif (session()->has('msg_error')): ?>

                <div class="alert alert-danger">
                    <?=session()->getFlashdata('msg_error')?>
                </div>

            <?php endif ?> -->

            <div class="top">
                <div class="form-box versi2">
                  <div class="tabel">
                  <h2>Admin List</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data_admin as $admin): ?>

                                    <tr>  
                                        <td><?=htmlspecialchars($admin->ID)?></td>
                                        <td><?=htmlspecialchars($admin->Username)?></td>
                                        <td><?=htmlspecialchars($admin->Status)?></td>
                                        <td>
                                            <?=form_open(site_url('admin/hapus'))?>
                                                <input type="hidden" name="submit" value="Disabled">
                                                <input type="hidden" name="id_disable" value="<?=htmlspecialchars($admin->ID)?>">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="Status" value="Disabled">

                                                <a href="<?=site_url('admin/sunting/'.$admin->ID)?>" class="button">Edit</a> 
                                                <button name="hapus_data" value="ya">Remove</button> 
                                            <?=form_close()?>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tengah"><a class="button addAdmin" href="<?=site_url('admin/tambah')?>">Tambah Data</a> </div>
     </section>
</body>

</html>
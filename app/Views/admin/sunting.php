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
            margin-top: 70px;
            position: relative;
            width: 800px;
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
            margin-bottom: 80px;
        }

        h2 {
            font-size: 2em;
            color: #EDE9D5;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #EDE9D5;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #EDE9D5;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }
        .id{
            padding-bottom: 60px;
        }
        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: 15px 0 20px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: center;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }

        .forget a:hover {
            text-decoration: underline;
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
            background-color: #37306B;
            color: #fff;

        }

        .admin {
            display: absolute;
            margin-right: 90px;
            transition: 1s;
        }

        .admin h2 {
            font-size: 50px;
        }

        .admin h1 {
            font-size: 50px;
            color: #EDE9D5;
            text-align: center;
            transition: 1s;
            cursor: pointer;
        }

        .admin h1:hover {
            font-size: 50px;
            color: #37306B;
            text-align: center;
        }
        .tengah{
            padding: 10px;
            text-align:center;
        }
        .back{
            text-decoration: none;
            color: #000;
            background-color: #EDE9D5;
            font-weight: 600;
            border-radius: 5px;
            padding: 10px 26px;
            transition: 0.5s;
        }
        .back:hover{
            color: #EDE9D5;
            background-color: #37306B;
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
    <div class="top">
          <div class="form-box">
            <div class="admin">
               <h2>Edit Admin</h2>
                <h1>管理人</12>
            </div>
            <div class="form-value">
                <?php
                    $error = session()->has('error_val');
                    $error_val = session()->getFlashdata('error_val');
                ?>
                <?=form_open()?>
                    <div class="inputbox">  
                        <label class="id" for="">ID</label>
                        <input type="text" value="<?=old('id') ?? htmlspecialchars($fetch_data->ID) ?>" disabled name="id" placeholder="Masukkan ID" class="form-control<?=$error && !empty($error_val['id']) ? ' is-invalid' : ''?>">
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" value="<?=htmlspecialchars($fetch_data->Username)?>" name="username" placeholder="Masukkan Username" class="form-control<?=$error && !empty($error_val['username']) ? ' is-invalid' : ''?>">
                        <label for="">Username</label>          
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <button class="btn btn-primary" name="submit" value="ya">Simpan</button>    
                <?=form_close()?>
            </div>
        </div>
    </div>
    <div class="tengah"><a class="back" href="<?=site_url('admin')?>">Back</a></div>
</section>
</body>

</html>
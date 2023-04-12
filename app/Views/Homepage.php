<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Metropolitan Art</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins);
        *{
            padding: 0;
            margin: 0;
            font-family: 'poppins', sans-serif;
        }
        .container{    
            width: 100%;
            height: 100vh;
            background-position: center;
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(https://wallpaperaccess.com/full/7819759.jpg);
            background-size: cover;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
        }
        .navbar{
            height: 12%;
            display: flex;
            align-items: center;
        }
        .logo{
            color: #EDE9D5;
           
        }
        .menu-outline{
            width: 30px;
            cursor: pointer;
        
        }
        nav{
            flex: 1;
            text-align: right;
        }
        nav ul li{
            position: relative;
            list-style: none;
            display: inline-block;
            margin-right: 60px;
    
        }
        nav ul li a{
            text-decoration: none;
            color: #EDE9D5;
            position: relative;
            transition: .5s;
        }
        nav ul li a:hover{
            text-decoration: underline;
            stroke: #EDE9D5;
        }
        ion-icon {
            color: #EDE9D5;
            font-size: 30px;
        }
        .row{
            display: flex;
            height: 88%;
            align-items: center;
        }
        .col{
            flex-basis: 50%;
            margin-right: 290px;
        }
        .cols{
            margin-right: 20px;
        }
        .col h1{
            color: #EDE9D5;
            line-height: 85px;
            font-size: 100px;
            margin-bottom: 20px;
        }
        p{
            color: #EDE9D5;
            font-size: 18px;
            line-height: 20px;
        }
        .col p{
            text-align: justify;
            text-justify: inter-word;
            line-height: 30px;
            margin-right: -85px;
            
        }
        .cols p{
            color: #EDE9D5;
            font-size: 12px;
            line-height: 20px;
        }
        h5{
            font-weight:bold;
            font-size: 18px;
        }
        button{
            width: 200px;
            color: #37306B;
            background: #EDE9D5;
            font-size: 12px;
            padding: 12px 0;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 15px;
            cursor: pointer;
            transition: 0.5s;
        }
        button:hover{
            color: #EDE9D5;
            background-color: #37306B;
        }
        .card{
            list-style: none;
            display: inline-block;
            width: 200px;
            height: 250px;
            border-radius: 10px;
            display: inline-block;
            padding: 15px 20px 0 20px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 20px 45px 0 0;
            background-position: center;
            background-size: cover;
            transition: 0.8s;
        }
        .v1{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)), url(https://m.media-amazon.com/images/M/MV5BODJhZDU1MDYtMDQ0NS00N2JmLWI2ZDAtMGNmN2RmNWJhNzQ5L2ltYWdlXkEyXkFqcGdeQXVyNjY1OTY4MTk@._V1_.jpg);
        }
        .v2{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)), url(https://m.media-amazon.com/images/M/MV5BODRmZDVmNzUtZDA4ZC00NjhkLWI2M2UtN2M0ZDIzNDcxYThjL2ltYWdlXkEyXkFqcGdeQXVyNTk0MzMzODA@._V1_FMjpg_UX1000_.jpg);
        }
        .v3{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)), url(https://m.media-amazon.com/images/M/MV5BNzE4ZDEzOGUtYWFjNC00ODczLTljOGQtZGNjNzhjNjdjNjgzXkEyXkFqcGdeQXVyNzE5ODMwNzI@._V1_FMjpg_UX1000_.jpg);
        }
        .v4{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)), url(https://m.media-amazon.com/images/M/MV5BOTIyNzY3NTgtMmE0Ny00ZDIxLTgxMzgtMThlMTg0NTA4YzViXkEyXkFqcGdeQXVyNjM0MTI4Mw@@._V1_.jpg);
        }
        .cols{
            list-style: none;
            display: inline-block;
            margin-right: 20px;
        }
        .card:hover{
            transform: translateY(-15px);        
        }
        h5 {
            color: #EDE9D5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h1 class="logo">MAKOTO SHINKAI</h1>
            <nav class ="navigation">
                <ul>
                    <li><a href="<?=site_url('Home')?>">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="<?=site_url('admin')?>">Admin</a></li>
                </ul>
            </nav>
            <ion-icon name="menu"></ion-icon>
        </div>
        <div class="row">
            <div class="col">
                <h1>Series</h1>
                <p>Makoto Shinkai is a Japanese director, writer, producer, animator, editor, cinematographer, voice actor, manga artist and former graphic designer. His best knows films are The Place Promised in Our Early Days (2004), 5 Centimeters Per Second (2007), Children Who Chase Lost Voices (2011), The Garden of Words (2013), and Your Name (2016).</p>
                <button>Explore More</button>
            </div>
            <div class="cols">
                <div class="card v1">
                    <h5>5 Centimeters Per Second</h5>
                    <p>A young man through his life as cruel winters, cold technology, and finally, adult obligations and responsibility converge to delicate petals of love.</p>
                </div>
                <div class="card v3">
                    <h5>Weathering <br> With You</h5>
                    <p>A high school boy who runs away from his rural home to Tokyo and befriends an orphan girl who has the ability to control the weather.</p>
                </div>
                <div class="card v2">
                    <h5>Your Name</h5>
                    <p>Two high school students, who live in different parts of Japan suddenly begin to swap bodies and living each other's lives.</p>
                </div>
                <div class="card v4">
                    <h5>Suzume</h5>
                    <p> It depicts a high school girl and a mysterious young man trying to prevent a series of disasters across Japan.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <?php if(session()->getFlashdata('success')): ?>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil!',
            text: 'Anda berhasil login ke sistem.'
        });
        </script>
    <?php endif; ?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html> 
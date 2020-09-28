<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .page-breadcrumb {
            padding: 250px 0 150px;
            background: url(../images/bg10.jpg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: 0 0;
            position: relative;
        }

        .all-page-title .container {
            position: relative;
            z-index: 2;
        }

        .all-page-title::before {
            background: #010101;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
            opacity: 0.5;
        }

        .all-page-title h1 {
            font-size: 38px;
            color: #ffffff;
            font-family: 'Arbutus Slab', serif;
            padding: 0px;
        }

        .stuff-box {
            padding: 70px 0px;

        }

        .our-team {
            border: 2px solid #3d3434;
            border-radius: 4px;
        
            text-align: center;
            margin: 10px;
            z-index: 1;
            position: relative;
        }

        .our-team:before,
        .our-team:after {
            content: "";
            width: 100%;
            height: 104%;
            background: #7a7878;
            position: absolute;
            top: 50%;
            left: 0;
            z-index: -1;
            transform: translateY(-50%) scaleX(0.3);
            transition: all 0.3s ease 0s;
        }

        .our-team:after {
            width: 106%;
            left: 50%;
            transform: translate(-50%, -50%) scaleY(0.25);
        }

        .our-team:hover:before {
            transform: translateY(-50%) scaleX(0.7);
        }

        .our-team:hover:after {
            transform: translate(-50%, -50%) scaleY(0.7);
        }

        .our-team img {
            width: 100%;
            height: auto;
            border-radius: 0px;
            transition: all 0.3s ease 0s;
        }

        .our-team .team-content {
            width: 93%;
            padding: 10px 0 10px;
            background: #7a7878;
            position: absolute;
            bottom: 50px;
            left: 50%;
            opacity: 0;
            transform: translateX(-50%);
            transition: all 0.3s cubic-bezier(0.5, 0.2, 0.1, 0.9);
        }

        .our-team:hover .team-content {
            bottom: 10px;
            opacity: 1;
        }

        .our-team .title {
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-left: 110px;
            margin-top: 25px;
        }

        .our-team .post {
            display: block;
            font-size: 16px;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .our-team .social {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .our-team .social li {
            display: inline-block;
            margin: 0 5px;
        }

        .our-team .social li a {
            display: block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            background: #fff;
            font-size: 20px;
            color: #000000;
            transition: all 0.3s ease 0s;
        }

        .our-team .social li a:hover {
            background: #ffffff;
            box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.3);
            color: #000000;
        }

        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 30px;
            }
        }

    </style>


</head>

<body>
    {{-- header section --}}
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-inner">
            <nav class="navbar ">
                <a class="navbar-brand " href="#" style="color: #fff">
                    <img src="./images/l1-crop.png" width="400">
                </a>
            </nav>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "><a style="color: #fff;">||||</a></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  nulli " id="na">
                        <a href="{{action('SiteDetailsController@online')}}" class="nullia" id="na" style="color: antiquewhite;"> Home </a>
                    </li>
                    <li class="nav-item nulli activee">
                        <a href="{{ action('SiteDetailsController@about') }}" class="nullia"
                            style="color: antiquewhite;"> About </a>
                    </li>
                    <li class="nav-item nulli ">
                        <a href="{{action('SendEmailController@index')}}" class="nullia" style="color: antiquewhite;"> Contact us </a>
                    </li>
                </ul>
            </div>

            </div>
        </nav>
    </header>
    {{-- header section end --}}


    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About us.</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Stuff -->
    <div class="stuff-box justify-content-center">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Team Membars</h2>
                        {{-- <p>“If more of us valued food and cheer and song above
                            hoarded gold, it would be a merrier
                            world.”</p> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="  col-sm-3 ">
                    <div class="our-team">
                        <img src="../images/to.jpg">
                        <div class="team-content">
                            <h3 class="title">Souvik Chatterjee</h3>
                            <span class="post">Team Alpha</span>
                        </div>
                    </div>
                </div>

                <div class=" col-sm-3 justify-content-center">
                    <div class="our-team">
                        <img src="../images/s.jpeg">
                        <div class="team-content">
                            <h3 class="title">Sofiar Rahaman Middya</h3>
                            <span class="post">Team Alpha</span>

                        </div>
                    </div>
                </div>

                <div class=" col-sm-3  ">
                    <div class="our-team">
                        <img src="../images/m.jpg">
                        <div class="team-content">
                            <h3 class="title">Monalisa Bose</h3>
                            <span class="post">Team Alpha</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Stuff -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-black " style="color: #fff;">All Rights Reserved. &copy; 2020 <a
            href="{{ action('SiteDetailsController@online') }}" style="color: #fff;">Online Exam System</a>
    </div>
        <!-- Copyright -->

    <!-- Start Footer -->



</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineExamSystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">


</head>

<body style="background-image: url(./images/bg1.jpg) ;">
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
                    <li class="nav-item  nulli active" id="na">
                        <a class="nullia" id="na" style="color: antiquewhite;"> Home </a>
                    </li>
                    <li class="nav-item nulli ">
                        <a class="nullia" style="color: antiquewhite;"> About </a>
                    </li>
                    <li class="nav-item nulli ">
                        <a class="nullia" style="color: antiquewhite;"> Contact us </a>
                    </li>
                </ul>
            </div>

            </div>
        </nav>
    </header>

    <!-- Slider section -->
    <div id="carouselExampleIndicators" class="carousel slide  carousel-fade " data-interval="3000"
        data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="carousel" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="carousel"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="carousel"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item drk active">
                <div class="about-us">
                    <img class="d-block w-100 " src="./images/d.jpg" height="650px" alt="Second slide">
                </div>
                <div class="carousel-caption d-none d-md-block title">
                    <h1>”Education is the most powerful weapon which you can use to change the world”</h1>
                    <p>– Nelson Mandela</p>
                    <div class="button">
                        <a href="#" class="btn">LEARN</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item drk">
                <img class="d-block w-100  " src="./images/a1.jpg" height="650px" alt="Second slide">
                <div class="carousel-caption d-none d-md-block title">
                    <h1> “An investment in knowledge pays the best interest” </h1>
                    <p>– Benjamin Franklin</p>
                    <div class="button">
                        <a href="#" class="btn">LEARN</a>
                    </div>
                </div>

            </div>
            <div class="carousel-item drk">
                <img class="d-block w-100" src="./images/f.jpg" height="650px" alt="Third slide">
                <div class="carousel-caption d-none d-md-block title">
                    <h1>“Live as if you were to die tomorrow. Learn as if you were to live forever” </h1>
                    <p>– Mahatma Gandhi</p>
                    <div class="button">
                        <a href="#" class="btn">LEARN</a>
                    </div>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider section End -->
    <br>
    <br>

    <!-- log in section -->
    <div class="container-sm w-75 ">
        <ul class="nav nav-tabs nav-pills nav-fill  " id="myTab" role="tablist">
            <li class="nav-item pill-1">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Student Log in</a>
            </li>
            <li class="nav-item pill-2">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Admin Log in</a>
            </li>
        </ul>
        <div class="tab-content bg-pink" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">
                    <div class="col-auto ">
                        <img src="./images/sl.jpg" width="350px" height="350px">
                    </div>
                    <div class="col ">
                        <h2 style="color: rgb(43, 40, 40);">Student can Logged in here !</h2>
                        <br>
                        <h4 style="color: grey;">If you participat online exam , you should have first Log in here </h4>
                        <br>
                        <h5 style="color: grey;">Wishing you have a good exam... </h5>
                        <h5 style="color: grey;">Best of luck</h5>
                        <div class="sub">
                        <a href="{{route('studentLogin')}}"  target="self "> <input type="submit" name="submit" value="Log in" ></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-auto">
                        <img src="./images/al.jpg" width="350px" height="350px">
                    </div>
                    <div class="col ">
                        <h2 style="color: rgb(43, 40, 40);">Admin can Logged in here !</h2>
                        <br>
                        <h4 style="color: grey;">If you take online exam , you should have first Log in here </h4>
                        <br>
                        <h5 style="color: grey;">Wishing you better experience </h5>
                        <h5 style="color: grey;">to taking exam</h5>
                        <div class="sub">
                            <input type="submit" name="submit" value="Log in">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <!-- log in section End -->

    <!-- About section -->
    <!-- 
    <div class="about-us footer" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(./images/v.jpg);" >
        <div class="row ">
            <div class="col-sm widget-footer">
                <div class="widgets">
                    <h4>Contact Info.</h4>
                    <p>This is the contact information so that you can touch with us easyly.</p><br>
                    <p><strong>Phone:</strong>7908686710</p>
                    <p><strong>E-mail:</strong>tchatterjee466@gmail.com</p>
                </div>
            </div>
            <div class="col-sm widget-footer">
                <div class="widgets">
                    <h4>Sign up</h4>
                    <p>If you want to get latest updated programmes below </p><br>
                    <p><strong>E-mail:</strong></p>
                    <input type="text" class="subscribe_text">
                    <br>
                    <input type="submit" value="SUBSCRIBE" class="subscribe-btn">
                </div>

            </div>
            <div class="col-sm widget-footer">
                <div class="widgets">
                    <h4>Follow on Social media</h4>
                    <div class="facebook">
                   <a href=""><img src="images/f.png" ></a>
                   <a href=""><img src="images/t.png"  ></a>
                   <a href=""><img src="images/w.png"  ></a>
                   </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About section End -->

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4  ">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left "
            style="background: linear-gradient(rgba(0,0,0,0.7),rgba(70, 68, 68, 0.7));">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text underline" style="color: rgb(255, 255, 255);">Fully customized & user friendly
                        environment for their requirements.</h5>
                    <!-- <p style="color: #fff;">Better Experience</p> -->
                    <ul class="list-unstyled" style="color: #fff;">
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>

                            <a>Secure & private</a>
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>

                            <a>Easy to define Test settings</a>
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>

                            <a>No software installations required</a>
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>

                            <a>Better experience</a>
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>

                            <a>Results automatically graded & viewable in real time</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text underline" style="color: #fff;">About System</h5>

                    <ul class="list-unstyled" style="color: #fff;">
                        <li>
                            <a>This Online Examination System(OES) is a Multiple Choice Questions(MCQ) based examination
                                system that provides an easy to use environment for both Test Conducters and Students
                                appearing for Examination.</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text underline" style="color: #fff;">Social Links</h5>

                    <ul class="list-unstyled">
                        <li>

                            <div class="widgets">
                                <div class="facebook">
                                    <a href=""><img src="./images/f.png"></a>
                                    <a href=""><img src="./images/w.png"></a>
                                    <a href=""><img src="./images/t.png"></a>
                                    <a href=""><img src="./images/y1.jpg"></a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-black " style="color: #fff;">© 2020 Copyright:
            <a href="https://mdbootstrap.com/" style="color: #fff;">Online Exam System</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



</body>

</html>
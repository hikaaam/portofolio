<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Ilyas A Yusuf</title>

    <link rel="stylesheet" href="assets/bs/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/bs/popper.js"></script>
    <script src="assets/bs/bootstrap.js"></script>
    <script src="assets/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body id="body">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Experience</a>
                    <div style="cursor:pointer;" class="dropdown-menu">
                        <a class="dropdown-item" name="React" onclick="pindah(this.name)">React Native</a>
                        <a class="dropdown-item" name="Laravel" onclick="pindah(this.name)">Laravel</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="Contact" style="cursor:pointer;" onclick="pindah(this.name)">Contact Me<span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>


            <a class="nav-link" target="_blank" rel="noopener noreferrer" style="color:#eee"
                href="images/lh/1.png">Download CV<span class="sr-only">(current)</span></a>

        </div>
    </nav>

    <hr>
    <div class="padding">
        <div style="margin-bottom: 4%;" id="header">
            <h1>Hello, I'm</h1>
            <h1>Ilyas Abdurahman Yusuf</h1>
            <p>
                I am a software developer,<br> i can build website and mobile app. <br> I have a bachelor's deegre
                in computer science
                <br> from <a href="https://poltektegal.ac.id/">politeknik harapan bersama tegal.</a>
            </p>
        </div>
        <div style="padding-top: 3.5%;" id="reversePadding" class="d-flex justify-content-center">
            <p>
                <b>Past Work</b><br>Here is pictures of <br> some apps that i've been made <br> in the past.
            </p>
        </div>
        <div style="padding-bottom: 3.5%;margin-bottom: 13%;" id="reversePadding" class="d-flex justify-content-center">
            <h1><a style="cursor:pointer;" class="nextThing" name="React" onclick="pindah(this.name)"><i class="fa fa-chevron-down"></i></a>
            </h1>
        </div>

        <div id="React">
            <br>
            <h1>
                Build With React Native
            </h1>
            <br>
            <div id="hidroponik">
                <p> <a href="https://github.com/hikaaam/Hidroponik" id="LinkApp">Hydroponic app</a><br> that can have multiple users and plants that
                    controlled
                    by
                    arduino. <br>with a lots of feature including Internet of Things. <br>Realtime data status of every
                    plant,
                    <br> Notifications system using Firebase Cloud Messaging, Etc.
                </p>
                <div class="row" style="width:100%;height: 60%;">
                    <div class="col sm-4">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/1.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/2.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/3.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col sm-4">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/1.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/2.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/3.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col sm-4">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/1.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/2.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/3.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- selanjutnya -->
            <div id="hidroponik">
                <br>
                <br>
                <p> <a href="https://github.com/hikaaam/sipdeh" id="LinkApp">Sipdeh</a><br> Sistem Informasi Hukum Pemerintah Daerah.
                    <br>This is a simple app that call an API from server. <br>User can see an updated information on a
                    local law,
                    <br> And download PDF version of any local law using this app.
                </p>
                <div class="row" style="width:100%;height: 60%;">
                    <div class="col sm-3">
                        <div id="sipdeh1" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#sipdeh1" data-slide-to="0" class="active"></li>
                                <li data-target="#sipdeh1" data-slide-to="1"></li>
                                <li data-target="#sipdeh1" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/sipdeh/2.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/1.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/3.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#sipdeh1" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#sipdeh1" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col sm-3">
                        <div id="sipdeh2" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#sipdeh2" data-slide-to="0" class="active"></li>
                                <li data-target="#sipdeh2" data-slide-to="1"></li>
                                <li data-target="#sipdeh2" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/sipdeh/5.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/6.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/7.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#sipdeh2" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#sipdeh2" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col sm-3">
                        <div id="sipdeh3" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#sipdeh3" data-slide-to="0" class="active"></li>
                                <li data-target="#sipdeh3" data-slide-to="1"></li>
                                <li data-target="#sipdeh3" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/sipdeh/7.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/8.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/sipdeh/9.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#sipdeh3" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#sipdeh3" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div style="padding-top: 3.5%;margin-top: 13%;" id="reversePadding" class="d-flex justify-content-center">
        <p>
            <b>Website Experience</b><br>Almost all of my website<br> project build with laravel.<br> but i can do node
            js or react.
        </p>
    </div>
    <div style="padding-bottom: 3.5%;margin-bottom: 13%;" id="reversePadding" class="d-flex justify-content-center">
        <h1><a style="cursor:pointer;" class="nextThing" name="Laravel" onclick="pindah(this.name)"><i class="fa fa-chevron-down"></i></a></h1>
    </div>

    <div class="padding" id="Laravel">
        <br>
        <h1>
            Build With Laravel
        </h1>
        <br>
        <div id="VampireGames">
            <p> <a href="https://lindungihutan.com/" id="LinkApp">Lindungi Hutan</a><br> This is a crowd funding website to protect the trees.
                <br>
                it have payment gates, login intregated with gmail or facebook
                <br>also a live analytic to watch the progress of trees.
            </p>
            <div class="row" style="width:100%;height: 60%;">
                <div id="dark" class="col sm-6">
                    <div id="lara3" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#lara3" data-slide-to="0" class="active"></li>
                            <li data-target="#lara3" data-slide-to="1"></li>
                            <li data-target="#lara3" data-slide-to="2"></li>
                            <li data-target="#lara3" data-slide-to="3"></li>
                            <li data-target="#lara3" data-slide-to="4"></li>
                            <li data-target="#lara3" data-slide-to="5"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="myImage" draggable="false" src='images/lh/1.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/2.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/3.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/4.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/5.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/6.png'></img>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#lara3" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#lara3" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div id="dark" class="col sm-4">
                    <div id="lara4" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#lara4" data-slide-to="0" class="active"></li>
                            <li data-target="#lara4" data-slide-to="1"></li>
                            <li data-target="#lara4" data-slide-to="2"></li>
                            <li data-target="#lara4" data-slide-to="3"></li>
                            <!-- <li data-target="#lara4" data-slide-to="4"></li> -->
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active">
                                <img id="myImage" draggable="false" src='images/lh/6.png'></img>
                            </div> -->
                            <div class="carousel-item active">
                                <img id="myImage" draggable="false" src='images/lh/7.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/8.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/9.png'></img>
                            </div>
                            <div class="carousel-item">
                                <img id="myImage" draggable="false" src='images/lh/10.png'></img>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#lara4" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#lara4" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

            </div>
            <!-- selanjutnya -->
            <br>
            <div id="VampireGames">
                <p> <a href="https://github.com/hikaaam/VGWeb" id="LinkApp">Vampire Esport</a><br> This is an article website created from scratch.
                    <br>With
                    customizable view and pagination,
                    <br>also a comment section that linked with <a id="sitasi" href="">disqus</a>
                </p>
                <div class="row" style="width:100%;height: 60%;">
                    <div class="col sm-6">
                        <div id="lara1" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#lara1" data-slide-to="0" class="active"></li>
                                <li data-target="#lara1" data-slide-to="1"></li>
                                <li data-target="#lara1" data-slide-to="2"></li>
                                <li data-target="#lara1" data-slide-to="3"></li>
                                <li data-target="#lara1" data-slide-to="4"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/vg/1.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/2.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/3.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/4.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/5.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#lara1" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#lara1" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div id="dark" class="col sm-4">
                        <div id="lara2" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#lara2" data-slide-to="0" class="active"></li>
                                <li data-target="#lara2" data-slide-to="1"></li>
                                <li data-target="#lara2" data-slide-to="2"></li>
                                <li data-target="#lara2" data-slide-to="3"></li>
                                <li data-target="#lara2" data-slide-to="4"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImage" draggable="false" src='images/vg/6.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/7.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/8.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/9.png'></img>
                                </div>
                                <div class="carousel-item">
                                    <img id="myImage" draggable="false" src='images/vg/10.png'></img>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#lara2" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#lara2" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div style="padding-top: 3.5%;margin-top: 13%;" id="reversePadding"
                    class="d-flex justify-content-center">
                    <p>
                        <b>Contact Me</b><br>If you are looking forward to<br>cooperate with me in the future. <br> You
                        can contact me via
                        <br><i class="fab fa-whatsapp"></i> Whatsapp or <i class="fas fa-envelope"></i> Email.</i>
                    </p>
                </div>
                <div style="padding-bottom: 3.5%;margin-bottom: 15%;" id="reversePadding"
                    class="d-flex justify-content-center">
                    <h1><a  style="cursor:pointer;" class="nextThing" name="Contact" onclick="pindah(this.name)"><i
                                class="fa fa-chevron-down"></i></a></h1>
                </div>
                <br>
                <div id="Contact" class="padding">
                    <div class="row">
                        <h1 style="margin-bottom: 2%;" class="col-sm-12">Contact</h1>
                        <div style="margin-bottom: -1%;" class="col-sm-12">
                            <p class="col-sm-6">Email <b style="margin-left: 11%;margin-right: 2%;">:</b>
                                <a style="color:#eee;text-decoration: underline;" href="mailto:ilyasyusuf031@gmail.com"><i class="fas fa-envelope"></i> ilyasyusuf031@gmail.com
                                </a></p>
                        </div>
                        <div style="margin-bottom: -1%;" class="col-sm-12">
                            <p class="col-sm-6">Phone <b style="margin-left: 10%;margin-right: 2%;">:</b>
                                <a style="color:#eee;text-decoration: underline;" href="http://wa.me/6282264020976"><i class="fab fa-whatsapp"></i> +6282264020976
                                </a></p>
                        </div>
                        <div class="col-sm-12">
                            <p class="col-sm-9">Address <b style="margin-left: 5%;margin-right: 2%;">:</b> <a style="color:#eee;text-decoration: underline;" href="https://www.google.com/maps?ll=-6.97546,109.136866&z=19&t=m&hl=id&gl=ID&mapclient=embed&q=Gg.+20+Kudaile+Kec.+Slawi+Tegal,+Jawa+Tengah+52413"><i 
                                    class="fa fa-map-marker-alt"></i> Jawa Tengah, Tegal, Slawi. Kudaile. Jln Imam Bonjol RT 02/01</a> </p>
                        </div>
                        <div id="reversePadding" class="col-sm-12" >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.285772964461!2d109.1346791143281!3d-6.97557119496067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbee3db4910f1%3A0xf81b24ea20d9002c!2sGg.%2020%2C%20Kudaile%2C%20Kec.%20Slawi%2C%20Tegal%2C%20Jawa%20Tengah%2052413!5e0!3m2!1sid!2sid!4v1598984061979!5m2!1sid!2sid"
                             width="100%" height="200%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                function pindah(link) {
                    $("html,body").animate({
                        scrollTop: $($(this).attr(link)).offset().top
                    }, 1000);
                }
            </script>
            <a name="body" onclick="pindah(this.name)"><button class="back-to-top" type="button"><i
                        class="fa fa-chevron-up"></i>
                </button></a>
</body>

</html>
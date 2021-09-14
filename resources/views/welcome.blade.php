<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BLC</title>

        <!-- Fonts -->


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>

    <div id="sidebar">
        <div class="d-flex justify-content-center pt-5 pb-3">
            <img src="/images/blc-logo.png" alt="blc logo" class="img-fluid">
        </div>
        <ul class="text-uppercase list-group text-left" id="sidebar-nav">
            <a href="" class="remove-link-styling"><li class="list-group-item border-0"><ion-icon name="film-outline"></ion-icon> Performances</li></a>
            <a href="" class="remove-link-styling"><li class="list-group-item border-0"><ion-icon name="ticket-outline"></ion-icon> Tickets</li></a>
            <a href="" class="remove-link-styling"><li class="list-group-item border-0"><ion-icon name="people-outline"></ion-icon> Staff</li></a>
            <a href="" class="remove-link-styling"><li class="list-group-item border-0"><ion-icon name="newspaper-outline"></ion-icon> In The News</li></a>
        </ul>
    </div>


            <div id="main">

                <div id="main-calendar" class="main-scroll-up">
                    <div class="row m-5">
                        <div class="col col-with-border">
                            <a href="" class="remove-link-styling">
                                <div>
                                    <span class="fw-bold">HEIDI</span>
                                    <br><span class="text-muted">SAT</span>
                                    <br><span class="text-info">NOV 13</span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="" class="remove-link-styling">
                                <div>
                                    <span class="fw-bold">HEIDI</span>
                                    <br><span class="text-muted">SUN</span>
                                    <br><span class="text-info">NOV 14</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- next section -->

                    <div id="welcome-section" class="py-5 mx-0 px-0" style="background: beige;">
                        <div class="container">
                            <div class="row m-0 p-0">
                                <div class="col-sm text-black d-flex justify-content-center align-items-center">
                                    <div class="animate-recital-text p-3">
                                        <h1 class="text-uppercase">Ballet La Crosse</h1>
                                        <p>
                                            Ballet La Crosse is designed to increase exposure to and appreciation for classical performance arts in the community as well as to provide opportunities for area youth to gain training that mirrors that of the professional world.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img src="/images/ballet.jpg" alt="" class="img-fluid animate-recital">
                                </div>
                            </div>

{{--                            <div class="row my-5">--}}
{{--                                <div class="text-dark">--}}

{{--                                </div>--}}
{{--                            </div>--}}

                        </div><!-- end container -->
                    </div><!-- end beige -->

                    <div id="footer" class="m-0 p-4 text-center">
                        <a href="https://www.facebook.com/balletlacrosse/" target="_blank"><ion-icon name="logo-facebook" class="fb-logo"></ion-icon></a>
                        <br>
                        <small class="text-muted">Copyright © 2021. Ballet La Crosse. All rights reserved.</small>
                    </div>

                </div>
            </div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
    <script src="/js/script.js" defer></script>
</html>

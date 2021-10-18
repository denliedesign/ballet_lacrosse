@extends('layouts.app')
@section('content')

        <div class="row m-5">
            <div class="col col-with-border">
                <a href="/tickets" class="remove-link-styling">
                    <div>
                        <h4 class="pb-0 mb-0 fw-bold">HEIDI</h4>
                        <span class="text-muted">SAT</span>
                        <br><span class="text-info">NOV 13</span><span class="text-muted"> &nbsp;  2:00 PM</span>
                    </div>
                </a>
            </div>
            <div class="col col-with-border">
                <a href="/tickets" class="remove-link-styling">
                    <div>
                        <h4 class="pb-0 mb-0 fw-bold">HEIDI</h4>
                        <span class="text-muted">SAT</span>
                        <br><span class="text-info">NOV 13</span><span class="text-muted"> &nbsp;  7:00 PM</span>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="/tickets" class="remove-link-styling">
                    <div>
                        <h4 class="pb-0 mb-0 fw-bold">HEIDI</h4>
                        <span class="text-muted">SUN</span>
                        <br><span class="text-info">NOV 14</span><span class="text-muted"> &nbsp;  2:00 PM</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- next section -->

        <div id="welcome-section" class="py-5 mx-0 px-0" style="background: #eff2fb;">
            <div class="container">
                <div class="row mb-5 p-0">
                    <div class="col-sm text-black d-flex justify-content-center align-items-center">
                        <div class="animate-recital-text p-3">
                            <h1 class="text-uppercase">Ballet La Crosse</h1>
                            <p>
                                Ballet La Crosse is designed to increase exposure to and appreciation for classical
                                performance arts in the community as well as to provide opportunities for area youth to
                                gain training that mirrors that of the professional world.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm">
                        <img src="/images/blc-support.jpg" alt="" class="img-fluid animate-recital">
                    </div>
                </div>

                <div class="row mt-5 p-0">
                    <div class="col-sm animate-recital-2">
                        <img src="/images/heidi-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm text-black d-flex justify-content-center align-items-center">
                        <div class="animate-recital-text-2 p-3">
                            <h1 class="text-uppercase">Heidi</h1>
                            <p>
                                Heidi is the story of a spunky orphan who dances her way into her grandfather’s heart. Along the the way, she embraces mountain life and people but then is taken to the city. Heidi becomes beloved by the girl she is a companion for, but is returned to her grandfather. She is almost kidnapped, and then faces a nearly tragic accident over an argument with her friends. Goats, villagers, school children, and even gypsies, dance together to tell the story of this young girl and the lives that she touches, teaching everyone about the joy and wonder of life and the magic that happens when they open their hearts to each other.
                            </p>
                            <div class="d-flex justify-content-start">
                                <a href="/tickets"><div class="btn btn-info text-uppercase shadow" style="font-family: 'Oswald', sans-serif;">Learn More</div></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                            <div class="row my-5">--}}
                {{--                                <div class="text-dark">--}}

                {{--                                </div>--}}
                {{--                            </div>--}}

            </div><!-- end container -->
        </div><!-- end beige -->

@endsection

@extends('layouts.app')
@section('content')
    <div class="py-5 mx-0 px-0" style="background: #eff2fb;">
        <div class="container">
            <h1 class="text-uppercase text-black text-center">Fall Repertoire</h1>
            <div class="row m-5 d-flex align-items-center text-black">
                <div class="col-sm text-center">
                    <h3>Marushka</h3>
                    <small class="text-muted">2013 &middot; 2022</small>
                </div>
                <div class="col-sm text-center">
                    <h3>Heidi</h3>
                    <small class="text-muted">2014 &middot; 2021</small>
                </div>
                <div class="col-sm text-center">
                    <h3>Cinderella</h3>
                    <small class="text-muted">2015 &middot; 2019</small>
                </div>
            </div>
            <div class="row m-5 d-flex align-items-center text-black">
                <div class="col-sm text-center">
                    <h3>The Little Mermaid</h3>
                    <small class="text-muted">2016 &middot; Spring 2021</small>
                </div>
                <div class="col-sm text-center">
                    <h3>The Little Princess</h3>
                    <small class="text-muted">2017</small>
                </div>
                <div class="col-sm text-center">
                    <h3>Alice in Wonderland</h3>
                    <small class="text-muted">2018</small>
                </div>
            </div>
            <div id="repertoire-images">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                    <img src="/images/rep-cinderella-2.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-cinderella.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-cinderella-3.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-little-mermaid.jpg" class="img-fluid my-2" alt="little mermaid">
                    <img src="/images/rep-little-mermaid-2.jpg" class="img-fluid my-2" alt="little mermaid">
                    <img src="/images/rep-little-mermaid-3.jpg" class="img-fluid my-2" alt="little mermaid">
                </div>
            </div>
            <h1 class="text-uppercase text-black text-center mt-5">Spring Repertoire</h1>
            <div class="row m-5 d-flex align-items-center text-black">
                <div class="col-sm text-center">
                    <h3>The Poems That Rachel Wrote</h3>
                    <small class="text-muted">2014</small>
                </div>
                <div class="col-sm text-center">
                    <h3>I Hear A Harp</h3>
                    <small class="text-muted">2015</small>
                </div>
                <div class="col-sm text-center">
                    <h3>Mozart's Requiem</h3>
                    <small class="text-muted">2016 &middot; 2017 &middot; 2020</small>
                </div>
            </div>
            <div class="row m-5 d-flex align-items-center text-black">
                <div class="col-sm text-center">
                    <h3>Coppelia</h3>
                    <small class="text-muted">2017 &middot; 2022</small>
                </div>
                <div class="col-sm text-center">
                    <h3>The Firebird</h3>
                    <small class="text-muted">2018</small>
                </div>
                <div class="col-sm text-center">
                    <h3>A Midsummer Night's Dream</h3>
                    <small class="text-muted">2019</small>
                </div>
{{--                <div class="col-sm text-center">--}}
{{--                    <h3>?</h3>--}}
{{--                    <small class="text-muted">2022</small>--}}
{{--                </div>--}}
            </div>
            <div id="repertoire-images">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
                    <img src="/images/rep-coppelia.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-firebird-2.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-spring.jpg" class="img-fluid my-2" alt="cinderella">
                    <img src="/images/rep-requiem.jpg" class="img-fluid my-2" alt="little mermaid">
                    <img src="/images/rep-requiem-2.jpg" class="img-fluid my-2" alt="little mermaid">
                    <img src="/images/rep-requiem-3.jpg" class="img-fluid my-2" alt="little mermaid">
                </div>
            </div>
        </div>
    </div>
@endsection

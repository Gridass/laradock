@include('layouts.layout')

<body class="single-page">
<div class="wrap-body">
@include('layouts.header-mini')
<!--////////////////////////////////////Container-->
    <section id="container">
        <div class="wrap-container">
            <!-----------------Content-Box-------------------->
            <div id="main-content">
                <div class="wrap-content">
                    <div class="row">
                        <article class="single-post zerogrid">
                            <div class="row wrap-post"><!--Start Box-->
                                <div class="entry-header">
                                    <span class="time">{{$article->created_at}} by {{$article->user_id}}</span>
                                    <h2 class="entry-title"><a href="#">{{$article->title}}</a></h2>
                                    <span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
                                </div>
                                <div class="post-thumbnail-wrap">
                                    <img src="{{ URL::asset('images/1.jpg') }}">
                                </div>
                                <div class="entry-content">
                                    <div class="excerpt"><p>{{$article->description}}</p></div>
                                </div>
                            </div>
                        </article>
                        @include('reviews.create')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--////////////////////////////////////Footer-->
    @include('layouts.footer')
</div>
</body>
@include('layouts.layout')
@include('layouts.header-mini')

@foreach($articles as $article)
<section class="content-box box-style-1 box-4">
    <div class="zerogrid" style="width: 100%">
        <div class="wrap-box"><!--Start Box-->
            <div class="row">
                <article>
                    <div class="col-1-2">
                        <img src="{{ URL::asset('images/slide3.jpg') }}" alt="">
                    </div>
                    <div class="col-1-2">
                        <div class="entry-content t-center">
                            <h3>{{$article->title}}</h3>
                            <p>{{$article->description}}</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endforeach
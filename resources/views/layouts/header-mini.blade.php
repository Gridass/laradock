<?php
$cat = \App\Models\Category::all();
?>
<header class="">
    <div class="logo">
        <a href="/">zVintauge</a>
        <span>Collectible Vintage & Antique Photos</span>
    </div>
    <div id="cssmenu" class="align-center">
        <ul>
            <li class="active"><a href="/"><span>Home</span></a></li>
            <li><a href="/gallery"><span>Gallery</span></a></li>
            <li class="has-sub"><a href="#"><span>Blog</span></a>
                <ul>
                    <?php foreach($cat as $category){?>
                    <?php $c = $category->parent_id;
                    $c = $category->parent_id;
                    ?>
                    <li class="has-sub"><a href="#"><span>{{$category->title}}</span></a>
                        <ul>
                            <li><a href="#"><span>Sub Item</span></a></li>
                            <li class="last"><a href="#"><span>Sub Item</span></a></li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <li><a href="/about"><span>About</span></a></li>
            <li class="last"><a href="/contact"><span>Contact</span></a></li>
        </ul>
    </div>
    <div id="owl-slide" class="owl-carousel">
        {{--<div class="item">
            <img src="{{ URL::asset('images/slide1.jpg') }}" />
        </div>--}}
    </div>
</header>

@extends('front.layoutIndex')

@section('hero')

<section id="hero" class="s-hero">
    <div class="s-hero__slider">

        <div class="s-hero__slide">

            <div class="s-hero__slide-bg" style="background-image: url('images/slide1-bg-3000.png');"></div>

            <div class="row s-hero__slide-content animate-this">
                <div class="">
                    <h1 class="s-hero__slide-text" style="padding-top:10rem;">
                        &#60;The Dark Coder&#62;
                    </h1>
                    <p class="s-hero__slide-text" style="font-size:5rem; padding-left: 16%;">Back-end Developer</p>
                </div>
            </div>

        </div> <!-- end s-hero__slide -->

    </div> <!-- end s-hero__slider -->

    <div class="s-hero__social hide-on-mobile-small">
        <p>MY LINKS</p>
        <span></span>
        <ul class="s-hero__social-icons">
            <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
        </ul>
    </div> <!-- end s-hero__social -->

    <div class="nav-arrows s-hero__nav-arrows">
        <button class="s-hero__arrow-prev">
            <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M1.5 7.5l4-4m-4 4l4 4m-4-4H14" stroke="currentColor"></path></svg>
        </button>
        <button class="s-hero__arrow-next">
           <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M13.5 7.5l-4-4m4 4l-4 4m4-4H1" stroke="currentColor"></path></svg>
        </button>
    </div> <!-- end s-hero__arrows -->
</section> <!-- end s-hero -->

@endsection



@section('main')
<section class="s-content s-content--no-top-padding">
<!-- masonry
        ================================================== -->
        <div class="s-bricks">
            <h1 style="padding-left:4rem;padding-bottom:5rem;">Mes derniers projets</h1>

            <div class="masonry">
                <div class="bricks-wrapper h-group">

                    <div class="grid-sizer"></div>

                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    @foreach($posts as $post)
                    <article class="brick entry" data-aos="fade-up">
    
                        <div class="entry__thumb">
                            <a href="single-standard.html" class="thumb-link">
                                <img src="images/thumbs/masonry/tulips-600.jpg" 
                                     srcset="images/thumbs/masonry/tulips-600.jpg 1x, images/thumbs/masonry/tulips-1200.jpg 2x" alt="">
                            </a>
                        </div>  <!-- end entry__thumb -->
                    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h1 class="entry__title"><a href="single-standard.html">{{$post->title}}</a></h1>
                                
                                <div class="entry__meta">
                                    <span class="byline" style="padding-top: 1rem;">Language:
                                        <span class='author'>
                                            <a>{{$post->language}}</a>
                                        </span>
                                    </span>
                    
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>{{$post->content}}</p>
                            </div>
                            <a class="entry__more-link" href="#0">Read More</a>
                        </div> <!-- end entry__text -->
                    
                    </article> <!-- end article -->
                    @endforeach
                    

                </div> <!-- end brick-wrapper -->

            </div> <!-- end masonry -->

            

        </div> <!-- end s-bricks -->
</section> <!-- end s-content -->
@endsection
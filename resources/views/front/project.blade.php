@extends('front.layout')

@section('title')
    {{$post->title}}
@endsection

@section('content')

<section class="s-content">

    <div class="row">
        <div class="column large-12">

            <article class="s-content__entry format-standard">

                <div class="s-content__media">
                    <div class="s-content__post-thumb">
                        <img src="../images/thumbs/single/single-post-1050.jpg" 
                             srcset="../images/thumbs/single/single-post-2100.jpg 2100w, 
                                     images/thumbs/single/single-post-1050.jpg 1050w, 
                                     images/thumbs/single/single-post-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                    </div>
                </div> <!-- end s-content__media -->

                <div class="s-content__entry-header">
                    <h1 class="s-content__title s-content__title--post">{{$post->title}}</h1>
                </div> <!-- end s-content__entry-header -->

                <div class="s-content__primary">

                    <div class="s-content__entry-content">

                        <p class="lead">{{$post->content}}</p>


                        <blockquote>
                            <p>
                            Demo: <a href="www.google.com">www.google.com</a>
                            </p>
                        </blockquote>

                    </div> <!-- end s-entry__entry-content -->

                    <div class="s-content__entry-meta">

                        <div class="entry-author meta-blk">
                            <div class="author-avatar">
                                <img class="avatar" src="images/avatars/user-06.jpg" alt="">
                            </div>
                            <div class="byline">
                                <span class="bytext" style="padding-bottom: 1rem;">Language</span>
                                <a href="#0">{{$post->language}}</a>
                            </div>
                        </div>

                        <div class="meta-bottom">
                            
                            <div class="entry-cat-links meta-blk">
                                <div class="cat-links">
                                    <span>TeamWork</span> 
                                    <a href="#0">{{$post->teamwork}}</a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- s-content__entry-meta -->

                </div> <!-- end s-content__primary -->
            </article> <!-- end entry -->

        </div> <!-- end column -->
    </div> <!-- end row -->

</section> <!-- end s-content -->

@endsection
@extends('front.layout')

@section('content')

<section class="s-content">

    <div class="row">
        <div class="column large-12">

            <article class="s-content__entry format-standard">

                <div class="s-content__media">
                    <div class="s-content__post-thumb">
                        <img src="images/thumbs/single/single-post-1050.jpg" 
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

                        <p class="lead">
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                        sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                        enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                        magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum 
                        adipisicing aliqua ea nisi sint. Unde quod at minus quia velit ipsa ea qui. </p> 

                        <p>
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                        sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                        enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                        magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum 
                        adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut 
                        laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat 
                        in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                        </p>

                        <p>
                            <img src="images/sample-1050.jpg" 
                                    srcset="images/sample-2100.jpg 2100w, 
                                            images/sample-1050.jpg 1050w, 
                                            images/sample-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                        </p>

                        <p>
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                        sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                        enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                        magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum 
                        adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut 
                        laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat 
                        in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                        </p>

                        <h2>Large Heading</h2>

                        <p>
                        Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta 
                        nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> 
                        id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et 
                        aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

                        <blockquote>
                            <p>
                            Language:
                            Demo: 
                            </p>
                            <cite>John 3:16-17 ESV</cite>
                        </blockquote>

                        <p>
                        Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores 
                        et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. 
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit 
                        libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat 
                        occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

                        <h3>Smaller Heading</h3>

                        <p>
                        Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est 
                        eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
                        assumenda est, omnis dolor repellendus.
                        </p>

                        <p>
                        Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est 
                        eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
                        assumenda est, omnis dolor repellendus.
                        </p>
                        
<pre><code class="language-css">
code {
    font-size: 1.4rem;
    margin: 0 .2rem;
    padding: .2rem .6rem;
    white-space: nowrap;
    background: #F1F1F1;
    border: 1px solid #E1E1E1;	
    border-radius: 3px;
}
</code></pre>
                            
                        <p>
                        Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et 
                        quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>

                        <ul>
                            <li>Donec nulla non metus auctor fringilla.
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </li>
                            <li>Donec nulla non metus auctor fringilla.</li>
                            <li>Donec nulla non metus auctor fringilla.</li>
                        </ul>

                        <p>
                        Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas 
                        molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. 
                        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue 
                        laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing 
                        in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                        </p>

                    </div> <!-- end s-entry__entry-content -->

                    <div class="s-content__entry-meta">

                        <div class="entry-author meta-blk">
                            <div class="author-avatar">
                                <img class="avatar" src="images/avatars/user-06.jpg" alt="">
                            </div>
                            <div class="byline">
                                <span class="bytext">Posted By</span>
                                <a href="#0">John Doe</a>
                            </div>
                        </div>

                        <div class="meta-bottom">
                            
                            <div class="entry-cat-links meta-blk">
                                <div class="cat-links">
                                    <span>In</span> 
                                    <a href="#0">Frontend</a>
                                    <a href="#0">Design</a>
                                    <a href="#0">Work</a>
                                </div>

                                <span>On</span>
                                Oct 5, 2020
                            </div>

                            <div class="entry-tags meta-blk">
                                <span class="tagtext">Tags</span>
                                <a href="#">orci</a>
                                <a href="#">lectus</a>
                                <a href="#">varius</a>
                                <a href="#">turpis</a>
                            </div>

                        </div>

                    </div> <!-- s-content__entry-meta -->

                    <div class="s-content__pagenav">
                        <div class="prev-nav">
                            <a href="#" rel="prev">
                                <span>Previous</span>
                                Tips on Minimalist Design 
                            </a>
                        </div>
                        <div class="next-nav">
                            <a href="#" rel="next">
                                <span>Next</span>
                                A Practical Guide to a Minimalist Lifestyle.
                            </a>
                        </div>
                     </div> <!-- end s-content__pagenav -->

                </div> <!-- end s-content__primary -->
            </article> <!-- end entry -->

        </div> <!-- end column -->
    </div> <!-- end row -->

</section> <!-- end s-content -->

@endsection
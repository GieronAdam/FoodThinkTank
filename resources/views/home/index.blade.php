@extends('layouts.app')
@section('content')
    <section class="seo__banner container">
        <h2 class="seo__banner-title">
            Home to the ultimate life of minimalism in design, travel, and well-being. Ingredients to live a simple,
            focused, well-curated, and meaningful life.
        </h2>
    </section>

    <section class="post__listing three-column ">
        <h3>Latest Posts</h3>
        <p>
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultrices justo metus.
        </p>
        <div class="post__listing-content container">


            @foreach($posts as $post)
                <article class="blog-item selector-padding column-3">
                    <div class="post-thumb">
                        <a href="http://mandala3.themesawesome.com/vivamus-pulvinar-urna-nec-ipsum-interdum-blandi/"
                           title="Vivamus pulvinar urna nec ipsum interdum blandi">
                            <img src="/images/{{$post->photo->file}}" alt="Vivamus pulvinar urna nec ipsum interdum blandi">
                            {{--<div class="overlay"></div>--}}
                        </a>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <div class="meta-wrapper clearfix">
                            <span class="author">
                                <span class="author-separator">by</span> <span class="vcard">
                                    <a href="http://mandala3.themesawesome.com/author/danielzedda/">{{$post->user->name}}</a>
                                </span>
                            </span>
                                <span class="date">
                                <span>posted on</span>
                                    <a href="http://mandala3.themesawesome.com/vivamus-pulvinar-urna-nec-ipsum-interdum-blandi/"> <span><?php echo date('M d Y', strtotime($post->created_at));?></span></a>
                            </span>
                                <span class="standard-post-categories">
                                <a href="http://mandala3.themesawesome.com/category/art/" rel="category tag">{{$post->category->name}}</a>
                            </span>
                            </div>
                            <h2 class="post-title">
                                <a href="http://mandala3.themesawesome.com/vivamus-pulvinar-urna-nec-ipsum-interdum-blandi/">
                                    {{$post->title}}
                                </a>
                            </h2>
                            <div class="post-text">
                                <p>{{str_limit($post->body,160)}}</p>
                            </div>
                            <a href="http://mandala3.themesawesome.com/vivamus-pulvinar-urna-nec-ipsum-interdum-blandi/"
                               class="read-more"> Continue Reading </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@stop
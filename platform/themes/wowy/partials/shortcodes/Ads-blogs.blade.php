<?php
$posts = DB::table('posts')->where('status', 'published')->get();
// dd($posts);
?>

<!-- BREADCRUMB SECTION END -->

<!-- BLOG SECTION START -->
<section class="ul-blogs ul-section-spacing">
    <div class="ul-container wow animate__fadeInUp">
        <!-- section heading -->
        <div class="ul-section-heading">
            <div class="left">
                <span class="ul-section-sub-title">Latest Blog</span>
                <h2 class="ul-section-title">Our Latest Blog</h2>
            </div>

            <div class="right">
                <a href="{{ url('blog') }}" class="ul-btn ul-blogs-heading-btn">View All Blogs</a>
            </div>
        </div>


        @if ($posts->count() > 0)
            <div class="row row-cols-lg-2 row-cols-1 ul-bs-row">

                <!-- Big Blog (First Post) -->
                <div class="col">
                    <div class="ul-blog-wrapper">
                        <div class="ul-blog">
                            <div class="ul-blog-img">
                                <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($posts[0]->name)))) }}">
                                    <img src="{{ RvMedia::getImageUrl($posts[0]->image, null, false, asset('images/no-image.png')) }}"
                                        alt="{{ $posts[0]->name }}">
                                </a>
                            </div>
                            <div class="ul-blog-txt">
                                <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($posts[0]->name)))) }}"
                                    class="ul-blog-title">
                                    {!! $posts[0]->name !!}
                                </a>
                                <p class="ul-blog-excerpt">
                                    {{ Str::limit(strip_tags($posts[0]->description), 200) }}
                                </p>
                                <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($posts[0]->name)))) }}" class="ul-blog-btn">
                                    Read More <span class="icon"><i class="flaticon-aro-left"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Blogs -->
                <div class="col">
                    <div class="ul-blog-wrapper">

                        @foreach ($posts->skip(1)->take(2) as $post)
                            <div class="ul-blog ul-blog-horizontal">
                                <div class="ul-blog-img">
                                    <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($posts[0]->name)))) }}">
                                        <img src="{{ RvMedia::getImageUrl($post->image, null, false, asset('images/no-image.png')) }}"
                                            alt="{{ $post->name }}" style="border-radius: 24px;">
                                    </a>
                                </div>
                                <div class="ul-blog-txt">
                                    <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($post->name)))) }}"
                                        class="ul-blog-title">
                                        {!! $post->name !!}
                                    </a>
                                    <p class="ul-blog-excerpt">
                                        {{ Str::limit(strip_tags($post->description), 120) }}
                                    </p>
                                    <a href="{{ url('blogs/' . Str::slug(str_replace('&', '', html_entity_decode($post->name)))) }}"
                                        class="ul-blog-btn">
                                        Read More <span class="icon"><i class="flaticon-aro-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        @endif

    </div>
</section>
<!-- BLOG SECTION END -->

@php
    $urlCurrent = URL::current();
    $children->loadMissing(['slugable', 'activeChildren:id,name,parent_id', 'activeChildren.slugable']);

@endphp

@if ($category->activeChildren->count())


   
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('themes/wowy/ads/images/bg/breadcrumb-bg-01.png') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title"> {!! $category->name ?? 'Subcategories' !!}</h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ BaseHelper::getHomepageUrl() }}">Home</a></span></li>
                                    <li><span><a href="{{ url('products') }}">Products</a></span></li>
                                    <li><span> {!! $category->name ?? 'Subcategories' !!}</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" id="intro">
        <div class="row align-items-center">

            <div class="col-lg-12 py-lg-5 pt-15 ">

                <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                    style="animation-delay: 400ms;">
                    <div style="text-align: center;">
                        {{-- {!! $category->description ?? 'No Data' !!} --}}
                           <div class="service-description" style="text-align:center;    font-size: 22px;margin-bottom: 10px;">
                        {!! $category->shortdescription?? 'No Data' !!}
                    </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- @if ($servicescategories->isNotEmpty()) --}}
    <!-- News -->
    <section class="rs-team-area section-space rs-team-one">
        <div class="container">
            <div class="row g-5">

                @if ($children->isNotEmpty())
                    @foreach ($children as $post)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="rs-team-item">

                                {{-- Image --}}
                                <div class="rs-team-thumb has-clip">
                                    <a href="{{ $post->url }}">
                                        <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="{{ $post->name }}">
                                    </a>
                                </div>

                                {{-- Content --}}
                                <div class="rs-team-content-wrapper">
                                    <div class="rs-team-content-box">
                                        <h5 class="rs-team-title">
                                            <a href="{{ $post->url }}" style="text-transform: capitalize;">
                                                {!! $post->name !!}
                                            </a>
                                        </h5>

                                        <span class="rs-services-desc">
                                            {{-- {!! \Illuminate\Support\Str::limit(strip_tags(str_replace('&nbsp;', ' ', $post->description)), 90) !!} --}}
                                            {!! $post->description !!}
                                        </span>
                                        <div class="rs-blog-tag has-theme-blue">
                                            <a class="rs-btn has-theme-blue has-bg has-icon"
                                                href="{{ $post->url }}">Read More
                                                <span class="icon-box">
                                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p class="text-muted font-weight-bold">No data available</p>
                    </div>
                @endif

            </div>
        </div>
    </section>
@else
    {{-- @include(Theme::getThemeNamespace() . '::views.templates.servicesposts', [
    'children' => $category->activeChildren->where('parent_id', $category->id)
]) --}}
    <?php
    
    $postIds = DB::table('post_categories')->where('category_id', $category->id)->pluck('post_id'); // Get only post IDs as an array
    
    // Fetch posts that match the retrieved post IDs
    $posts = DB::table('productsposts')->whereIn('id', $postIds)->get();
    // dd($posts);
    // $slug = DB::table('slugs')->whereIn('reference_id', $postIds)->where('reference_type', 'Botble\Services\Models\Post')->get();
    // dd($slugs);
    $servicescategories = DB::table('productscategories')->where('id', $category->id)->get();
    // dd($servicescategories);
    ?>
    @include(Theme::getThemeNamespace() . '::views.templates.servicesposts',
        compact('posts', 'servicescategories'))

@endif
<style>
    p {
        font-size: 18px;
    }

    .section-space {
        padding-top: 0px;
        padding-bottom: 60px;
    }
</style>
<style>
    .rs-services-desc {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 👈 only 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.6em;
        /* optional – spacing better lage */
        max-height: calc(1.6em * 3);
    }
</style>
<style>
.service-description p {
    font-size: 21px;
}
</style>
{{-- @endif --}}

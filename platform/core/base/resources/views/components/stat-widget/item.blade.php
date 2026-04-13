@props(['label', 'value' => 0, 'icon' => null, 'url' => null, 'color' => 'primary', 'column' => null])

@php
    $tag = $url ? 'a' : 'div';

    $classes = Arr::toCssClasses([
        'text-white d-block rounded position-relative overflow-hidden text-decoration-none',
        "bg-$color" => !str_contains($color, '#'),
    ]);

    Assets::addScripts(['counterup']);

@endphp
<style>
    /* @media (min-width: 992px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 20% !important;
    }
} */
</style>
<?php
$servicesposts = DB::table('servicesposts')->select('name')->distinct()->get();
?>
{{-- <div class="col dashboard-widget-item col-12 col-md-6 col-lg-2">
  
    <div class="d-flex justify-content-between align-items-center" style="background-color: rgb(18, 128, 245);">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="color: #fff;">
            <div class="desc fw-medium">Services</div>
            <div class="number fw-bolder">
                <span data-counter="counterup">{{ count($servicesposts) }}</span>
            </div>
        </div>
        
    </div>
    </{{ $tag }}>
</div> --}}

<?php
$servicescategories = DB::table('projectsposts')->select('name')->distinct()->get();

?>

<div class="col dashboard-widget-item col-12 col-md-6 col-lg-3" style="background-color: rgb(18, 128, 245);">
    {{-- <{{ $tag }}
        {{ $attributes->merge([
            'class' => $classes,
            'href' => $url,
        ]) }}
        @if (str_contains($color, '#'))
            style="background-color: {{ $color }}"
        @endif
    > --}}
    <div class="d-flex justify-content-between align-items-center">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="color: #fff;">
            <div class="desc fw-medium">Projects</div>
            <div class="number fw-bolder">
                <span>{{ count($servicescategories) }}</span>
            </div>
        </div>

    </div>
    </{{ $tag }}>
</div>
<?php
$posts = DB::table('posts')->select('name')->distinct()->get();
?>

<div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
    {{-- <{{ $tag }}
        {{ $attributes->merge([
            'class' => $classes,
            'href' => $url,
        ]) }}
        @if (str_contains($color, '#'))
            style="background-color: {{ $color }}"
        @endif
    > --}}
    <div class="d-flex justify-content-between align-items-center" style="background-color: rgb(18, 128, 245);">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="    color: #fff;">
            <div class="desc fw-medium">Blogs</div>
            <div class="number fw-bolder">
                <span>{{ count($posts) }}</span>
            </div>
        </div>

    </div>
    </{{ $tag }}>
</div>

<?php
$solution = DB::table('faqs')->get();
?>

<div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
  
    <div class="d-flex justify-content-between align-items-center" style="background-color: rgb(18, 128, 245);">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="    color: #fff;">
            <div class="desc fw-medium">Plots</div>
            <div class="number fw-bolder">
                <span>{{ count($solution) }}</span>
            </div>
        </div>

    </div>
    </{{ $tag }}>
</div>

<?php
$faqs = DB::table('faqs')->get();
?>

{{-- <div class="col dashboard-widget-item col-12 col-md-6 col-lg-2">
   
    <div class="d-flex justify-content-between align-items-center" style="background-color: rgb(18, 128, 245);">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="    color: #fff;">
            <div class="desc fw-medium">FAQ</div>
            <div class="number fw-bolder">
                <span>{{ count($faqs) }}</span>
            </div>
        </div>

    </div>
    </{{ $tag }}>
</div> --}}
<?php
$solution = DB::table('contacts')->select('name')->distinct()->get();
?>

<div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
    {{-- <{{ $tag }}
        {{ $attributes->merge([
            'class' => $classes,
            'href' => $url,
        ]) }}
        @if (str_contains($color, '#'))
            style="background-color: {{ $color }}"
        @endif
    > --}}
    <div class="d-flex justify-content-between align-items-center" style="background-color: rgb(18, 128, 245);">
        <div class="details px-4 py-3 d-flex flex-column justify-content-between" style="    color: #fff;">
            <div class="desc fw-medium">Contact Us</div>
            <div class="number fw-bolder">
                <span>{{ count($solution) }}</span>
            </div>
        </div>

    </div>
    </{{ $tag }}>
</div>

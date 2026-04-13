<div class="mb-3">
    <label class="form-label">Slide Shadow Title</label>
    <input type="text" name="slideshadowtitle" value="{{ Arr::get($attributes, 'slideshadowtitle') }}" class="form-control" placeholder="Slide Shadow Title">
</div>
<div class="mb-3">
    <label class="form-label">Sub Title</label>
    <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" placeholder="Sub Title">
</div>
<div class="mb-3">
    <label class="form-label">Slide Title</label>
    <input type="text" name="slidetitle" value="{{ Arr::get($attributes, 'slidetitle') }}" class="form-control" placeholder="Slide title">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <textarea name="description" class="form-control " placeholder="description">{{ Arr::get($attributes, 'description') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Description2') }}</label>
    <textarea name="description2" class="form-control " placeholder="description Second ">{{ Arr::get($attributes, 'description2') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Description3') }}</label>
    <textarea name="description3" class="form-control " placeholder="description Third ">{{ Arr::get($attributes, 'description3') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Icon') }}</label>
    {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Icon2') }}</label>
    {!! Form::mediaImage('icon2', Arr::get($attributes, 'icon2')) !!}
</div>
{!! Theme::partial('shortcodes.includes.autoplay-settings', compact('attributes')) !!}
 
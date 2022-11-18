<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    {!! Form::input('text', 'title', Arr::get($attributes, 'title'), ['class' => 'form-control']) !!}
    <label class="control-label">Limit</label>
    <input type="number" name="limit" data-shortcode-attribute="limit" class="form-control" />


    <label class="control-label">{{ __('Select a category') }}</label>
    <select name="category_id" class="form-control" data-shortcode-attribute="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

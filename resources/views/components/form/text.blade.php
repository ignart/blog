<div class="form-group">
    <label>{{ $label }}</label>
    <input class="form-control" type="text" name="{{ $name }}" value="{{ old($name, $value ?? '') }}">
    @if ($errors->has($name))
    <small class="text-danger">
        {{ $errors->first($name) }}
    </small>
    @endif
</div>
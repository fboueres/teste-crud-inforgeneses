<div class="form-group validated">
    <label for="title" class="col-form-label"><strong>Título da Tarefa</strong></label>
    <div>
        <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" name="title" value="{{ old('title', @$task->title) }}" required>
        @if($errors->has('title'))
            <div class="invalid-feedback">
                {{ $errors->first('title') }}
            </div>
        @endif
    </div>
</div>
<div class="form-group validated">
    <label for="description" class="col-form-label"><strong>Descrição da Tarefa</strong></label>
    <div>
        <textarea name="description" class="form-control @if($errors->has('description')) is-invalid @endif">{{ old('description', @$task->description) }}</textarea>
        @if($errors->has('description'))
            <div class="invalid-feedback">
                {{ $errors->first('description') }}
            </div>
        @endif
    </div>
</div>
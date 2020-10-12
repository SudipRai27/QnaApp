@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Enter title" value="{{ old('title', $question->title) }}">
    @error('title')
        <div class="invalid-feedback">
            <strong>{{ $errors->first('title') }}</strong>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="question-body">Explain your question</label>
    <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="10" placeholder="Explain">{{ old('body', $question->body) }}</textarea>
    @error('body')
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-success">{{ $buttonText }}</button>
</div>

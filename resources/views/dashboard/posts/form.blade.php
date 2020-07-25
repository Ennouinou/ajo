<div class="my-fieldset bgwo">
    <legend class="purple">Article : </legend>
    <div class="form-group">
        <label for="title" class="blue">Title:</label>
        <input class="form-control" type="text" id="title" name="title"
               value="{{ old('title',$post->title ?? null) }}" required>
    </div>
    <div class="form-group">
        <label for="description" class="blue">Description:</label>
        <textarea class="form-control" type="text" name="description" id="description" required>{{old('content',$post->description ?? null)}}</textarea>
    </div>
</div>



@if ($errors->any())
    <div class="my-fieldset bg-danger mt-2 mb-2">
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-white">{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<div class="my-fieldset bgwo">
    <legend class="purple">Article : </legend>
    <div class="form-group">
        <label for="title" class="blue">Title:</label>
        <input class="form-control" type="text" id="title" name="title"
               value="{{ old('title',$post->title ?? null) }}" required>
    </div>
    <div class="form-group">
        <label for="description" class="blue">Description:</label>
        <textarea class="form-control" rows="10" type="text" name="description" id="description" required>{{old('description',$post->description ?? null)}}</textarea>
    </div>
</div>



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
    <legend class="purple">Evenement : </legend>
    <div class="form-group">
        <label for="title" class="blue">Titre:</label>
        <input class="form-control" type="text" id="title" name="title"
               value="{{ old('title',$event->title ?? null) }}" required>
    </div>
    <div class="form-group">
        <label for="description" class="blue">Description:</label>
        <textarea class="form-control" rows="10"  name="description" id="description" required>{{old('description',$event->description ?? null)}}</textarea>
    </div>
</div>
<div class="my-fieldset bgwo mt-4 ">
    <legend class="purple">Details :</legend>
    <div class="form-group d-flex">
        <div class="col-md-6">
            <label for="activities" class="blue">Activité:</label>
            <select name="activities" id="activities" class="form-control">
                <option value="Formations">Formations</option>
                <option value="Activités Sociales">Activités Sociales </option>
                <option value="Activités Cultureles">Activité Cultureles</option>
                <option value="Activités Artistiques">Activités Artistiques</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="date" class="blue">Jour/Heure:</label>
            <input type="datetime-local" class="form-control" name="date" value="{{ old('date',$event->date ?? null) }}">
        </div>
    </div>
</div>

<div class="my-fieldset bgwo">
    <legend class="purple">Evenement : </legend>
    <div class="form-group">
        <label for="title" class="blue">Titre:</label>
        <input class="form-control" type="text" id="title" name="title"
               value="{{ old('title',$event->title ?? null) }}" required>
    </div>
    <div class="form-group">
        <label for="description" class="blue">Description:</label>
        <textarea class="form-control" type="text" name="description" id="description" required>{{old('content',$event->description ?? null)}}</textarea>
    </div>
</div>
<div class="my-fieldset bgwo mt-4">
    <legend class="purple">Details :</legend>
    <div class="form-group d-flex">
        <div class="col-md-4">
            <label for="">Activité:</label>
            <select name="activities" id="activities" class="form-control">
                <option value="Formations">Formations</option>
                <option value="Formations">Activité </option>
                <option value="Formations">Formations</option>
                <option value="Formations">Formations</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Jour:</label>
            <input type="date" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="">Heure:</label>
            <input type="time" class="form-control">
        </div>
    </div>
</div>



<?php $todo_available = isset($todo) ? true :  false;?>
{{csrf_field()}}
    <div class="form-group">
        <label for="name"> Name</label>
        <input type="text" class="form-control" placeholder="Eg.John Doe" id="name" name="name"
            data-rule-maxlength="50" data-rule-minlength="3" required=""
            value="{{$todo_available ? $todo->name : old('name')}}">
        <span class="error-display"><i style='color: red;'> {!! $errors->first('name') !!} </i></span>
        <label for="name"> designation</label>
        <input type="text" class="form-control" placeholder="Eg.ceo" id="degnitation" name="designation"
            data-rule-maxlength="50" data-rule-minlength="3" required=""
            value="{{$todo_available ? $todo->name : old('name')}}">
        <span class="error-display"><i style='color: red;'> {!! $errors->first('name') !!} </i></span>
    </div>
	
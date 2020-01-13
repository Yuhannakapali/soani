<?php $newteam_available = isset($newteam) ? true :  false;?>
{{ csrf_field() }}
<div class="form-group">
    <div>
        <label for="name"> Name</label>
    <input
        type="text"
        class="form-control"
        placeholder="Eg.John Doe"
        id="name"
        name="name"
        data-rule-maxlength="50"
        data-rule-minlength="3"
        required=""
        value="{{$newteam_available ?? '' ? $newteam->name : old('name')}}"
    />
    </div>
    <div>
        <label for="designation"> designation</label>
        <input
            type="text"
            class="form-control"
            placeholder="Eg. Managing director"
            id="designation"
            name="designation"
            data-rule-maxlength="50"
            data-rule-minlength="3"
            required=""
            value="{{$newteam_available ?? '' ? $newteam->designation: old('designation')}}"
        />
    </div>
   
    <div>
        <label for="file">Choose a file</label>
        <input type="file" name="file">

    </div>
       

    <span class="error-display">
        <i style="color: red;"> {!! $errors->first('image_name') !!} </i>
    </span>
    
</div>

<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
<div class="form-group">
    <div>
        <label for="name"> Name</label>
    <input
        type="text"
        class="form-control"
        placeholder="Eg. NTC"
        id="name"
        name="name"
        data-rule-maxlength="50"
        data-rule-minlength="3"
        required=""
        value="{{$member_available ?? '' ? $member->name : old('name')}}"
    />
    </div>
    <div>
        <label for="name"> Url</label>
    <input
        type="text"
        class="form-control"
        placeholder=" plain url to project "
        id="url"
        name="url"
        data-rule-maxlength="50"
        data-rule-minlength="3"
        required=""
        value="{{$member_available ?? '' ? $member->url : old('url')}}"
    />
    </div>
   
    <div>
        <label for="file">Choose a file</label><br>
        <input type="file" name="file">

    </div>
       
   
      
    <span class="error-display">
        <i style="color: red;"> {!! $errors->first('image_name') !!} </i>
    </span>
    
</div>
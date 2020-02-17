<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
<div class="form-group">
    <div>
        <label for="name"> Title</label>
    <input
        type="text"
        class="form-control"
        placeholder="Enter title"
        id="title"
        name="title"
        data-rule-maxlength="50"
        data-rule-minlength="3"
        required=""
        value="{{$member_available ?? '' ? $member->title : old('title')}}"
    />
    </div>
    <div>
        <label for="body"> Body</label>
        <textarea 
        class="form-control"
         id="body"
         name="body"
         rows="20"
         >
         {{$member_available ?? '' ? $member->body : old('body')}}
        </textarea>
    </div> 
   <br>    
    <div>
        <label for="file">Choose a Title image</label> <br>
        <input type="file" name="file">
    </div>
       
   
      
    <span class="error-display">
        <i style="color: red;"> {!! $errors->first('image_name') !!} </i>
    </span>
    
</div>
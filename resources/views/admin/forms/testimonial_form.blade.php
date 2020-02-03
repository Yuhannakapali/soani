<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
<div class="form-group">
    <div>
        <label for="name"> Name</label>
        <input
            type="text"
            class="form-control"
            placeholder="Eg. Jhon Doe"
            id="name"
            name="name"
            data-rule-maxlength="50"
            data-rule-minlength="3"
            required=""
            value="{{$member_available ?? '' ? $member->name : old('name')}}"
        />
    </div>
    <div>
        <label for="Designation"> Designation</label>
        <input
            type="text"
            class="form-control"
            placeholder="Eg. CTO"
            id="designation"
            name="designation"
            data-rule-maxlength="50"
            data-rule-minlength="3"
            required=""
            value="{{$member_available ?? '' ? $member->designation : old('designation')}}"
        />
    </div>
    <div>
        <label for="message"> Message</label>
        <textarea 
        class="form-control"
         id="message"
         name="message"
         rows="4"
         
         >
         {{$member_available ?? '' ? $member->message : old('messsage')}}
        </textarea>
    {{-- <input
        type="text"
        class="form-control"
        placeholder="Eg. mtc.com.np"
        id="message"
        name="message"
        data-rule-maxlength="10"
        data-rule-minlength="3"
        required=""
        value="{{$member_available ?? '' ? $member->url : old('messsage')}}"
    /> --}}
    </div>
    
    <div>
        <label for="file">Choose a image file</label><br>
        <input type="file" name="file">

    </div>
    <span class="error-display">
        <i style="color: red;"> {!! $errors->first('image_name') !!} </i>
    </span>
    
</div>
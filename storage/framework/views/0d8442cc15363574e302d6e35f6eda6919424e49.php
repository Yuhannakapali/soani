<?php $member_available = isset($member) ? true :  false;?>
<?php echo e(csrf_field()); ?>

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
        value="<?php echo e($member_available ?? '' ? $member->name : old('name')); ?>"
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
            value="<?php echo e($member_available ?? '' ? $member->designation: old('designation')); ?>"
        />
    </div>
   
    <div>
        <label for="file">Choose a file</label><br>
        <input type="file" name="file">

    </div>
       
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="checker" value="1">
        <label class="form-check-label" for="checker">Board memeber</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="checker1" value="1">
        <label class="form-check-label" for="checker">Executive Team</label>
      </div>
      
    <span class="error-display">
        <i style="color: red;"> <?php echo $errors->first('image_name'); ?> </i>
    </span>
    
</div>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/forms/ourteam_form.blade.php ENDPATH**/ ?>
<?php echo e(csrf_field()); ?>

<div class="col-lg-6 col-sm-12 mb-3">
    <div class="form-group">
        <label class="mb-2">Name</label>
        <input
            type="text"
            name="name"
            class="form-control"
            id="name"
            placeholder="Your Name"
        />
    </div>
</div>
<div class="col-lg-6 col-sm-12 mb-3">
    <div class="form-group">
        <label class="mb-2">Phone</label>
        <input
            type="text"
            name="phone"
            class="form-control"
            id="phone"
            placeholder="Your phone number"
        />
    </div>
</div>
<div class="col-lg-12 col-sm-12 mb-3">
    <div class="form-group">
        <label class="mb-2">Email</label>
        <input
            type="text"
            name="email"
            class="form-control"
            id="email"
            placeholder="Your Email"
        />
    </div>
</div>
<div class="col-lg-12 col-sm-12 mb-3">
    <div
        class="form-group section-field textarea wow fadeInUp"
        data-wow-duration="2.5s"
    >
        <label class="mb-2">Message</label>
        <textarea
            class="input-message w-100"
            name="message"
            id="message"
            placeholder="Type Your Message Here"
            rows="5"
        ></textarea>
    </div>
    
    <div class="col-md-12">
        <button
            
    
            type="submit"
            value="Create"
            class="button pull-right wow fadeInUp mt-3"
            data-wow-duration="1.0s"
        >
            Send Message
        </button>
    </div>
    
</div>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/form/contactus_form.blade.php ENDPATH**/ ?>
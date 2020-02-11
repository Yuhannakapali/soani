<section class="iq-about">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="about-manu text-center">
                    <li class="d-inline"><a href="#values" class="active">Our Values</a></li>
                    <li class="d-inline"><a href="#partners">Our Projects</a></li>
                    <li class="d-inline"><a href="#team">Our Team</a></li>
                    
                </ul>
                <div class="about-content mt-5">
                    <div id="values" class="mb-0">
                        <div class="row mt-5 pt-3">
                            <div class="col-lg-6 col-md-12">
                                <div class="title-box">
                                    <h2 class="title-light text-dark">Our Company <span>Core Values</span></h2>
                                </div>
                                <p class="mt-4 text-center "><strong>  To Innovation and Excellence.  </strong></p>
                                <p class="mt-4">
                                    We are a team of Computer Engineers and Developers from different parts of Nepal,
                                    who are always eager to work on new technologies and present users with innovative products.
                                    SoAni Tech was established with the vision to digitalize Nepal.
                                </p>
                                <p class="mt-4">
                                    We are professional software development company based in Kathmandu Valley. Using the cutting edge technologies for software development, mobile apps and websites.
                                    We make sure our products run in every widely used gadget and browser. With all our enthusiasm and passion,
                                    we have been constantly striving to provide our customers with the best digital experience. We have been utilizing our years of experience and extensive knowledge in each step for every project. From critical planning, and innovative design to outstanding construction and support,
                                    we assure you that we are an ideal partner for your project.
                                </p>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-8 col-md-8 col-sm-12 ">
                                  <div class="aboutmapouter">
                                    <div class="gmap_canvas">
                                    <img src="<?php echo e(asset('images/services/stn.gif')); ?>" alt="">
                                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mt-5">
                                <div class="title-box">
                                    <h3 class="title-light text-dark">Long Term <span> Company Goal</span>
                                    </h3>
                                </div>
                                <p class="mt-2">We are Group aof engineers and Devlopers with a common goal.</p>
                                <ul class="iq-list mt-4">
                                    <li class="mt-4"> 
                                        To Digitailize Nepal.
                                    </li>
                                    <li class="mt-4">
                                        To Create Digital Books
                                    </li>
                                    <li class="mt-4">
                                        To Maintain The Database And Mine Them.
                                    </li>
                                    <li class="mt-4">
                                        To provide different software solutions and mobile applications.
                                    </li>
                        
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-5">
                                <div class="title-box">
                                    <h3 class="title-light text-dark">Work <span> Culture</span></h3>
                                </div>
                                <p class="mt-2">We are looking for people with following qualities. If you think you have those quality then just mail our Hrm Department.</p>
                                <ul class="iq-list mt-4">
                                    <li class="mt-4">
                                       Cretivity and Inovation
                                    </li>
                                    <li class="mt-4">
                                        Partnership
                                    </li>
                                    <li class="mt-4">
                                        Team work
                                    </li>
                                    <li class="mt-4">
                                        Learning with Obedience
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="partners" class="d-block">
                    <div class="row justify-content-md-center">
                        <?php echo $__env->make('frontend.section.portfoliolist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="p-3">
                            <a class="button grey mt-2" href="/Portfolio" role="button"> View all </a>
                          </div>
                    </div>
                    



                   
                </div>
                <div class="container">
                    <div id="team" class="text-center">
                        <div class="row justify-content-md-center mt-5">
                            <div class="col-lg-8 col-md-12 text-center">
                                <div class="title-box">
                                    <h2 class="title text-dark"><span>Our Core Team</span></h2>
                                    <p class="mt-2">Our team consist of Computer Engineers and Developers from different parts of Nepal</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center mt-5">
                                <div class="col-lg-8 col-md-12 text-center">
                                    <div class="title-box">
                                        <h3 class="title text-dark"><span>Board of Director</span></h3>
                                     
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <?php if(!empty($boards)): ?>
                                <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="team-box mt-5">
                                        <div class="team-img position-relative">
                                            <img class="img-fluid ot-image team-1" src="<?php echo e(asset('images/upload/'.$board->image_name)); ?>" alt="">
                                            
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h5 class="title"><?php echo e($board->name); ?></h5>
                                            <p><?php echo e($board->designation); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?> 
                        </div>
                        <div id="team" class="text-center">
                            <div class="row justify-content-md-center mt-5">
                                <div class="col-lg-8 col-md-12 text-center">
                                    <div class="title-box">
                                        <h3 class="title text-dark"><span>Executive Team</span></h3>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="row">
                            <?php if(!empty($executives)): ?>
                                <?php $__currentLoopData = $executives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $executive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="team-box mt-5">
                                        <div class="team-img position-relative">
                                            <img class="img-fluid ot-image team-1" src="<?php echo e(asset('images/upload/'.$executive->image_name)); ?>" alt="">
                                            
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h5 class="title"><?php echo e($executive->name); ?></h5>
                                            <p><?php echo e($executive->designation); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/section/aboutus.blade.php ENDPATH**/ ?>
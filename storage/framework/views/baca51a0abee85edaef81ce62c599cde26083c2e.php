<aside class="blog-social-sharing">
<?php $__env->startSection('socialSharing'); ?>
  <?php
    $share_url = $share_url ?? url()->full();
    $share_title = $share_title ?? $__env->yieldContent('title');

    $sharing_hrefs = [
      'Pinterest' => 'http://pinterest.com/pin/create/link/?' . http_build_query([ 'url' => $share_url ]),
      'Facebook' => 'https://www.facebook.com/sharer.php?' . http_build_query([ 'u' => $share_url ]),
      'LinkedIn' => 'https://www.linkedin.com/shareArticle?' . http_build_query([ 'mini' => 'true', 'url' => $share_url, 'title' => $share_title ]),
      'Twitter' => 'https://twitter.com/intent/tweet?' . http_build_query([ 'url' => $share_url ]),
      'Google+' => 'https://plus.google.com/share?' . http_build_query([ 'url' => $share_url ]),
      'Tumblr' => 'https://www.tumblr.com/widgets/share/tool?' . http_build_query([ 'canonicalUrl' => $share_url, 'title' => $share_title ]),
      'Reddit' => 'https://reddit.com/submit?' . http_build_query([ 'url' => $share_url, 'title' => $share_title ]),
      'Digg' => 'http://digg.com/submit?' . http_build_query([ 'url' => $share_url ]),
    ];

    $sharing_services = collect(config('blog-sharing.services'))->filter()->map(function($item, $key) use ($sharing_hrefs) {
      return [
        'service_name' => $key,
        'href' => $sharing_hrefs[$key]
      ];
    });
  ?>
  <header>
    <small><?php echo e(trans($blog->transKey('sharing.section_heading'))); ?></small>
  </header>
  <ul aria-label="<?php echo e(trans($blog->transKey('sharing.link_list_title'))); ?>">
    <?php $__currentLoopData = $sharing_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sharing_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->first($blog->bladeViews('blog.partials.socialSharingListItem'), $sharing_service, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
<?php echo $__env->yieldSection(); ?>
</aside>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/blog/socialSharingAside.blade.php ENDPATH**/ ?>
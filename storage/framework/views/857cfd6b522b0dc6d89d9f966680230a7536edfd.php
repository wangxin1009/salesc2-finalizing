<div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                
          <button id="menu-toggle" class="btn btn-primary">
            
            <div style="width:35px; height:5px; background-color:white; margin:6px 0;"></div>
            <div style="width:35px; height:5px; background-color:white; margin:6px 0;"></div>
            <div style="width:35px; height:5px; background-color:white; margin:6px 0;"></div>
           
          </button>
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="dropdown open text-center" style="margin-right: 50px;margin-top: 3px;">
                    <a href="javascript:void(0);" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="true">
                        <i class="material-icons">notifications</i>
                        <span class="label-count" id="notification_count"><?php echo e(\App\Adminnotification::where("is_read", 0)->count()); ?></span>
                    </a>
                    <ul class="dropdown-menu" style="width:350px;background-color:#eee">
                        <li class=""><b>NOTIFICATIONS</b></li><p></p>
                        <li class="body">
                                  <?php $__currentLoopData = \App\Adminnotification::where('is_read',0)->orderBy('updated_at', 'desc')->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                    <div class="media border border-secondary p-0">
                                        <img src="<?php echo e(asset('img/man_notification.png')); ?>" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
                                        <div class="media-body">
                                               <div class="text-primary"><?php echo e($notification->email); ?></div>
                                               <div class="text-success"><?php echo e($notification->message); ?></div>
                                                <div class="text-danger"><?php echo e($notification->updated_at); ?></div>
                                        </div>
                                      </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </li>
                        <li class="">
                            <a href="<?php echo e(route('admin.notifi_all')); ?>" class=" waves-effect waves-block"><b>View All Notifications</b></a>
                        </li>
                    </ul>
                </li>
              <li class="nav-item active" style="padding-right:30px;">
                <a class="nav-link admin-link border border-light rounded text-center" href="<?php echo e(URL::asset('/dashboard')); ?>">Go to Website <span class="sr-only">(current)</span></a>
              </li><p></p>
              
              <li class="nav-item dropdown" style="padding-right:30px;">
                <a class="nav-link admin-link dropdown-toggle text-uppercase text-center border border-light rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  
                </div>
              </li>
            </ul>
          </div>
        </nav>
  <?php /**PATH F:\MyWORK\laravel\resources\views/admin/adminHeader.blade.php ENDPATH**/ ?>
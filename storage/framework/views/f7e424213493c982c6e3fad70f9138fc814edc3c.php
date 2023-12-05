<?php echo $__env->make('admin.admin_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content">
    <div class="main-outer">
        <?php $__currentLoopData = $user_contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="contact-details-inner" style="width: 1000px; height: 300px; border: 2px solid black; margin: 50px; display: flex; align-items: center; justify-content: center">
            <div class="user-details" style="width: 400px; height: 100%; padding: 10px">
                <h3 style="font-size: 30px;">User Contacts</h3>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Name</h2> <span><?php echo e($contact->name); ?></span>
                </div>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Email</h2><span><a href="mailto:<?php echo e($contact->email); ?>"><?php echo e($contact->email); ?></a></span>
                </div>
                <div class="user-details-inner" style="margin: 30px 20px 0 20px">
                    <h2>Phone</h2><span><mark><a href="callto:<?php echo e($contact->phone); ?>"><?php echo e($contact->phone); ?></a></mark></span>
                </div>
            </div>
            <div class="user-message" style="width: 600px; height: 100%;padding: 10px">
                <h3 style="font-size: 30px;">Message</h3>
                <div class="user-message-inner" style="margin: 30px 20px 0 20px;">
                    <h2>Message</h2><p style="text-align: justify"><?php echo e($contact->message); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<?php /**PATH D:\Coviguard\CoviGuard-VaccinationSystem-main\CoviGuard-VaccinationSystem-main\resources\views/admin/user_contacts_view.blade.php ENDPATH**/ ?>
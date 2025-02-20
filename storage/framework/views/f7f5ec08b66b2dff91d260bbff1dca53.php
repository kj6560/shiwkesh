
<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Enquiries</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/enquiries">Enquiries</a></li>
            <li class="breadcrumb-item active">All Enquiries</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-11 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4 class="card-title">Enquiry</h4>

            </div>
            <div class="card-body">
                <!-- Basic Enquiry Information -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> <?php echo e($enquiry->name??""); ?></p>

                        <p><strong>Subject:</strong> <?php echo e($enquiry->subject??""); ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> <?php echo e($enquiry->email??""); ?></p>
                        <p><strong>Date:</strong> <?php echo e($enquiry->created_at??""); ?></p>

                    </div>
                    <div class="col-12">
                        <p><strong>Message:</strong> <?php echo e($enquiry->message??""); ?></p>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\backend\enquiries\view.blade.php ENDPATH**/ ?>
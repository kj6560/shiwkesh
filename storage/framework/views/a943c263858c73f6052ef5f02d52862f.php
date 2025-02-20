<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>General Settings</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Website Settings</a></li>
            <li class="breadcrumb-item active">General Settings</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php if(!empty($setting->id)): ?> Edit <?php else: ?> Create <?php endif; ?> Settings</h5>

                    <!-- General Form Elements -->
                    <form action="/storeGeneralSettings" method="POST" enctype="multipart/form-data">
                        <?php if(!empty($setting->id)): ?>
                        <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Settings Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="settings_name" value="<?php echo e($setting->settings_name??old('settings_name')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Settings Value</label>
                            <div class="col-sm-10">
                                <input type="text" name="settings_value" value="<?php echo e($setting->settings_value??old('settings_value')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="is_active" aria-label="Default select example">
                                    <option selected>Select Status</option>
                                    <option value="1" <?php if(!empty($setting->is_active) && $setting->is_active == 1): ?> selected <?php endif; ?>>Yes</option>
                                    <option value="0" <?php if(!empty($setting->is_active) && $setting->is_active == 0): ?> selected <?php endif; ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>


    </div>
</section>


<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">General Settings</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Settings Name</th>
                                <th scope="col">Settings Value</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($setting->id); ?></th>
                                <td><?php echo e($setting->settings_name); ?></td>
                                <td><?php echo e($setting->settings_value); ?></td>
                                <td><?php echo e($setting->is_active==1 ?"Yes":"No"); ?></td>
                                <td>
                                    <a href="/editGeneralSettings/<?php echo e($setting->id); ?>" class="btn btn-primary">Edit</a>
                                    <a href="/deleteGeneralSettings/<?php echo e($setting->id); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\backend\settings\generalSettings.blade.php ENDPATH**/ ?>
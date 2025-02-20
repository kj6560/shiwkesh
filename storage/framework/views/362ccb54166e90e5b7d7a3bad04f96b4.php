<?php $__env->startSection('content'); ?>
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title">Portfolios</h4>
        <div class="col-sm-12">
          <a class="btn btn-primary" href="/portfolioSettings/create"><i class="fa fa-solid fa-plus"></i>
            New Portfolio</a>
        </div>
      </div>
      <div class="table-responsive text-nowrap" style="margin: 10px;padding: 10px;">
        <table class="table datatable " id="portfolios">
          <thead>
            <tr class="text-nowrap">
              <th>Id</th>
              <th>Client Name</th>
              <th>Work Type</th>
              <th>Active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($portfolio->id); ?></td>
              <td><?php echo e($portfolio->client_name); ?></td>
              <td><?php echo e($portfolio->work_type); ?></td>
              <td><?php echo e($portfolio->is_active ==1 ? "YES":"No"); ?></td>
              <td>
                <a href="/portfolioSettings/edit/<?php echo e($portfolio->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="/portfolioSettings/delete/<?php echo e($portfolio->id); ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\backend\portfolio\index.blade.php ENDPATH**/ ?>
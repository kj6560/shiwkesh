
<?php $__env->startSection('content'); ?>
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title">Blogs</h4>
        <div class="col-sm-12">
          <a class="btn btn-primary" href="/blogSettings/blogs/create"><i class="fa fa-solid fa-plus"></i>
            New Blog</a>
            <a class="btn btn-primary" href="/blogSettings/categories"><i class="fa fa-solid fa-plus"></i>
            Blog Categories</a>
            <a class="btn btn-primary" href="/blogSettings/tags"><i class="fa fa-solid fa-plus"></i>
            Blog Tags</a>
        </div>
      </div>
      <div class="table-responsive text-nowrap" style="margin: 10px;padding: 10px;">
        <table class="table datatable " id="blogs">
          <thead>
            <tr class="text-nowrap">
              <th>Id</th>
              <th>Blog Title</th>
              <th>Blog Category</th>
              <th>Active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- DataTables will fill this dynamically -->
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\backend\blog\index.blade.php ENDPATH**/ ?>
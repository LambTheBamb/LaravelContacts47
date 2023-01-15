<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <h1> Contact Info </h1>
    <div>

        <p> Name: <?php echo e($contact['name']); ?> </p>
         <p> phone: <?php echo e($contact['phone' ]); ?> </p>
         
         
    </div>
    <div>
        <a href=<?php echo e(route('contacts.index')); ?>> Back to All Contacts </a>
    </div>
</body>
</html>-->


<?php $__env->startSection('title', 'Osamas App | Contact Details | ' . $contact['name']); ?>
<?php $__env->startSection('content'); ?>
 <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Contact Details</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo e($contact['name']); ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">Kuhlman</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">alfred@test.com</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Phone</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo e($contact['phone']); ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">Lorem ipsum dolor</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">Company One</p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="#" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                          <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php $__env->stopSection(); ?>;

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/745253.cloudwaysapps.com/ndrmkayhux/public_html/bloggy/resources/views/contacts/show.blade.php ENDPATH**/ ?>
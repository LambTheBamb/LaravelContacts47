<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body> -->



<?php $__env->startSection('title', 'Osamas App | Contact List'); ?>
<?php $__env->startSection('content'); ?>


<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto">
                      <a href=<?php echo e(route('contacts.create')); ?> class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
                <?php echo $__env->make('contacts._filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Company</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>   
                 
                     <?php echo $__env->make('contacts._contactlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p> No Contacts Bruh, plz work</p>
                    <?php endif; ?>
                  </tbody>

                </table> 

                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div>
      
    </div>

<?php $__env->stopSection(); ?>;


<!--</body>
  <a href={ route('contacts.create')}}> Add Contacts </a>

        <p>{ $contact['name'] }} | { $contact['phone'] }} | <a href={ route('contacts.show',$id)}}> Show </a> </p>

    <?php ##<a href={{ route('contacts.show',1)}}> Show Contact </a> ?> 
</html> --> 




 <!--  after filter   <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select">
                          <option value="" selected>All Companies</option>
                          <option value="1">Company One</option>
                          <option value="2">Company Two</option>
                          <option value="3">Company Three</option>
                        </select>
                      </div>
                      <div class="col">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button">
                                  <i class="fa fa-refresh"></i>
                                </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/745253.cloudwaysapps.com/ndrmkayhux/public_html/bloggy/resources/views/contacts/index.blade.php ENDPATH**/ ?>
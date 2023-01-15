 <select class="custom-select">
                          <option value="" selected>All Companies</option>
                          <?php foreach ($companies as $id => $company): ?>
                          <option value="<?php echo e($id); ?>"><?php echo e($company['name']); ?></option>
                            <?php endforeach ?>
</select><?php /**PATH /home/745253.cloudwaysapps.com/ndrmkayhux/public_html/bloggy/resources/views/contacts/_company-selection.blade.php ENDPATH**/ ?>
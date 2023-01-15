    <tr>
                      <th scope="row"> <?php echo e($loop ->iteration /*It can also be $loop -> index or $id which uses the array listing of our own.*/); ?></th>
                      <td><?php echo e($contact['name']); ?></td>
                      <td><?php echo e($contact['phone']); ?></td>
                      <td>alfred@test.com</td>
                      <td>Company one</td>
                      <td width="150">
                        <a href="<?php echo e(route('contacts.show',$id)); ?>" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                      </td>
     </tr><?php /**PATH /home/745253.cloudwaysapps.com/ndrmkayhux/public_html/bloggy/resources/views/contacts/_contactlist.blade.php ENDPATH**/ ?>
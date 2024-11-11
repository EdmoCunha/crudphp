<form action="<?php echo e(url('pokemon/'.$pokemon->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="name" placeholder="Name" value="<?php echo e($pokemon->name); ?>" required>
    <input type="text" name="type" placeholder="Type" value="<?php echo e($pokemon->type); ?>" required>
    <input type="number" name="strenght" placeholder="Strenght" value="<?php echo e($pokemon->strenght); ?>" required>
    <button type="submit">Update Pokemon</button>
</form><?php /**PATH C:\Users\Edmo Cunha\Desktop\repositoriodocker\php-development-environment\www\projeto-web\resources\views/pokemon/edit.blade.php ENDPATH**/ ?>
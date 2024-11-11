<?php $__currentLoopData = $pokemon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h3><?php echo e($entity->name); ?></h3>
        <p><?php echo e($entity->type); ?></p>
        <p><?php echo e($entity->strenght); ?></p>
        <a href="<?php echo e(url('pokemon/'.$entity->id.'/edit')); ?>">Edit</a>
        <form action="<?php echo e(url('pokemon/'.$entity->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Edmo Cunha\Desktop\repositoriodocker\php-development-environment\www\projeto-web\resources\views/pokemon/index.blade.php ENDPATH**/ ?>
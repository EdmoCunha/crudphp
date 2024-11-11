<form action="<?php echo e(url('pokemon')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="number" name="strenght" placeholder="Strenght" required>
    <button type="submit">Create Pokemon</button>
</form>
<?php /**PATH C:\Users\Edmo Cunha\Desktop\repositoriodocker\php-development-environment\www\projeto-web\resources\views/pokemon/create.blade.php ENDPATH**/ ?>
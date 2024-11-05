<form action="<?php echo e(url(path: 'pokemons')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Create Pokemon</button>
</form><?php /**PATH C:\Users\Edmo Cunha\Desktop\repositoriodocker\php-development-environment\www\projeto\resources\views/pokemons/create.blade.php ENDPATH**/ ?>
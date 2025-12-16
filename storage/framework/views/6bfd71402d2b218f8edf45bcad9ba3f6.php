<?xml version="1.0" encoding="UTF-8"?>
<data>
<?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <item>
        <nome><?php echo e($item->nome); ?></nome>
        <data_descoberta><?php echo e($item->data_descoberta); ?></data_descoberta>
        <comestivel><?php echo e($item->comestivel); ?></comestivel>
        <altura_media><?php echo e($item->altura_media); ?></altura_media>
        <quantidade_petalas><?php echo e($item->quantidade_petalas); ?></quantidade_petalas>
        <cor_principal><?php echo e($item->cor_principal); ?></cor_principal>
    </item>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</data>
<?php /**PATH C:\Users\isabe\OneDrive\Desktop\programacao\PWD\Flores\resources\views/data-xml.blade.php ENDPATH**/ ?>
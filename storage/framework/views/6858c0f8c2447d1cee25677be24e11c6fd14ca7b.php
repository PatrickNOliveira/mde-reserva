
<?php $__env->startSection('content'); ?>

    <?php phpinfo(); ?>

    <p><?php echo e($msg ?? ''); ?></p>
    <div class="row">
        <div class="tag-body">
            <div class="tag-border reserva">
                <span class="tag-content">
                    <span class="fa fa-luggage-cart"></span>            
                    <span style="font-size: 16px" class="tag-title">MDE Informática</span><br />
                    <span class="tag-description">+55 11 9999-9999</span>
                    <span class="tag-description">contato@mdeinformatica.com.br</span>                    
                </span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/projetos/mde-reserva/resources/views/home.blade.php ENDPATH**/ ?>
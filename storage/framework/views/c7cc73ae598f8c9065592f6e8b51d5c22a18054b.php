<div class="row">
    <div class="tag-body" style="min-width:220px;">
        <div class="tag-border reserva">
            <span class="tag-content">
                <?php if ($viewModel->hotel()->logo() == null) { ?> 
                    <span class="fa fa-luggage-cart"></span>
                    <span style="font-size: 16px" class="tag-title"><?php echo e($viewModel->hotel()->nome()); ?></span><br />
                <?php } else { ?>
                    <img src="<?php echo e($viewModel->hotel()->logo()); ?>" width="200px" height="200px" alt="Hotel Fradíssimo"><br />            
                <?php } ?>
                <span class="tag-title">Reserva nº</span>
                <span style="font-size: 16px;" class="tag-description"><?php echo e($viewModel->reserva()->numero()); ?></span>
            </span>
        </div>
    </div>

    <?php if ($viewModel->hotel()->fone()) { ?>

    <div class="tag-body">
        <div class="tag-border info">
            <span class="tag-content">
                <span class="fa fa-question-circle"></span>            
                <span class="tag-title">Informações</span><br />
                <span class="tag-description"><?php echo e($viewModel->hotel()->fone()); ?> </span>
                <span class="tag-description"><?php echo e($viewModel->hotel()->email()); ?></span>                    
            </span>
        </div>
    </div>

    <?php } ?>
    
</div><?php /**PATH /mnt/c/projetos/mde-reserva/resources/views/layouts/reserva.blade.php ENDPATH**/ ?>
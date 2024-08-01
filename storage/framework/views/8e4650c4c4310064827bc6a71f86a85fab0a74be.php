
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.reserva', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="adic-info">
        <?php echo e($viewModel->reserva()->AdicInfo); ?>

    </div>
    <div class="row">
        <?php $i=1; ?>
        <?php $__currentLoopData = $viewModel->hospedes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospede): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $semNome = $hospede->semNome() ? 'sem-nome' : ''; ?>
            <div class="tag-body"
                onclick="location.href='/hospede/<?php echo e($viewModel->reserva()->ChaveIdentificacao); ?>/<?php echo e($hospede->NrHospede); ?>/<?php echo e($i); ?>'">
                <div class="tag-border hospede teste <?php echo e($semNome); ?>">
                    <span class="tag-content">
                        <span class="fa fa-user"></span>
                        <span class="tag-title">Hóspede nº <?php echo e($i++); ?></span>
                        <span style="font-size: 16px;" class="tag-description"><?php echo e($hospede->NomeHospede()); ?></span>
                    </span>
                </div>
            </div>
            <!--
            <a href="/mde/hospede/<?php echo e($viewModel->reserva()->NrReserva); ?>/<?php echo e($hospede->Id); ?>"><?php echo e($hospede->Nome); ?></li>
            -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <a class="btn btn-lg btn-secondary" role="button"  href="/reserva/<?php echo e($viewModel->reserva()->ChaveIdentificacao); ?>">
        Voltar
    </a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/projetos/mde-reserva/resources/views/hospedes.blade.php ENDPATH**/ ?>
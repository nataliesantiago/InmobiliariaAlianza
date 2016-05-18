	<?php $__env->startSection('content'); ?>
				
				<div class="info">
				<?php foreach($publications as $publication): ?>
				<time class="published" datetime="2016-05-01"><?php echo e($publication->date_publication); ?></time>
                    <header class="name">
                        <h3 style="color: black;"><?php echo e($publication->name); ?></h3>
                    </header>
                  
                    <?php if($publication->description!=null): ?>
                    <p class="description"><?php echo e($publication->description); ?></p>
                    <?php endif; ?>

                    <p class="publicator">Publicado por: <?php echo e($publication->username); ?></p>
                    <p class="place"><?php echo e($publication->place); ?></p>					
					<p class="start">Fecha de comienzo: <?php echo e($publication->start_date); ?></p>

					<?php if($publication->end_date!=null): ?>
					<p class="end">Fecha final: <?php echo e($publication->end_date); ?></p>
					<?php endif; ?>					
					<?php if($publication->contact!=null): ?>
					<p class="contact">Contacto: <?php echo e($publication->contact); ?></p>
					<?php endif; ?>
					<?php if($publication->position!=null): ?>
					<p class="carge">Cargo: <?php echo e($publication->position); ?></p>
					<?php endif; ?>
					<?php if($publication->category!=null): ?>
					<p class="category">Categoria: <?php echo e($publication->category); ?></p>
					<?php endif; ?>
					

					<a href="<?php echo e($publication->url); ?>" class="link btn-link pull-left"> Abrir link</a>

                <hr class="divition">
				<?php endforeach; ?>
					
				</div>

				<div class="inner">
					<ul class="actions pagination">
					<center><li><?php echo $publications->links(); ?></li></center>
					</ul>
					</div>

	<?php $__env->stopSection(); ?>

				
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
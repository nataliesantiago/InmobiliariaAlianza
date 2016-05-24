	<?php $__env->startSection('content'); ?>

				<div class="span8">
				<?php foreach($publications as $publication): ?>

				<h2 style="color: black;"><?php echo e($publication->name); ?></h2>
				<?php if($publication->description!=null): ?>
					<p style="color: black;"><?php echo e($publication->description); ?></p>
					<?php endif; ?>

					<p style="color: black;">Publicado por <a href="#"><?php echo e($publication->username); ?></a>&nbsp;&#124;&nbsp; <?php echo e($publication->date_publication); ?></p>
					<p style="color: black;"><?php echo e($publication->place); ?></p>					
					<p style="color: black;">Fecha de comienzo: <?php echo e($publication->start_date); ?></p>
					<?php if($publication->end_date!=null): ?>
					<p style="color: black;">Fecha final: <?php echo e($publication->end_date); ?></p>
					<?php endif; ?>					
					<?php if($publication->contact!=null): ?>
					<p style="color: black;">Contacto: <?php echo e($publication->contact); ?></p>
					<?php endif; ?>
					<?php if($publication->position!=null): ?>
					<p style="color: black;">Cargo: <?php echo e($publication->position); ?></p>
					<?php endif; ?>
					<?php if($publication->category!=null): ?>
					<p style="color: black;">Categoria: <?php echo e($publication->category); ?></p>
					<?php endif; ?>
					
					<h4 href="<?php echo e($publication->url); ?>" class="btn btn-link pull-left"> Abrir link original </h4>
						
					</h5>
					

					<hr class="soften">
				<?php endforeach; ?>
					<div class="inner">
					<ul class="actions pagination">
					<center><li><?php echo $publications->links(); ?></li></center>
					</ul>
					</div>
				
				</div>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
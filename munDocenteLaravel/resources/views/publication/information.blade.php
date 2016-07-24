<header class="name">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@if($publication->type==1)
   <h3 style="color: black;"><i class="glyphicon glyphicon-briefcase"></i>  {{ $publication->name }}</h3>
@endif
@if($publication->type==2)
   <h3 style="color: black;"><i class="glyphicon glyphicon-book"></i>  {{ $publication->name }}</h3>
@endif
@if($publication->type==3)
  <h3 style="color: black;"><i class="glyphicon glyphicon-bullhorn"></i>  {{ $publication->name }}</h3>
@endif
</header>
<br>
@if($publication->description!=null)
<p class="description">{{ $publication->description }}</p>
@else
<br>
@endif
<p class="start">Fecha de inicio: <?php echo date('d-M-Y', strtotime($publication->start_date)); ?></p>            
@if($publication->end_date!=null)
<p class="end">Fecha final: <?php echo date('d-M-Y', strtotime($publication->end_date)); ?></p>
@endif          
@if($publication->contact!=null)
<p class="contact">Contacto: {{ $publication->contact }}</p>
@endif
@if($publication->position!=null)
<p class="carge">Cargo: {{ $publication->position }}</p>
@endif
@if($publication->category!=null)
<p class="category">Categoria: {{ $publication->typeScientificMagazine->value }}</p>
@endif
 @if($publication->type==1)
    <p class="category" v><a href="{{ $publication->url }}" class="button alt2"> Abrir convocatoria <i class="glyphicon glyphicon glyphicon-link"></i></a>
</p>
@endif
@if($publication->type==2)
      <p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir revista <i class="glyphicon glyphicon glyphicon-link"></i></a>
</p>
@endif
@if($publication->type==3)
     <p class="category"><a href="{{ $publication->url }}" class="button alt2"> Abrir evento <i class="glyphicon glyphicon glyphicon-link"></i></a>
</p>
@endif
  <hr>
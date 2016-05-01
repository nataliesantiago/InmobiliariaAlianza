

 function crearArea(obj, arrayArea){
  myarray = arrayArea;
  contenedor = document.getElementById('listArea');

  area = document.createElement('select');
  area.className = 'form-control';
  area.required = true;
  area.name = 'area[]';
  for (i in arrayArea) {

  opt = document.createElement('option');
  opt.value = i;
  opt.innerHTML = arrayArea[i];
  area.appendChild(opt);
  }
  contenedor.appendChild(area);
  
}

 function crearArea(areaArray){
  
  contenedor = document.getElementById('listArea');

  area = document.createElement('select');
  area.className = 'form-control';
  area.required = true;
  area.name = 'area[]';
  
  for (i in areaArray) {

  opt = document.createElement('option');
  opt.value = i;
  opt.innerHTML = areaArray[i];
  area.appendChild(opt);
  }
  contenedor.appendChild(area);
  
}
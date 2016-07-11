
 function crearArea(areaArray){
  
  contenedor = document.getElementById('listArea');

  area = document.createElement('select');
  area.className = 'form-control';
  area.required = true;
  area.name = 'area[]';
  area.id = 'selectArea';
  
  for (i in areaArray) {

  opt = document.createElement('option');
  opt.value = i;
  opt.innerHTML = areaArray[i];
  area.appendChild(opt);
  }
  contenedor.appendChild(area);
  
}

function eliminarArea(){
  var textbox = document.getElementById('selectArea');
  textbox.parentNode.removeChild(textbox);
}
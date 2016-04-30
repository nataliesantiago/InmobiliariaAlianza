incremento = 1;
var myarray=new Array(3)
myarray[0] = "Seleccione una opción";
myarray[1] = "Software";
myarray[2] = "Educación";
myarray[3] = "Web";
myarray[4] = "Inglés";
myarray[5] = "Matemáticas";
myarray[6] = "Ingeniería";
myarray[7] = "Medicina";
myarray[8] = "Derecho";

 function crearArea(obj){
  incremento++;

  contenedor = document.getElementById('listArea');

  espacio = document.createElement('br');
  area = document.createElement('select');
  area.className = 'form-control';
  area.required = true;
  area.name = 'area[]';
  for (i in myarray) {
  opt = document.createElement('option');
  opt.value = i;
  opt.innerHTML = myarray[i];
  area.appendChild(opt);
  }
  contenedor.appendChild(espacio);
  contenedor.appendChild(area);
  
}
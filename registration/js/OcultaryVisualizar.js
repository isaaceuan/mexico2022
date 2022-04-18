$(window).ready(function(){
	let botonDia = document.querySelectorAll('.btn_programa');

	for(boton of botonDia){
		boton.addEventListener('click', function(e){
			e.preventDefault();

      let palabra = this.id;
      let id = palabra.replace('ocultar', '');
      let id_format = parseInt(this.id);

      

      let ocultar = document.querySelectorAll('.ocultar_dia');
      for(hide of ocultar){
        hide.style.display='none';
      }

      let mostrar = document.getElementById("dia"+id)
      mostrar.style.display='block';
  

      
		});
	}

  let mostrarTodo = document.getElementById('mostrar_todo');
mostrarTodo.addEventListener('click', function(e){
	e.preventDefault;

	let ocultar = document.querySelectorAll('.ocultar_dia');
	for(hide of ocultar){
	  hide.style.display='block';
	}

});


});
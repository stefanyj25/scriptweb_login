$('#tipo_user').change(function(event){
    var cambiar = $(this).val();

    if(cambiar == 'aprendiz'){
      $('#areaformacion').css('display', 'block');
      $('#areaconocimiento').css('display', 'none');
    }else if (cambiar == 'instructor') {
      $('#areaconocimiento').css('display', 'block');
      $('#areaformacion').css('display', 'none')
    }else if (cambiar == 'seleccionar'){
      $('#areaconocimiento').css('display', 'none');
      $('#areformacion').css('display', 'none')
    }
});
/*$('#pais').change(function(event){
  var cambiar = $(this).val();

  if(cambiar == 'pais1'){
    $('#departamento').css('display','block');
    $('#ciudad').css('display','none');
    $('#corregimiento').css('display','none');
    $('#comuna').css('display','none');
    $('#barrio').css('display','none');

  }else if(cambiar == 'pais2'){
    $('#departamento').css('display','none');
    $('#ciudad').css('display','none');
    $('#corregimiento').css('display','none');
    $('#comuna').css('display','none');
    $('#barrio').css('display','none');
  }
});*/

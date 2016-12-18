$(document).ready(function(){

$("#buscar_mesa").click(function(){
   $("#seleciona_mesa").show("slow"); 
});

  $('#foto_estagiario').bind('change', function() {
    // this.files[0].size gets the size of your file.
    //alert(this.files[0].size);
    var fileName = $(this).val();
    var arrExt = fileName.split('.');
    var position = (arrExt.length)-1;
    var ext = arrExt[position];
    if(ext != 'jpg' || ext.length == 0 ){
      $(this).val('');
      $("#img_fail").slideDown();

    }
    else {
      $("#img_fail").slideUp();
    }
  });

});

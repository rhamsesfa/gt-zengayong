  $(document).ready(function() {
    $("#carousel").waterwheelCarousel({
      // include options like this:
      // (use quotes only for string values, and no trailing comma after last option)
      // option: value,
      // option: value
    });
    $('.item').delay(2000).animate({
    	'opacity':'1'
    });
    $('#formulaire').click(function(){
    	$('#div_main').fadeIn(1000, function(){
        $('#div_main1').fadeOut(500);
      });

    });

    $('#excel').click(function(){
    	$('#div_main').fadeOut(500, function(){
        $('#div_main1').fadeIn(1000);
      });
    });
    $('#autre').click(function(){
    	$('#div_main').fadeOut(500);
      $('#div_main1').fadeOut(500);
    });
    //script de chargement du fichier excel
    $('.label-file').click(function(){
        //$(this).hide();
      
    });
    $('.main').mousemove(function(event){
      //on stocke le nom du fichier importé dans une variable
      var fichier_temp = $('#file').val();
      //on supprime le chemin temporaire de la chaine
      var fichier = fichier_temp.substr(12);
      //alert(fichier);
      if (fichier=='') {
        $('.reset').hide();
      }
      else{
        $('#lab_form').removeClass('label-file').attr("for","");
        $('#choix1').text(fichier);
        $('#choix2').removeClass('glyphicon-file').addClass('glyphicon-remove');
        $('.reset').show();
        $('.import').fadeIn(1000);
      }
    });
    $('.reset').click(function(){
      //on stocke le nom du fichier importé dans une variable
      var fichier_temp = $('#file').val();
      //on supprime le chemin temporaire de la chaine
      var fichier = fichier_temp.substr(12);
      $('#lab_form').addClass('label-file').attr("for","file");
      $('#choix1').text('Choisir un fichier excel');
      $('#choix2').removeClass('glyphicon-remove').addClass('glyphicon-file');
      $(this).hide();
      $('.import').fadeOut(500);
      
    });
    $('.import').click(function(){

      alert($('#file').val());
      /*$.ajax({
        url:"controller/importExcel.php",
        method:"POST",
        data:form_search,
        dataType:"JSON",
        success:function(response, statut){
          //alert('ok');
          if (response.error) {
            
            $('#list_search').html(response.error);
            $('input:not(":button, :submit, :hidden")').val("");
            $('#close_search').click(function(){
              $('#list_search').html('<li class="list-group-item" id="list_search"></li>');
            });
          }
        }
      });*/
      return false;
    });
  });
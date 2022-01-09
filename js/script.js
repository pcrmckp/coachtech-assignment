$('.tab-content>div').hide();
$('.tab-content>div').first().slideDown();
  $('.tab-buttons span').click(function(){
    var thisclass=$(this).attr('class');
    $('#lamp').removeClass().addClass('#lamp').addClass(thisclass);
    $('.tab-content>div').each(function(){
      if($(this).hasClass(thisclass)){
        $(this).fadeIn(800);
      }
      else{
        $(this).hide();
      }
    });
  });

  $('.tab-content2>div').hide();
$('.tab-content2>div').first().slideDown();
  $('.tab-buttons2 span').click(function(){
    var thisclass=$(this).attr('class');
    $('#lamp2').removeClass().addClass('#lamp2').addClass(thisclass);
    $('.tab-content2>div').each(function(){
      if($(this).hasClass(thisclass)){
        $(this).fadeIn(800);
      }
      else{
        $(this).hide();
      }
    });
  });
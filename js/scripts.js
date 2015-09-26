$(function(){
	
  $('.previews a').on('click',function(e){
    e.preventDefault();
    console.log('working?');
    // $(".selected").removeClass("selected");
    // $(this).addClass("selected");
    var icon = $(this).data('icon');
    console.log(icon);
    var alt = $(this).data('alt');
    var title = $(this).data('title');
    console.log(title);
    var desc = $(this).data('desc');
    console.log(desc);
    $('.full img').empty().attr("src", icon);
    $('.full img').empty().attr("alt", alt);
    $('.full h3').empty().text(title);
    $('.full p').empty().text(desc);
  });

});
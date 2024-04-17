


function hide(){
var buttons = document.querySelectorAll('.department');
    // console.log(buttons)
    // console.log($('.list-group').innerWidth());
    for (var i=0; i<buttons.length; ++i) {
    // console.log(buttons[i].id);

    $('#'+buttons[i].id).hide();
   $('.list-group').animate({width:'80px'},50);
   $('#show').attr("onclick","show()");
   $('#hide').attr("id","show");
    $('#title').text('M   ')
    $('#sidebarToggle').hide();
    $('.arrow').removeClass('arrow-left');
    $('.arrow').addClass('arrow-right');
    }
    
};
function show(){
var buttons = document.querySelectorAll('.department');
    for (var i=0; i<buttons.length; ++i) {
    $('#'+buttons[i].id).show()
   $('.list-group').animate({width:'225px'},50);
   $('#show').attr("onclick","hide()");
   $('#hide').attr("id","hide");
    $('#title').text('Morortrade')
    $('.arrow').removeClass('arrow-right');
    $('.arrow').addClass('arrow-left');
    $('#sidebarToggle').show();
    }

};
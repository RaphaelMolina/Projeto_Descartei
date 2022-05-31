
$('div#chamada p').waypoint(function(direcao) {
    if ( direcao == 'down') {
        $('nav').addClass('navEstatico');
        $('nav div').addClass('logoEstatico');
        $('nav ul').addClass('menuEstatico');
        $('nav ul li a').addClass('itemEstatico');
        $('nav ion-icon').addClass('iconeEstatico');
    } else {
        $('nav').removeClass('navEstatico');
        $('nav div').removeClass('logoEstatico');
        $('nav ul').removeClass('menuEstatico');
        $('nav ul li a').removeClass('itemEstatico'); 
        $('nav ion-icon').removeClass('iconeEstatico');     
    }
},{
    offset:'200px;'
});



$('nav div').click(function() {
    $('html,body').animate({scrollTop:$('header').offset().top},1000);
})


$('nav ul li:eq(1)').click(function() {
    $('html,body').animate({scrollTop:$('section#bootcamps').offset().top},1000);
})


$('nav ul li:eq(2)').click(function() {
    $('html,body').animate({scrollTop:$('section#testemunha').offset().top},1000);
})


$('nav ul li:eq(3)').click(function() {
    $('html,body').animate({scrollTop:$('section#plano-principal').offset().top},1000);
})

function loop() {
    $('#mobile-animation-1').animate({'top': '-400%'}, {
        duration: 15000, 
        complete: function() {
            $('#mobile-animation-1').animate({top: '16%'}, {
                duration: 10000, 
                complete: loop});
        }});
    
    $('<div/>').text('exiting loop').appendTo($('.results'));
}
loop();


function loop2() {
    $('#mobile-animation-2').animate({'top': '-350%'}, {
        duration: 15000, 
        complete: function() {
            $('#mobile-animation-2').animate({top: '16%'}, {
                duration: 10000, 
                complete: loop2});
        }});
    
    $('<div/>').text('exiting loop').appendTo($('.results'));
}
loop2();
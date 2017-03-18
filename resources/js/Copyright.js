    var year = new Date().getFullYear();
    document.getElementById("year").innerHTML = year;
    document.getElementById("year1").innerHTML = year;
    
    window.slideleft = function($elem) {
    var top = parseInt($elem.css("top"));
    var temp = -1 * $('#slideleft  > div').height();
    if(top < temp) {
        top = $('#slideleft ').height();
        $elem.css("top", top);
    }
    $elem.animate({ top: (parseInt(top)-60) }, 600, function () {
      window.slideleft ($(this));
    });
};
$(document).ready(function() {
    var i = 0;
    $("#slideleft  > div").each(function () {
          $(this).css("top", i);
          i += 60;
          window.slideleft ($(this));
    });
});



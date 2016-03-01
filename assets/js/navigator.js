(function($) {
    var NavigationCache = new Array();
$(document).ready(function(){
  NavigationCache[window.location.pathname] = $('.content').html();
  history.pushState({page: window.location.pathname, type: "page"}, document.title, window.location.pathname);
});

function setPage(page) {
  $.post(page, { ajaxLoad: true }, function(data){
    $('.content').html(data); 
    NavigationCache[page] = data;
    history.pushState({page: page, type: "page"}, document.title, page);            
  })  
} 

$(document).ready(function(){
  if (history.pushState) {
    window.onpopstate = function(event) {
      if (event.state.type.length > 0) {
        if (NavigationCache[event.state.page].length>0) {
          $('.content').html(NavigationCache[event.state.page]);
        }
      }
    } 

    $('.navigation-menu').live("click", function(){ 
        setPage($(this).attr('href'));
        return false;
    })  
  }
})
})(jQuery);

//*
(function ($) {
  Drupal.behaviors.bgGallery = {
    attach: function (context, settings) {
      $(document).ready(function(){
        $('ul > li .colorbox-inline').click(function() {
          var clostestTag = $( this ).parent().parent();
          //$(clostestTag).find(".bg-group").toggle();
          $("ul > li .colorbox-inline").colorbox({
              width: "100%",
              inline:true,
              href: $(clostestTag).find(".bg-group")
          });
        });

        $('ul > li .colorbox-inline').hover(
          function(){
            $(this).find('.overlay').stop().fadeTo(500, 0.7);
          },
          function(){
            $(this).find('.overlay').stop().fadeTo(500, 0);
         });

         var oldSize = parseFloat($("ul > li .colorbox-inline a").css('font-size'));
         var newSize = oldSize  * 2;

         $('ul > li .colorbox-inline').hover(
           function(){
             $(this).find('.title').css( "display", "block" );
           },
           function(){
             $(this).find('.title').css( "display", "none" );
          });
      });
    }
  };
})(jQuery);
//*/

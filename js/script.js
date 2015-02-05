//*
(function ($) {
  Drupal.behaviors.bgGallery = {
    attach: function (context, settings) {
      $(document).ready(function(){
        $('ul > li .colorbox-inline').click(function() {
          var clostestTag = $( this ).parent().parent();
          $("ul > li .colorbox-inline").colorbox({
              width: "100%",
              inline:true,
              href: $(clostestTag).find(".bg-group")
          });
        });

        $('ul > li .colorbox-inline').hover(
          function(){
            $(this).find('.overlay').stop().fadeTo(500, 0.7);
            $(this).find('.title').css( "display", "block" );
          },
          function(){
            $(this).find('.overlay').stop().fadeTo(500, 0);
            $(this).find('.title').css( "display", "none" );
         });

         $('ul > li .colorbox-inline').bind('touchstart',function(){
           $(this).find('.title').css( "display", "block" );
           $(this).find('.overlay').stop().fadeTo(500, 0.7);
         });

         $('ul > li .colorbox-inline').bind('touchend',function(){
             $t=setTimeout(function(){
               (this).find('.title').css( "display", "none" );
               $(this).find('.overlay').stop().fadeTo(500, 0);
             },3);
          });

          $('ul > li .colorbox-inline').on("tap",function(){
            var clostestTag = $( this ).parent().parent();
            $("ul > li .colorbox-inline").colorbox({
              width: "100%",
              inline:true,
              href: $(clostestTag).find(".bg-group")
            });
          });
/*
         $('ul > li .colorbox-inline').live('touchstart', function(e){
           $(this).find('.title').css( "display", "block" );
           $(this).find('.overlay').stop().fadeTo(500, 0.7);
         });

         $('ul > li .colorbox-inline').live('touchend', function(e){
           $(this).find('.title').css( "display", "none" );
           $(this).find('.overlay').stop().fadeTo(500, 0);
         });
         */
      });
    }
  };
})(jQuery);
//*/

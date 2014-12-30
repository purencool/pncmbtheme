//*
(function ($) {
  Drupal.behaviors.bgGallery = {
    attach: function (context, settings) {
      $(document).ready(function(){
        $('ul > li .colorbox-inline').click(function() {
          var clostestTag = $( this ).parent().parent();
          //$(clostestTag).find(".bg-group").toggle();
          $("ul > li .colorbox-inline").colorbox({
              width: "70%",
              inline:true,
              href: $(clostestTag).find(".bg-group")
          });
        });
      });
    }
  };
})(jQuery);
//*/

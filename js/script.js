//*
(function ($) {
	Drupal.behaviors.bgGallery = {
		attach: function (context, settings) {
			$(document).ready(function () {

				function hoverTouchUnstick() {
					// Check if the device supports touch events
					if ('ontouchstart' in document.documentElement) {
						// Loop through each stylesheet
						for (var sheetI = document.styleSheets.length - 1; sheetI >= 0; sheetI--) {
							var sheet = document.styleSheets[sheetI];
							// Verify if cssRules exists in sheet
							if (sheet.cssRules) {
								// Loop through each rule in sheet
								for (var ruleI = sheet.cssRules.length - 1; ruleI >= 0; ruleI--) {
									var rule = sheet.cssRules[ruleI];
									// Verify rule has selector text
									if (rule.selectorText) {
										// Replace hover psuedo-class with active psuedo-class
										rule.selectorText = rule.selectorText.replace(":hover", ":active");
									}
								}
							}
						}
					}
				}
				hoverTouchUnstick();




				$('ul > li .colorbox-inline').click(function () {
					var clostestTag = $(this).parent().parent();
					$("ul > li .colorbox-inline").colorbox({
						width: "100%",
						inline: true,
						href: $(clostestTag).find(".bg-group")
					});
				});

				$('ul > li .colorbox-inline').hover(
					function () {
						$(this).find('.overlay').stop().fadeTo(500, 0.7);
						$(this).find('.title').css("display", "block");
					},
					function () {
						$(this).find('.overlay').stop().fadeTo(500, 0);
						$(this).find('.title').css("display", "none");
					});

				$('ul > li .colorbox-inline').bind('touchstart', function () {
					$(this).find('.title').css("display", "block");
					$(this).find('.overlay').stop().fadeTo(500, 0.7);
				});


			});
		}
	};
})(jQuery);
//*/

// const headerFixed = ($) => {
//   console.log($(".site-header"));
//   if ($(".site-header").length) {
//     var headerFix = $(".site-header").offset().top;
//     console.log("headerFix", headerFix);
//     $(window).on("load scroll", function () {
//       var y = $(this).scrollTop();
//       //   console.log("headerFix", headerFix);
//       //   console.log("y", y);
//       console.log("ciao");
//       if (y >= headerFix) {
//         console.log("first if");
//         $(".site-header").addClass("fixed");
//         $("body").addClass("siteScrolled");
//       } else {
//         console.log("first else");
//         $(".site-header").removeClass("fixed");
//         $("body").removeClass("siteScrolled");
//       }
//       if (y >= 107) {
//         console.log("second if");
//         $(".site-header").addClass("float-header");
//       } else {
//         console.log("second else");
//         $(".site-header").removeClass("float-header");
//       }
//     });
//   }
// };
// (function ($) {
//   headerFixed($);
// })(jQuery);

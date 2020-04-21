const headerFixed = ($) => {
  console.log($(".site-header"));
  if ($(".site-header").length) {
    var headerFix = $(".site-header").offset().top;
    $(window).on("load scroll", function () {
      console.log("scrolling");
      var y = $(this).scrollTop();
      if (y >= headerFix) {
        $(".site-header").addClass("fixed");
        $("body").addClass("siteScrolled");
      } else {
        $(".site-header").removeClass("fixed");
        $("body").removeClass("siteScrolled");
      }
      if (y >= 107) {
        $(".site-header").addClass("float-header");
      } else {
        $(".site-header").removeClass("float-header");
      }
    });
  }
};
(function ($) {
  headerFixed($);
})(jQuery);

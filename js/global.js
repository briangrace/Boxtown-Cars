// @codekit-prepend "jquery.fitvids.js";
// @codekit-prepend "modernizr.js";
// @codekit-prepend "enquire.js";


// fluid width videos
$(".main-column").fitVids();

// conditional loading
$(window).load(function() {
enquire
  .register("(min-width: 650px)", {
    match: function() {

      $("#map").load(
        "/parts/map-papabear.html"
      );

    },
    unmatch: function() {
      $("#map").load(
        "/parts/map-babybear.html"
      );
    }
  })
  .listen();
});


// svg fallback
// how you might do it if <img>
// if (!Modernizr.svg) {
//   $(".logo").attr("src", "logo.jpg")
// }
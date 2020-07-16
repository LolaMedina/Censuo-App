

var controller = new ScrollMagic.Controller();

$(".wrapper").each(function() {
  var tl = new TimelineMax();
  var child = $(this).find(".child");
  tl.to(child, 1, { y: -180, ease: Linear.easeNone });

  var scene = new ScrollMagic.Scene({
    triggerElement: this,
    triggerHook: 0.4,
    duration: "50%"
  })
    .setTween(tl)
    // .addIndicators({
    //   colorTrigger: "black",
    //   colorStart: "black",
    //   colorEnd: "black",
    //   indent: 10
    // })
    .addTo(controller);
});





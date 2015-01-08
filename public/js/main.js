app = {

  init: function(){
    this.paperEffects();
    this.slideScroll();
    this.hideScrollRow();
  },

  hideScrollRow: function(){
    $scrollRow = $('.row.scrollDown'); 
    $(window).scroll(function(event){
      var opacity = 1 - $(window).scrollTop()/$(window).height();  
      $scrollRow.css("opacity", opacity);
    });
  },

  paperEffects: function(){
    var $paper = $(".paper");
    var $body = $("body");

    /* Jquery ui drag implementation. No hardware acceleration. */
    // $paper.draggable({
    //   drag: function( event, ui ) {
    //     var $that = $(this);
    //     var xOff = ui.offset.left;
    //     var width = $(window).width();
    //     var delta = (width/2-(xOff + $that.width()/2)) / (width*2/$that.width())
    //     $that.css("transform", "rotate("+delta+"deg)");
    //   }
    // });  

    /* GSAP implementation of drag -- does matrix transforms instead of top|left */
    Draggable.create($paper, {type:"x,y", edgeResistance:0.65, bounds:"", throwProps:true, onDrag:function(evt){
      var $that = $(this.target);
      var width = $(window).width();
      var xPos = evt.x || evt.changedTouches[0].clientX;
      var delta = (width/2-(xPos + $that.width()/2)) / (width*2/$that.width())
      var newTransform = $that.css("transform") + " rotate("+delta+"deg)";
      $that.css("transform", newTransform);
    }});

  },

  slideScroll: function(){
    $(window).scroll(function(){
      window.clearInterval(slideScroll);
    });
    var slideScroll = window.setTimeout(function(){
      $('body,html').animate({scrollTop: 78}, 1000);
    }, 3000)
  }

}

$(function(){
  app.init();
}); 
var $poster = document.querySelector('.poster');
var $shine = document.querySelector('.shine');
var $layer = document.querySelectorAll('div[class*="layer-"]');
var $container = document.querySelector('.container');
var cs = window.getComputedStyle($container, null);
var w = parseInt(cs.width), h = parseInt(cs.height);

var translatePoster = function (offsetX, offsetY, angle, opacity, hover) {
  var transformPopup = 'scale(1.1) translateZ(10px)';
  var offsetPoster = $poster.getAttribute("data-offset");
  var transformPoster = 'translateY(' + (-offsetX * offsetPoster) + 
      'px) rotateX(' + (-offsetY * offsetPoster) + 'deg) rotateY(' + (offsetX * (offsetPoster * 2)) + 'deg)' + (hover ? transformPopup : '');
  var gradientShine = 'linear-gradient(' + angle + 'deg, rgba(255,255,255,' + opacity + ') 0%, rgba(255,255,255,0) 80%)';

  if (angle < 0) {
    angle = angle + 360;
  }

  $shine.style.background = gradientShine;
  $poster.style.webkitTransform = transformPoster;

  for (var i=0; i < $layer.length; i++) {
    var $this = $layer[i];
    var offsetLayer = $this.getAttribute("data-offset") || 0;
    var transformLayer = 'translateX(' + offsetX * offsetLayer + 'px) translateY(' + offsetY * offsetLayer + 'px)';

    $this.style.webkitTransform = transformLayer;
  }
}

$container.addEventListener("mousemove", function(e) {
  var offsetX = 0.5 - e.offsetX / w;
  var offsetY = 0.5 - e.offsetY / h;
  var dx = e.offsetX - w / 2; //@w/2 = center of poster
  var dy = e.offsetY - h / 2; //@h/2 = center of poster
  var opacity = e.offsetY / h;
  var theta = Math.atan2(dy, dx); //angle between cursor and center of poster in RAD
  var angle = theta * 180 / Math.PI - 90; //convert rad in degrees

  translatePoster(offsetX, offsetY, angle, opacity, true);
});

$container.addEventListener("mouseleave", function(e) {
  translatePoster(0, 0, 0, 0, false);
});
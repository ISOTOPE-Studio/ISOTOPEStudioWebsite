function getTop(clsName) {
  var obj = document.getElementsByClassName(clsName)[0];
  return obj.getBoundingClientRect();
}

function getDom(clsName) {
  var obj = document.getElementsByClassName(clsName)[0];
  return obj;
}

window.addEventListener('scroll', function () {
  var scrollT = document.documentElement.scrollTop || document.body.scrollTop;

  /*第二页动画的触发*/
  if (getTop('stickers') < 0) {
    getDom('sticker-row-1').
    getDom('sticker-row-1').classList.add('animated');
    getDom('sticker-row-1').classList.add('fadeIn');
  }
});
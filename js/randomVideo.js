var a = Math.random();
var video = document.getElementById("heroVideo");
if (a < 0.25) {
  video.src = "video/2.mp4";
} else if (a < 0.5) {
  video.src = "video/3.mp4";
} else if (a < 0.75) {
  video.src = "video/4.mp4";
}
video.play();
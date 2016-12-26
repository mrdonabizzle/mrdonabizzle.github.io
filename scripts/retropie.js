
var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/retropie.png') {
      myImage.setAttribute ('src','images/raspberrypi.png');
    } else {
      myImage.setAttribute ('src','images/retropie.png');
    }
}


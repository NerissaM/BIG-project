setInterval(function() {
    var myImageElement = document.getElementById('dotwebcam');
    myImageElement.src = 'https://images.wsdot.wa.gov/nw/005vc16508.jpg?rand=' + Math.random();
}, 30000);

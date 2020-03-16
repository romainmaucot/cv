var imageWidth = 2500,
    imageHeight = 4481,
    imageAspectRatio = imageWidth / imageHeight,
    $window = $(window);

var hotSpots = [{
    'x': -650,
    'y': -450
}, {
    'x': -520,
    'y': 180
}, {
    'x': -380,
    'y': 750
}, {
    'x': 230,
    'y': -80
}, {
    'x': 430,
    'y': -340
}, {
    'x': 570,
    'y': 20
}, {
    'x': 300,
    'y': 300
}];






function positionHotSpots() {
    var windowWidth = $window.width(),
        windowHeight = $window.height(),
        windowAspectRatio = windowWidth / windowHeight,
        $hotSpot = $('.droppable');

    $hotSpot.each(function(index) {
        var xPos = hotSpots[index]['x'],
            yPos = hotSpots[index]['y'],
            desiredLeft = 0,
            desiredTop = 0;

        if (windowAspectRatio > imageAspectRatio) {
            yPos = (yPos / imageHeight) * 100;
            xPos = (xPos / imageWidth) * 100;
        } else {
            yPos = ((yPos / (windowAspectRatio / imageAspectRatio)) / imageHeight) * 100;
            xPos = ((xPos / (windowAspectRatio / imageAspectRatio)) / imageWidth) * 100;
        }

        $(this).css({
            'margin-top': yPos + '%',
            'margin-left': xPos + '%'
        });

    });
}

positionHotSpots();
$(window).resize(positionHotSpots);
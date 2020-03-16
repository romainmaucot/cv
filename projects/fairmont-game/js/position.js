var imageWidth = 2500,
    imageHeight = 4917,
    imageAspectRatio = imageWidth / imageHeight,
    $window = $(window);

var hotSpots = [{
    'x': -660,
    'y': -960
}, {
    'x': -530,
    'y': -290
}, {
    'x': -380,
    'y': 400
}, {
    'x': 230,
    'y': -530
}, {
    'x': 430,
    'y': -780
}, {
    'x': 570,
    'y': -400
}, {
    'x': 310,
    'y': -130
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
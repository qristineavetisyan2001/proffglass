var isGreen1 = false;

$("#door1").hover(
    function() {
        if (!isGreen1) {
            var baseDoor = "/images/greenDoor1.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door1_green');
            $("#door1").append(imageElement);
            $('.image_door1').remove();
            isGreen1 = true;
        }
    },
    function() {
        if (isGreen1) {
            var baseDoor = "/images/door1.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door1');
            $("#door1").append(imageElement);
            $('.image_door1_green').remove();
            isGreen1 = false;
        }
    }
);

var isGreen2 = false;

$("#door2").hover(
    function() {
        if (!isGreen2) {
            var baseDoor = "/images/greenDoor2.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door2_green');
            $("#door2").append(imageElement);
            $('.image_door2').remove();
            isGreen2 = true;
        }
    },
    function() {
        if (isGreen2) {
            var baseDoor = "/images/door2.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door2');
            $("#door2").append(imageElement);
            $('.image_door2_green').remove();
            isGreen2 = false;
        }
    }
);

var isGreen3 = false;

$("#door3").hover(
    function() {
        if (!isGreen3) {
            var baseDoor = "/images/greenDoor3.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door3_green');
            $("#door3").append(imageElement);
            $('.image_door3').remove();
            isGreen3 = true;
        }
    },
    function() {
        if (isGreen3) {
            var baseDoor = "/images/door3.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door3');
            $("#door3").append(imageElement);
            $('.image_door3_green').remove();
            isGreen3 = false;
        }
    }
);

var isGreen4 = false;

$("#door4").hover(
    function() {
        if (!isGreen4) {
            var baseDoor = "/images/greenDoor4.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door4_green');
            $("#door4").append(imageElement);
            $('.image_door4').remove();
            isGreen4 = true;
        }
    },
    function() {
        if (isGreen4) {
            var baseDoor = "/images/door4.png";
            var imageElement = $("<img>").attr("src", baseDoor).attr("class", 'image_door4');
            $("#door4").append(imageElement);
            $('.image_door4_green').remove();
            isGreen4 = false;
        }
    }
);

document.getElementById('scroll-link').addEventListener('click', function (e) {
    e.preventDefault();

    setTimeout(function () {
        const targetElement = document.querySelector(this.getAttribute('href'));
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
            });
        }
    }.bind(this), 100);
});
var line = false;

function showSubcategories(category) {
    var allSubcategories = $('.subcategories_div');
    var allSubcategoryLines = $('.lines');

    allSubcategories.slideUp();
    allSubcategoryLines.animate({width: '1px'}, 200);
    setTimeout(function() {
        allSubcategoryLines.css('opacity', '0');
    }, 200);

    line = false;
    var subcategories = $('#category' + category);
    if (!subcategories.is(":visible")) {
        subcategories.slideDown();
    }
}

function showCategories() {
    var categories = $('#categories');
    if (categories.is(":visible")) {
        categories.slideUp();
    } else {
        categories.slideDown();
    }
    var allSubcategories = $('.subcategories_div');
    var allSubcategoryLines = $('.lines');
    allSubcategories.slideUp();

    allSubcategoryLines.animate({width: '1px'}, 200);
    setTimeout(function() {
        allSubcategoryLines.css('opacity', '0');
    }, 200);
}

function showSubcategoryLine(subcategory) {
    var subcategoryLine = $('#subcategory_line_' + subcategory);
    if (line == subcategory) {
        subcategoryLine.animate({width: '1px'}, 500);
        setTimeout(function() {
            subcategoryLine.css('opacity', '0');
        }, 500);
        line = false;
    } else if (line !== false) {
        var allSubcategoryLines = $('.lines');

        allSubcategoryLines.animate({width: '1px'}, 500);
        setTimeout(function() {
            allSubcategoryLines.css('opacity', '0');
        }, 500);
        setTimeout(function() {
            subcategoryLine.css('opacity', '1');
        }, 500);
        subcategoryLine.animate({width: '80%'}, 500);
        line = subcategory;
    } else {
        subcategoryLine.css('opacity', '1');
        subcategoryLine.animate({width: '80%'}, 500);
        line = subcategory;
    }
}

$(document).on('click', function (event) {
    if (!$(event.target).closest('#showCategories, #categories').length) {
        $('#categories').slideUp();
        var allSubcategories = $('.subcategories_div');
        var allSubcategoryLines = $('.lines');

        allSubcategories.slideUp();
        allSubcategoryLines.animate({width: '1px'}, 200);
        setTimeout(function() {
            allSubcategoryLines.css('opacity', '0');
        }, 200);
    }
});

const door1 = document.getElementById('door1');
const green_door1 = document.getElementById('green_door1');
const door2 = document.getElementById('door2');
const green_door2 = document.getElementById('green_door2');
const door3 = document.getElementById('door3');
const green_door3 = document.getElementById('green_door3');
const door4 = document.getElementById('door4');
const green_door4 = document.getElementById('green_door4');

$("#door1").hover(
    function() {
        door1.style.display = 'none';
        green_door1.style.display = 'block';
    },
    function() {
        green_door1.style.display = 'none';
        door1.style.display = 'block';
    }
);

$("#door2").hover(
    function() {
        door2.style.display = 'none';
        green_door2.style.display = 'block';
    },
    function() {
        green_door2.style.display = 'none';
        door2.style.display = 'block';
    }
);

$("#door3").hover(
    function() {
        door3.style.display = 'none';
        green_door3.style.display = 'block';
    },
    function() {
        green_door3.style.display = 'none';
        door3.style.display = 'block';
    }
);

$("#door4").hover(
    function() {
        door4.style.display = 'none';
        green_door4.style.display = 'block';
    },
    function() {
        green_door4.style.display = 'none';
        door4.style.display = 'block';
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

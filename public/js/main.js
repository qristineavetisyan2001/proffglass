const door1 = document.getElementById('door1');
const green_door1 = document.getElementById('green_door1');
const door2 = document.getElementById('door2');
const green_door2 = document.getElementById('green_door2');
const door3 = document.getElementById('door3');
const green_door3 = document.getElementById('green_door3');
const door4 = document.getElementById('door4');
const green_door4 = document.getElementById('green_door4');

let isInsideDoor1 = false;
let isInsideDoor2 = false;
let isInsideDoor3 = false;
let isInsideDoor4 = false;

door1.addEventListener('mouseenter', function () {
    isInsideDoor1 = true;
    door1.style.display = 'none';
    green_door1.style.display = 'block';
});

door1.addEventListener('mouseout', function () {
    if (isInsideDoor1) {
        green_door1.style.display = 'none';
        door1.style.display = 'block';
    }
});

green_door1.addEventListener('mouseout', function () {
    isInsideDoor1 = false;
    green_door1.style.display = 'none';
    door1.style.display = 'block';
});

door2.addEventListener('mouseenter', function () {
    isInsideDoor2 = true;
    door2.style.display = 'none';
    green_door2.style.display = 'block';
});

door2.addEventListener('mouseout', function () {
    if (isInsideDoor2) {
        green_door2.style.display = 'none';
        door2.style.display = 'block';
    }
});

green_door2.addEventListener('mouseleave', function () {
    isInsideDoor2 = false;
    green_door2.style.display = 'none';
    door2.style.display = 'block';
});

door3.addEventListener('mouseenter', function () {
    isInsideDoor3 = true;
    door3.style.display = 'none';
    green_door3.style.display = 'block';
});

door3.addEventListener('mouseout', function () {
    if (isInsideDoor3) {
        green_door3.style.display = 'none';
        door3.style.display = 'block';
    }
});

green_door4.addEventListener('mouseleave', function () {
    isInsideDoor4 = false;
    green_door4.style.display = 'none';
    door4.style.display = 'block';
});

door4.addEventListener('mouseenter', function () {
    isInsideDoor4 = true;
    door4.style.display = 'none';
    green_door4.style.display = 'block';
});

door4.addEventListener('mouseout', function () {
    if (isInsideDoor4) {
        green_door4.style.display = 'none';
        door4.style.display = 'block';
    }
});

green_door4.addEventListener('mouseleave', function () {
    isInsideDoor4 = false;
    green_door4.style.display = 'none';
    door4.style.display = 'block';
});

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

function showSubcategories(category) {
    var allSubcategories = $('.subcategories_div');

    allSubcategories.slideUp();

    var subcategories = $('#category' + category);
    if (!subcategories.is(":visible")) {
        subcategories.slideDown();
    }
}
function showCategories(){
    var categories = $('#categories');
    if (categories.is(":visible")) {
        categories.slideUp();
    } else {
        categories.slideDown();
        var allSubcategories = $('.subcategories_div');

        allSubcategories.slideUp();
    }
}
$(document).on('click', function (event) {
    if (!$(event.target).closest('#showCategories, #categories').length) {
        $('#categories').slideUp();
        var allSubcategories = $('.subcategories_div');

        allSubcategories.slideUp();
    }
});

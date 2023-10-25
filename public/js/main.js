const door1 = document.getElementById('door1');
const green_door1 = document.getElementById('green_door1');
const door2 = document.getElementById('door2');
const green_door2 = document.getElementById('green_door2');
const door3 = document.getElementById('door3');
const green_door3 = document.getElementById('green_door3');
const door4 = document.getElementById('door4');
const green_door4 = document.getElementById('green_door4');

door1.addEventListener('mouseenter', function () {
    door1.style.display = 'none';
    green_door1.style.display = 'block';
});

green_door1.addEventListener('mouseleave', function () {
    green_door1.style.display = 'none';
    door1.style.display = 'block';
});
door2.addEventListener('mouseenter', function () {
    door2.style.display = 'none';
    green_door2.style.display = 'block';
});

green_door2.addEventListener('mouseleave', function () {
    green_door2.style.display = 'none';
    door2.style.display = 'block';
});
door3.addEventListener('mouseenter', function () {
    door3.style.display = 'none';
    green_door3.style.display = 'block';
});

green_door3.addEventListener('mouseleave', function () {
    green_door3.style.display = 'none';
    door3.style.display = 'block';
});
door4.addEventListener('mouseenter', function () {
    door4.style.display = 'none';
    green_door4.style.display = 'block';
});

green_door4.addEventListener('mouseleave', function () {
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

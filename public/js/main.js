let scrollLink = document.getElementById('scroll-link');
if(scrollLink){
    scrollLink.addEventListener('click', function (e) {
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
}
var line = false;

let isSub = false;
function showSubcategories(category) {
    if(isSub == category){
        $("#category" + category).animate({
            'margin-left': '0px'
        }, 400);

        $("#subcat" + category).animate({
            'width': '0px',
            'padding': '0px',
        }, 400);
        setTimeout(function() {
            $("#subcat" + category).css({
                'display': 'none'
            });
        }, 350);
        $("#line" + category).removeClass('border-open');
        $("#arrow" + category).animate({
            'opacity': '0'
        }, 400);
        isSub = false;
    } else if (isSub != false){
        $(".allSubcategories").animate({
            'margin-left': '0px'
        }, 400);
        $(".arrow").animate({
            'opacity': '0'
        }, 400);
        $(".subcat").animate({
            'width': '0px',
            'padding': '0px',
        }, 400);
        setTimeout(function() {
            $(".subcat").css({
                'display': 'none'
            });
        }, 350);
        $(".line").removeClass('border-open');
        $("#category" + category).animate({
            'margin-left': '20px'
        }, 400);
        $("#subcat" + category).animate({
            'width': '213px',
            'padding-left': '20px',
            'padding-bottom': '4px',
        }, 400);
        setTimeout(function() {
            $("#subcat" + category).css({
                'display': 'block'
            });
        }, 400);
        $("#arrow" + category).animate({
            'opacity': '1'
        }, 400);
        $("#line" + category).addClass('border-open');
        isSub = category;
    } else {
        console.log('else');
        $("#category" + category).animate({
            'margin-left': '20px'
        }, 400);
        $("#subcat" + category).animate({
            'width': '213px',
            'padding-left': '20px',
            'padding-bottom': '4px',
        }, 400);
        $("#subcat" + category).css({
            'display': 'block',
        });
        $("#line" + category).addClass('border-open');

        $("#arrow" + category).animate({
            'opacity': '1'
        }, 400);
        isSub = category;
    }
}

function showCategories() {
    $(".line").removeClass('border-open');
    $(".allSubcategories").animate({
        'margin-left': '0px'
    }, 400);
    $(".arrow").css({
        'opacity': '0'
    });
    $(".subcat").animate({
        'width': '0px',
        'padding': '0px',
    }, 400);
    setTimeout(function() {
        $(".subcat").css({
            'display': 'none'
        });
    }, 350);
    isSub = false;
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
        $(".line").removeClass('border-open');
        $(".allSubcategories").animate({
            'margin-left': '0px'
        }, 400);
        $(".arrow").css({
            'opacity': '0'
        });
        $(".subcat").animate({
            'width': '0px',
            'padding': '0px',
        }, 400);
        setTimeout(function() {
            $(".subcat").css({
                'display': 'none'
            });
        }, 350);
        isSub = false;
        allSubcategories.slideUp();
        allSubcategoryLines.animate({width: '1px'}, 200);
        setTimeout(function() {
            allSubcategoryLines.css('opacity', '0');
        }, 200);
    }
});

function validateForm() {
    let validated = true;
    const success = document.getElementById('success');
    if(success){
        success.style.display = 'none';
    }
    document.getElementById('name-error').textContent = '';
    document.getElementById('email-error').textContent = '';
    document.getElementById('phone-error').textContent = '';
    document.getElementById('message-error').textContent = '';

    var name = document.querySelector('input[name="name"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var phone = document.querySelector('input[name="phone"]').value;
    var message = document.querySelector('textarea[name="message"]').value;

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (name.trim() === '') {
        document.getElementById('name-error').textContent = 'Դաշտը չի կարող դատարկ լինել';
        validated = false;
    }

    if (phone.trim() === '') {
        document.getElementById('phone-error').textContent = 'Դաշտը չի կարող դատարկ լինել';
        validated = false;
    }

    if (message.trim() === '') {
        document.getElementById('message-error').textContent = 'Դաշտը չի կարող դատարկ լինել';
        validated = false;
    }

    if (email.trim() === '') {
        document.getElementById('email-error').textContent = 'Դաշտը չի կարող դատարկ լինել';
        validated = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('email-error').textContent = 'Դաշտը պետք է պարտադիր լինի Էլ. հասցե';
        validated = false;
    }
    if(validated){
        return true
    } else {
        return false;
    }
}
$(document).ready(function() {
    $('#openChat').click(function() {
        $('#chatOverlay').removeClass('hidden');
    });

    $('#chatOverlay').click(function(e) {
        if (e.target === this) {
            $(this).addClass('hidden');
        }
    });
});

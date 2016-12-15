// if (document.getElementsByClassName("testimonials-slider")[0] !== undefined){
//      Slider('testimonials-slider', 'next-testimonial', 'prev-testimonial', 'slider-wrapper', "testimonial");
//  }

if (document.getElementsByClassName("blog")[0] !== undefined){
    Slider('blog', 'right-arrow', 'left-arrow', 'blog-container', "blog");
}

function Slider(parent, next, previous, wrapper, slider) {
    var box = document.getElementsByClassName(parent)[0],
        items = [].slice.call(document.getElementsByClassName(parent + '-item')),
        pxToLeft = 0,
        scrollLeft = 0,
        sliderMaxLeft = 0,
        canTransition=true,
        timer;
    if(slider === "testimonial"){
        var testimonialsQuote = document.getElementsByClassName('testimonials-quote')[0],
            quotes = [],
            activeTestimonial = 1;
        var testimonials = [
            {'name': 'Jim',
                'job':'Technical Lead &amp; Javascript Developer',
                'img':'wp-content/themes/codepamoja/img/portrait-jim.png',
                'quote': 'Here comes quote1'},
            {'name': 'Maria Cristina',
                'job':'Front-end Developer &amp; Designer',
                'img':'wp-content/themes/codepamoja/img/portrait-maria-cristina.png',
                'quote': 'Here comes quote2'},
            {'name': 'Raymon',
                'job':'Front-end Developer',
                'img':'wp-content/themes/codepamoja/img/portrait-raymon.png',
                'quote': 'Here comes quote3'},
            {'name': 'Jim',
                'job':'Technical Lead &amp; Javascript Developer',
                'img':'wp-content/themes/codepamoja/img/portrait-jim.png',
                'quote': 'Here comes quote4'},
            {'name': 'Maria',
                'job':'Front-end Developer &amp; Designer',
                'img':'wp-content/themes/codepamoja/img/portrait-maria-cristina.png',
                'quote': 'Here comes quote5'},
            {'name': 'Rayman',
                'job':'Front-end Developer',
                'img':'wp-content/themes/codepamoja/img/portrait-raymon.png',
                'quote': 'Here comes quote6'}
        ];
    }
    (function init() {
        if(slider === "blog") {
            setPositions();
            addListeners();
        }
        else if (slider === "testimonial"){
            setTestimonials();
            randomizer();
            updateslider();
            setPositions();
            updateQuote();
            addListeners();
        }
    })();
    function addListeners() {
        var nextButton = document.getElementsByClassName(next)[0];
        var prevButton = document.getElementsByClassName(previous)[0];
        box.addEventListener("transitionend", function(){canTransition=true;});
        nextButton.addEventListener('click', function () {
            slideLeft();
            resetTimer();
        });
        prevButton.addEventListener('click', function () {
            slideRight();
            resetTimer();
        });
        window.addEventListener('resize', function () {
            box.style.left = 0 + 'px';
            pxToLeft = 0;
            activeTestimonial = 1;
            setPositions();
            if (slider === "testimonial") {
                updateQuote();
            }
        });
        if (slider === "testimonial") {
            var length = items.length;
            for (var i=0;i<length;i++){
                items[i].addEventListener('click', slideToSelected);
            }
        }
        timer = window.setInterval(slideLeft, 3000);
    }
    function setTestimonials() {
        var testimonialsHTML = [];
        var testimonialLength = testimonials.length;
        for (var i = 0; i < testimonialLength; i++) {
            quotes.push(testimonials[i].quote);
            var listItem = document.createElement('li');
            listItem.className = 'testimonials-slider-item';
            var employeeImg = document.createElement("img");
            employeeImg.className = 'employee-photo';
            employeeImg.setAttribute('src', testimonials[i].img);
            employeeImg.setAttribute('alt', testimonials[i].name);
            var employeeInfo = document.createElement("div");
            employeeInfo.className = 'employee-info';
            var employeeName = document.createElement("span");
            employeeName.className = 'employee-name';
            employeeName.innerHTML = testimonials[i].name;
            var employeeJob = document.createElement("span");
            employeeJob.className = 'employee-job';
            employeeJob.innerHTML = testimonials[i].job;
            employeeInfo.appendChild(employeeName);
            employeeInfo.appendChild(employeeJob);
            listItem.appendChild(employeeImg);
            listItem.appendChild(employeeInfo);
            testimonialsHTML.push(listItem);
        }
        items = testimonialsHTML;
    }
    function randomizer() {
        var length = testimonials.length;
        for (var i = length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = testimonials[i];
            testimonials[i] = testimonials[j];
            testimonials[j] = temp;
        }
    }
    function resetTimer () {
        window.clearTimeout(timer);
        timer = window.setInterval(slideLeft, 3000);
    }
    function updateQuote () {
        items[activeTestimonial].firstChild.className = "employee-photo-active";
        items[activeTestimonial-1].firstChild.className = "employee-photo";
        items[activeTestimonial+1].firstChild.className = "employee-photo";
        testimonialsQuote.innerHTML = quotes[activeTestimonial];
    }
    function setPositions() {
        var item = items[0];
        if (item.offsetWidth < 200) {
            scrollLeft = 255;
            sliderMaxLeft = -(((box.children.length - 4) * scrollLeft));
        }
        else {
            var width = ((items.length + 5) * item.offsetWidth);
            box.style.width = width + 'px';
            var itemStyle = window.getComputedStyle(item);
            scrollLeft = parseInt(item.offsetWidth) + parseInt(itemStyle.marginLeft) + parseInt(itemStyle.marginRight);
            sliderMaxLeft = -(((box.children.length - 4) * scrollLeft));
        }
    }
    function updateslider(){
        var length = items.length;
        for(var i=0; i < length; i++) {
            box.appendChild(items[i]);
        }
        document.getElementsByClassName(wrapper)[0].appendChild(box);
    }
    function slideToSelected(e) {
        window.clearTimeout(timer);
        length = items.length;
        for (var i=0; i<length; i++) {
            console.log(e.target === items[i]);
            if (e.target === items[i] || e.target === items[i].firstChild || e.target === items[i].lastChild){
                if (i < activeTestimonial){
                    slideRight();
                }
                else if (i > activeTestimonial) {
                    slideLeft();
                }
            }
        }
        timer = window.setInterval(slideLeft, 6000);
    }
    function slideLeft() {
        if (pxToLeft > sliderMaxLeft) {
            pxToLeft = pxToLeft - scrollLeft;
            box.style.left = pxToLeft + 'px';
            if (slider === "testimonial") {
                activeTestimonial++;
            }
        }
        else if (pxToLeft <= sliderMaxLeft && canTransition) {
            pxToLeft = scrollLeft + sliderMaxLeft;
            box.style.transition = "none";
            box.style.left = pxToLeft + "px";
            var item = items.shift(items[0]);
            items.push(item);
            if (slider === "testimonial") {
                var quote = quotes.shift(quotes[0]);
                quotes.push(quote);
            }
            updateslider();
            var boxLeft = window.getComputedStyle(box).getPropertyValue("left");
            if (boxLeft <= (pxToLeft+"px")) {
                box.style.transition = "1s";
                pxToLeft = pxToLeft - scrollLeft;
                box.style.left = pxToLeft + 'px';
            }
            canTransition = false;
        }
        if (slider === "testimonial") {
            updateQuote();
        }
    }
    function slideRight() {
        if (pxToLeft !== 0) {
            pxToLeft = pxToLeft + scrollLeft;
            box.style.left = pxToLeft + 'px';
            if (slider === "testimonial") {
                activeTestimonial--;
            }
        }
        else if (pxToLeft === 0 && canTransition) {
            pxToLeft = -scrollLeft;
            box.style.transition = "none";
            box.style.left = pxToLeft + "px";
            var item = items.pop(items.length-1);
            items.unshift(item);
            if (slider === "testimonial") {
                var quote = quotes.pop(quotes.length-1);
                quotes.unshift(quote);
            }
            updateslider();
            var boxLeft = window.getComputedStyle(box).getPropertyValue("left");
            if (boxLeft >= ("-"+scrollLeft+"px")) {
                box.style.transition = "1s";
                pxToLeft = pxToLeft + scrollLeft;
                box.style.left = pxToLeft + 'px';
            }
            canTransition = false;
        }
        if (slider === "testimonial") {
            updateQuote();
        }
    }
}
document.addEventListener("DOMContentLoaded", function(){
    var prevTestimonial = document.getElementsByClassName("prev-testimonial")[0];
    var nextTestimonial = document.getElementsByClassName("next-testimonial")[0];
    var section = document.getElementsByClassName("testimonials-section")[0];
    prevTestimonial.style.marginTop = section.offsetHeight/2 - prevTestimonial.offsetHeight/2 + "px";
    nextTestimonial.style.marginTop = section.offsetHeight/2 - nextTestimonial.offsetHeight/2 + "px";
})
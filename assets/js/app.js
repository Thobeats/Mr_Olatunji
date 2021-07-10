//alert(screen.width);

// CONTACT SCRIPT
//Select form pills

//Load app


// function loadScreen(){
//     let screenWidth = screen.width;

//     let carouselCaption = document.querySelector('.carousel-caption');

//     let offset = (screenWidth - 15);
//     offset += "px";
    
//     carouselCaption.animate({
//         transform: ['translateY('+ offset +')', 'translateY(-10rem)']
//       }, 1000);
// }

// document.onload = loadScreen();

let contactLinks = document.querySelectorAll(".contact-link");

function clearClass(data, clas){
    data.forEach((dat)=>{
        dat.classList.remove(clas);
    });
}

contactLinks.forEach((btn)=>{
    btn.onclick = function(){
        clearClass(contactLinks, "contact-link-active");
        this.classList.add("contact-link-active");
    }
});

// date picker
$('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true,
    calendarWeeks : true,
    clearBtn: true,
    disableTouchKeyboard: true
});

// END CONTACT SCRIPT
    
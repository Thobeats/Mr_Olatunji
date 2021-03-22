

// CONTACT SCRIPT
//Select form pills

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
    
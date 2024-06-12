var swiper = new Swiper(".menu-slider", {
    grabCursor:true,
    loop:true,
    autoHeight:true,
    centeredSlides:true,
    spaceBetwwen:20,
    pagination: {
        el: '.swiper-pagination',
        clickable:true,
    },
});

let previewContainer = document.querySelector('.menu-preview-container');
let previewBox = previewContainer.querySelectorAll('.menu-preview');

document.querySelectorAll('.menu .box').forEach(menu =>{
    menu.onclick = () =>{
        previewContainer.style.display = 'flex';
        let name = menu.getAttribute('data-name');
        previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
                preview.classList.add('active');
            }
        });
    };
});


previewContainer.querySelector('#close').onclick = () =>{
    previewContainer.style.display ='none';
    previewBox.forEach(close =>{
        close.classList.remove('active');
    });
};

/*prueba*/
// Variable



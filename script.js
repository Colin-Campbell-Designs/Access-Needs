
// SIDE NAVIGATION
const navSlide = () => {
    const sideMenu = document.querySelector('#side-menu');
    const closeBtn = document.querySelector('#close-btn');
    
   const burger = document.getElementById('burgerBtn').addEventListener('click', () => {
        sideMenu.classList.toggle('sideNav-active');
   });

   closeBtn.addEventListener('click', e => {
       e.preventDefault()
        if(sideMenu.className.includes('sideNav-active'));
        sideMenu.classList.remove('sideNav-active')
 
   });
 
}
navSlide()


// VIDEO PLAYER
const videoContainer = document.querySelector('.video-container');
const videoBtn = document.querySelector('#video-btn');

if(videoBtn !== undefined && videoBtn !== null){
    videoBtn.addEventListener('click', e => {
        e.preventDefault()
        videoContainer.classList.toggle('show');
    })
}



// Home page -- FREQUENTLY ASKED QUESTION -- toggle options

const optionPrices = document.querySelector('.option-prices');
const optionTechnical = document.querySelector('.option-technical');

const container1 = document.querySelector('.feature-container-1');
const container2 = document.querySelector('.feature-container-2');

const showContainer = document.querySelectorAll('.show-container');
const hideContainer = document.querySelectorAll('.hide-container');

const arrowPrice = Array.from(document.getElementsByClassName('arrow-container'));

console.log(arrowPrice.length)


arrowPrice.forEach(arrow => {
    arrow.addEventListener('click', e => {
        e.preventDefault();
        e.target.parentElement.nextSibling.nextElementSibling.classList.toggle('show');
    })
})








optionTechnical.addEventListener('click', () => {
    optionTechnical.classList.add('active');
    optionPrices.classList.remove('active');
    container1.style.display = 'none';
    container2.style.display = 'block';
})

optionPrices.addEventListener('click', () => {
    optionPrices.classList.add('active');
    optionTechnical.classList.remove('active');
    container2.style.display = 'none';
    container1.style.display = 'block';
});

//  showContainer.forEach(con => {
//      con.addEventListener('click', e => {
//        e.target.nextElementSibling.classList.toggle('show');
      
//      });
//  });

// arrowPrice.forEach(con => {
//     con.addEventListener('click', e => {
//     //   e.target.parentElement.nextSibling.classList.toggle('show');

//     console.log('clicked');
     
//     });
// });


// arrowPrice1.addEventListener('click', showText);

// function showText(){

// }














        
        
        















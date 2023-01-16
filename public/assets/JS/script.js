var number=document.querySelectorAll(" span h5");
number.forEach(i=>GetNumbers(i));

function GetNumbers(num){
    let target=num.dataset.numbers; 
    let count=setInterval(() =>{
        
        num.textContent=+num.textContent+100000;
        
        if(num.textContent== target )
        {
            clearInterval(count);
        }
    },0.5);
}
let nav=document.querySelector(".navbar");


    window.addEventListener('scroll', ()=> {
            console.log(window.scrollY);
        if(window.scrollY>=20){
            nav.classList.add('active_nav');
        }
        else{
            
            nav.classList.remove('active_nav');
        }
    })

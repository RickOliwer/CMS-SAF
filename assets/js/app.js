console.log('hello world');

const burgerX = () => {
    const burger = document.querySelector('.burger');

    burger.addEventListener('click', () =>{
        //burger
        burger.classList.toggle('toggle');
    });

 
}

burgerX();

function scrollAppear(){


    let card = document.querySelectorAll('.card-scroll');
    
    //med window.innerHeigth så får vi reda på hur stor skärmen är och vi sparar det i en variable screenPosition
    let screenPosition = window.innerHeight;

    //skapar en variable med värdet 780 vilket kommer att översättas till 780 millisekunder
    let interval = 300;

    //vi loopar igenom alla produkterna med en forEach arrow function
    card.forEach((cards, index) =>{
        
        //skapar en variable med funktionen getboundingclientrect som ger information om vad ett element befinner sig i förhållande till var jag är på sidan
        //vi letar efter distansen vi har från toppen av skärmen till elementet cards vi letar efter
        let cardPosition = cards.getBoundingClientRect().top;
        
        //setTimeout-funktionen kommer att skapa en delay på varje produkt
        setTimeout(function (){

            //om vårt element är mindre än skärmen så vill vi lägga till klassen card-appear till elementet  
            if(cardPosition < screenPosition) {
                
                cards.classList.add('card-appear');
            
            } else {
                cards.classList.remove('card-appear');
            }
        }, index * interval); // och vi gör detta i ett intervall med 780 millisekunder delay
        
        
    });

}

//skapar en eventlistner på scroll då vi anropar funktionen scrollAppear
window.addEventListener('scroll', scrollAppear);


const movie = document.querySelector('.movie-container');
const seats = document.querySelectorAll('.seat:not(.Booked)');
const calculations = document.querySelector('#count');
const money = document.querySelector('#total');
const Selection = document.querySelector('#selection');


//let ticketcost = +selection.value;

function updateSelectedCalculation(){
    const selectedseats = document.querySelectorAll('.row .seat.selected');
    console.log(selectedseats);
    /*const seatcount = selectedseats.length;
    console.log(seatcount);*/
    
}

movie.addEventListener('click', (e) =>{
   

    if (e.target.classList.contains('seat') && !e.target.classList.contains('Booked')){
        console.log(e.target.textContent);
        console.log(e.target.classList.toggle('selected'));
         
    }
    updateSelectedCalculation(); 
    
});





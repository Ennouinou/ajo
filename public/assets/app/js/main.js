// Route function
function route(route) {
    window.location.href=route;
}
/* Event choice function */
function displayEventChoice(etat){
    let choices = document.getElementById('event-choice');
    if(etat)
        choices.style.display = 'block';
    else{
        choices.style.display = 'none';
        $('#events').val('NULL');
    }
}

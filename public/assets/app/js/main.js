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
function createVideoInput() {
    let inputVideo = document.createElement("input");
    inputVideo.setAttribute('type','text');
    inputVideo.setAttribute('name','video[]');
    inputVideo.setAttribute('class','form-control mt-1');
    inputVideo.setAttribute('value','');
    document.getElementById('videos').appendChild(inputVideo);
}

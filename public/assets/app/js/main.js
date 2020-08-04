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
function createImageInput() {
    let inputImage = document.createElement("input");
    inputImage.setAttribute('type','file');
    inputImage.setAttribute('name','image[]');
    inputImage.setAttribute('class','form-control mt-1');
    inputImage.setAttribute('value','');
    document.getElementById('images').appendChild(inputImage);
}

function menuChange() {
    let menu = window.location.href.split('/')[3];
    if( menu === ''){
        document.getElementById('home').classList.add('active')
    }
    else{
        if(!menu.includes('?'))
            document.getElementById(menu).classList.add('active');
        else{
            let menuI = menu.split('?')[0];
            document.getElementById(menuI).classList.add('active');
        }
    }
}

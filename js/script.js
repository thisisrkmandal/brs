//close warning function controls warning message on desktop devices
function close_warning(){
    document.getElementById('warning').style.display = 'none';
}

//open-close navigation menu
function open_nav(){
    document.getElementById('hamburger').style.display = 'none';
    document.getElementById('hamburger-close').style.display = 'block';
    document.getElementById('nav').style.transform = 'translateX(0)';
} 

function close_nav(){
    document.getElementById('hamburger').style.display = 'block';
    document.getElementById('hamburger-close').style.display = 'none';
    document.getElementById('nav').style.transform = 'translateX(100%)';
}
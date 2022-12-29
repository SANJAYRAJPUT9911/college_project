
function hidenav() {
    let scrolltop = document.getElementById('tagdiv').getBoundingClientRect();
    if (scrolltop.top <= 110) {
        document.getElementById('shownavbar').classList.add('bcolor');
    } else if (scrolltop.top >= 110) {
        document.getElementById('shownavbar').classList.remove('bcolor');
    }
}


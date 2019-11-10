const ofAcdemic = document.getElementById('ofAcademics');
const comEdu = document.getElementById('comEdu');
//console.log(ofAcdemic);

ofAcdemic.addEventListener('click', animMenu);
comEdu.addEventListener('click', animMenu2);

function animMenu() {
    //console.log('evento activado')
    const subMenu = document.getElementById('ofAcdemic');

    animate(subMenu);
}

function animMenu2() {
    const comEduc = document.getElementById('comEduc');
    animate(comEduc);
}

function animate(obj) {
    obj.animate([
        // keyframes
        {
            transform: 'translateY(-25px)',
            opacity: '0'
        }, {
            transform: 'translateY(0px)',
            opacity: '1'
        }
    ], {
        // timing options
        duration: 400,
        iterations: 1
    });
}
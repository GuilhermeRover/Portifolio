require('./bootstrap');

// Timer with Date-fns
if (!(document.getElementsByClassName("dataTime").length === 0)) {
    setInterval(() => {
        let time = format( new Date(), 'dd/MM/yyyy HH:mm:ss')
        document.getElementsByClassName("dataTime")[0].innerHTML = time;
        document.getElementsByClassName("dataTime")[1].innerHTML = time;
    }, 1000);
};

/*
// anime.js
import anime from 'animejs/lib/anime.es';
    
anime.timeline({
    easing: 'easeOutExpo',
})
.add({
    targets: '.navbar',
    width: [ '0px', '100%' ],
})
.add({
    targets: '.nav-btn',
    opacity: [0, 1],
    translateY: [20, 0],
    delay: (el, i) => 100 * i,
    offset: '-=500',
})
.add({
    targets: '.logo',
    //height: [ '0rem', '5rem' ],
    opacity: [0, 1],
    translateX: [-200, 0],
    offset: '-=400',
})
.add({
});

anime({
    easing: 'easeOutExpo',
    targets: '.first-section',
    opacity: [0, 1],
    translateY: [-100, 0],
    delay: 2600,
});
*/

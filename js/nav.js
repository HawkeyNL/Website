window.onload = () => {
    window.onscroll = () => {
        navigation();
    };

    navigation();

    let anchorlinks = document.querySelectorAll('a[href^="#"]');

    for (let item of anchorlinks) {
        item.addEventListener('click', (e)=> {
            let hashval = item.getAttribute('href');
            let target = document.querySelector(hashval);
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            history.pushState(null, null, hashval);
            e.preventDefault();
        });
    }
};

function navigation() {
    if (window.scrollY === 0) {
        document.querySelectorAll('.navbar nav').forEach(el => {
            el.style.opacity = 0;
            el.style.transition = '0.5s';
        });

        document.querySelectorAll('.navbar').forEach(el => {
            el.style.backgroundColor = 'transparent';
            el.style.transition = '0.5s';
        });

        document.querySelectorAll('#logo span').forEach(el => {
            el.style.background = 'linear-gradient(to right top, #00FFCB 0%, #00FF5C 100%)';
            el.style.color = '#FFFFFF';
            el.style.transition = '0.5s';
        });
    } else {
        document.querySelectorAll('.navbar nav').forEach(el => {
            el.style.opacity = 1;
            el.style.transition = '0.5s';
        });

        document.querySelectorAll('.navbar').forEach(el => {
            el.style.backgroundColor = '#B9B9B9';
            el.style.transition = '0.5s';
        });

        document.querySelectorAll('#logo span').forEach(el => {
            el.style.background = '#FFFFFF';
            el.style.color = '#00FF5C';
            el.style.transition = '0.5s';
        });
    }
}

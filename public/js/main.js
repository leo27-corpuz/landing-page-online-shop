
    function toggleBurger(){
        let element = document.getElementById('list-of-view');
        element.classList.toggle("dnons");
    }
    let images = document.getElementsByName('imghide[]');
    let x = 0;
    function slider(){
        if(x<images.length){
            x = x+1;
        }else{
            x = 1;
        }
        document.getElementById("imageslide").src=images[x-1].value;
    }
    setInterval(slider, 4000);

let typed = new Typed('#typed', {
    strings:[
        'Shop Now',
        'Search Our Product',
        'Hava Fun'
    ],
    typeSpeed: 100,
    backSpeed: 100,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: true
})
    

  
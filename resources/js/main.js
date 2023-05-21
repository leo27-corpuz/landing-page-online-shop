$(document).ready(function(){
    $(".burgers").click(function(){
        $(".list-of-view").toggleClass('dnons');
    });
});
    let images = json_encode($images);
    let x = 0;

    function slider(){
        if(x<images.length){
            x = x+1;
        }else{
            x = 1;
        }
        document.getElementById("imageslide").src=images[x-1];
    }

    setInterval(slider, 4000);
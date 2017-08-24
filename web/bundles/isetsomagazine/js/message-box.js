$(".mb-control").on("click",function(){
    var box = $($(this).data("box"));
    if(box.length > 0){
        box.toggleClass("open");
        
        var sound = box.data("sound");
        
        if(sound === 'alert')
            playAudio('alert');
        
        if(sound === 'fail')
            playAudio('fail');
        
    }        
    return true;
});

$(".mb-control-close").on("click",function(){
   $(this).parents(".message-box").removeClass("open");
    playAudio('fail');
   return true;
}); 
function playAudio(file){
    if(file === 'alert')
        document.getElementById('audio-alert').play();

    if(file === 'fail')
        document.getElementById('audio-fail').play();    
}
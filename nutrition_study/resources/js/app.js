import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// jqueryの記述
$(function(){

    $('#guest-show-submit').click(function(){
        $('.show-answer').fadeIn();
        $('#show-answer-commentary').fadeIn();
        $('#guest-show-submit').fadeOut();
        $('#show-back').fadeIn();
        const selectionAnswer =document.getElementsByName('selection-answer');
              if(selectionAnswer.checked){
                console.log("クリックされました");
              }else{
                console.log("クリックされなかった");
              }
    });



});
// ここまで
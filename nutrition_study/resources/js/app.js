import { get } from 'jquery';
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// jqueryの記述
$(function(){
// guest.show
    $('#guest-show-submit').click(function(){
        $('#show-answer').fadeIn();
        
    });

//quiz.index
    $('.quiz-index-choices-button').on("click",function(){
        $(this).parent().find(".quiz-index-choices").fadeIn();
        $(this).parent().find('.quiz-index-choices-button').hide();
        $(this).parent().find('.quiz-index-choices-button-hidden').fadeIn(0.2);
        // $('.quiz-index-choices').fadeIn();
        // $('.quiz-index-choices-button').fadeOut();
        // $('.quiz-index-choices-button-hidden').fadeIn();
    });
    $('.quiz-index-choices-button-hidden').click(function(){
        $(this).parent().find('.quiz-index-choices').hide();
        $(this).parent().find('.quiz-index-choices-button-hidden').hide();
        $(this).parent().find('.quiz-index-choices-button').fadeIn(0.2);
        // $('.quiz-index-choices').fadeOut();
        // $('.quiz-index-choices-button-hidden').fadeOut();
        // $('.quiz-index-choices-button').fadeIn();
    });




});
// ここまで
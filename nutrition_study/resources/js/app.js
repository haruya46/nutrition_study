import { get } from 'jquery';
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// jqueryの記述
$(function(){
// guest.show
    $('#show-answer-button').click(function(){
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



    
    //quiz.index
        $('.web-site-btn').on("click",function(){
            $(this).parent().find(".web-site").fadeIn();
            $(this).parent().find('.movie').hide();
            // $('.quiz-index-choices').fadeIn();
            // $('.quiz-index-choices-button').fadeOut();
            // $('.quiz-index-choices-button-hidden').fadeIn();
        });
        $('.movie-btn').on("click",function(){
            $(this).parent().find(".movie").fadeIn();
            $(this).parent().find('.web-site').hide();
            // $('.quiz-index-choices').fadeIn();
            // $('.quiz-index-choices-button').fadeOut();
            // $('.quiz-index-choices-button-hidden').fadeIn();
        });
    });
// ここまで
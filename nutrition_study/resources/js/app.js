import { get } from 'jquery';
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// jqueryの記述
$(function(){
// guest.show
    $('#guest-show-submit').click(function(){
        $('.show-answer').fadeIn();
        $('#show-answer-commentary').fadeIn();
        $('#guest-show-submit').fadeOut();
        $('#show-back').fadeIn();
    });

//quiz.index
    $('#quiz-index-choices-button').click(function(){
        $('#quiz-index-choices').fadeIn();
        $('#quiz-index-choices-button').fadeOut();
        $('#quiz-index-choices-button-hidden').fadeIn();
    });
    $('#quiz-index-choices-button-hidden').click(function(){
        $('#quiz-index-choices').fadeOut();
        $('#quiz-index-choices-button-hidden').fadeOut();
        $('#quiz-index-choices-button').fadeIn();
    });




});
// ここまで
//Código responsável pela dinâmica do formulário de criação do quiz
$(document).ready(function() {
    // Esconder os campos de resposta correta, resposta incorreta e texto
    $('#correctAnswerContainer, #incorrectAnswerContainer, #textAnswerContainer').hide();

    // Mostrar ou esconder os campos de resposta correta, resposta incorreta e texto
    $('input[name="answerType"]').on('change', function() {
        if (this.value === 'multipla') {
        $('#correctAnswerContainer, #incorrectAnswerContainer').show();
        $('#textAnswerContainer').hide();
        } else if (this.value === 'texto') {
        $('#textAnswerContainer').show();
        $('#correctAnswerContainer, #incorrectAnswerContainer').hide();
    }
    });
});
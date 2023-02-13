var controllInput =1; 

function addInput() {

    controllInput++;
    document.getElementById('quiz-create-form').insetAdjacentHTML('beforeend',' <div id="quiz-create-form" class="container"><form id="form-quiz-create" action="/homequiz" method="POST" enctype="multipart/form-data"><x-adminlte-input id="answer'+ controllInput +'" name="answer'+ controllInput +'" label="Resposta correta:" placeholder="Digite a resposta correta:" required/></form></div>' );
    
}


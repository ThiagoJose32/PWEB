const btn_Cadastrar = document.querySelector(".btn_Cadastrar");
const modalCadastrar = document.querySelector(".dialog_Cadastrar");
const btn_CadastrarSair = document.querySelector(".btn_CadastrarSair");

const btn_Entrar = document.querySelector(".btn_Entrar");
const modalEntrar = document.querySelector(".dialog_Entrar");
const btn_EntrarSair = document.querySelector(".btn_EntrarSair");

btn_Cadastrar.onclick = function() {
    modalCadastrar.showModal();
}

btn_CadastrarSair.onclick = function() {
    modalCadastrar.close();
}


btn_Entrar.onclick = function() {
    modalEntrar.showModal();
}

btn_EntrarSair.onclick = function() {
    modalEntrar.close();
}

//Fecha o popup se o usuario clicar fora dele
window.onclick = function(event) {
    if(event.target == modalCadastrar || event.target == modalEntrar) {
        modalCadastrar.close();
        modalEntrar.close();
    }
}

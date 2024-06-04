const abrirModal = document.getElementById("MaisInfos");

abrirModal.addEventListener('click', function (){
    const caixaModal = document.getElementById('modal-login-div');
    caixaModal.style.display = 'flex';
})

const btnDeletar = document.getElementById("modal-button-delete")

btnDeletar.addEventListener('click', ()=>{
    const caixaModalLogin = document.getElementById('modal-verification');
    caixaModalLogin.style.display = 'flex';
})

const btnVoltarVerificacao = document.getElementById("modal-verification-form-back")

btnVoltarVerificacao.addEventListener("click", ()=>{
    const caixaModalLogin = document.getElementById('modal-verification');
    alert("voltou")
    caixaModalLogin.style.display = 'none';
    
})

const fecharModal = document.getElementById("modal-button-back")

fecharModal.addEventListener('click', ()=>{
    const caixaModal = document.getElementById('modal-login-div');
    caixaModal.style.display = 'none';
})

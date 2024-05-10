const botao = document.getElementById('update');
const atualizarCadastro = document.querySelector(".container-form")
const send = document.getElementById('send')
const closeUpdate = document.getElementById('close-update')
const fixed = document.querySelector('.fixed')


botao.addEventListener('click',function(){
  atualizarCadastro.classList.remove('remove')
  botao.classList.toggle('remove')
  fixed.classList.toggle('fixed')
})
send.addEventListener('click',function(){
  atualizarCadastro.classList.toggle('remove')
  botao.classList.toggle('remove')
  fixed.classList.toggle('fixed')

})

closeUpdate.addEventListener('click',function(){
  atualizarCadastro.classList.toggle('remove')
  botao.classList.toggle('remove')
  fixed.classList.toggle('fixed')

})



function capturarValores() {

  const nome = document.getElementById('nome').value;
  const idade = document.getElementById('idade').value; 

  const rua = document.getElementById('rua').value; 
  const numero = document.getElementById('numero').value; 
  const comple = document.getElementById('comple').value; 
  const bairro = document.getElementById('bairro').value;
  const estado = document.getElementById('estado').value;

  const biografia = document.getElementById('biografia').value;
  const imageInput = document.getElementById('imageInput');
  const boxFoto = document.getElementById('box-foto');
  const imgInicial = document.getElementById('img-inicial');


  if (!nome || !idade || !rua ||!numero ||!bairro ||!estado || !biografia) { alert("Por favor, preencha todos os campos antes de enviar."); return; }

  const valorNome = document.querySelector('#box-info .nome'); 
  valorNome.innerHTML = nome; 
  
  const valorIdade = document.querySelector('#box-info .idade'); 
  valorIdade.innerHTML = idade;
  
  const valorEndereco = document.querySelector('#box-info .endereco'); 
  valorEndereco.innerHTML = `${rua}, ${numero} - ${comple}`; 

  const valorBairro = document.querySelector('#box-info .bairro');
  valorBairro.innerHTML = bairro;

  const valorEstado = document.querySelector('#box-info .estado');
  valorEstado.innerHTML = estado;
  
  const valorBiografia = document.querySelector(".bio"); 
  valorBiografia.textContent = biografia;

  const file = imageInput.files[0];
  const reader = new FileReader();

  reader.onload = function(event) {
    imgInicial.src = event.target.result;
    boxFoto.innerHTML = '';
    boxFoto.appendChild(imgInicial);
  };

  reader.readAsDataURL(file);

}; 



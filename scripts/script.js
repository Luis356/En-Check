const form = document.getElementById("form");
const nome = document.getElementById("nome");
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const confirmasenha = document.getElementById("c-senha");
const ra = document.getElementById("ra");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  const valorNome = nome.value;
  const valorEmail = email.value;
  const valorSenha = senha.value;
  const valorConfirmaSenha = confirmasenha.value;
  const valorRa = ra.value;

  //NOME

  if (valorNome === "") {
    setErrorFor(nome, "O nome completo é obrigatório.");
  } else {
    setSuccessFor(nome);
  }

  //EMAIL

  if (valorEmail === "") {
    setErrorFor(email, "O email é obrigatório.");
  } else if (!checkEmail(valorEmail)) {
    setErrorFor(email, "Digite um email valido.");
  } else {
    setSuccessFor(email);
  }

  //SENHA

  if (valorSenha === "") {
    setErrorFor(senha, "A senha é obrigatória.");
  } else if (valorSenha.lenght < 7) {
    setErrorFor(senha, "A senha precisa ter no mínimo 7 caracteres.");
  } else {
    setSuccessFor(senha);
  }

  // CONFIRMAÇÃO DA SENHA

  if (valorConfirmaSenha === "") {
    setErrorFor(confirmasenha, "A confirmação da senha é obrigatória.");
  } else if (valorConfirmaSenha !== valorSenha) {
    setErrorFor(confirmasenha, "As senhas não conferem.");
  } else {
    setSuccessFor(confirmasenha);
  }

  //Ra

  if (valorRa.toString().length == 11) {
    setSuccessFor(ra);
  } else {
    setErrorFor(ra, "Digite um R.A valido.");
  }
}
function setErrorFor(input, mensagem) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  //adicionando a mensagem
  small.innerText = mensagem;
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  formControl.className = "form-control success";
}
function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

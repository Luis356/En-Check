function checkForm() {
  // Fetching values from all input fields and storing them in variables.
  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;
  var senha = document.getElementById("senha").value;
  var c_senha = document.getElementById("c_senha").value;
  var cep = document.getElementById("cep").value;

  //Check input Fields Should not be blanks.
  if (nome == "" || email == "" || senha == "" || c_senha == "" || cep == "") {
    ("Por favor preencha todos os campos.");
    return false;
  } else {
    //Notifying error fields
    var name = document.getElementById("nome");
    var mail = document.getElementById("email");
    var senhas = document.getElementById("senha");
    var csenha = document.getElementById("c_senha");
    var cepp = document.getElementById("cep");
    //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
    if (
      name.innerHTML == "Nome" ||
      mail.innerHTML == "E-mail" ||
      senhas.innerHTML == "senha" ||
      csenha.innerHTML == "Sua senha" ||
      cepp.innerHTML == "seu cep"
    ) {
      alert(
        "Por favor, preencha o formul&aacute;rio com informa&ccedil;&otilde;es v&aacute;lidas"
      );
      return false;
    } else {
      //Submit Form When All values are valid.
      document.getElementById("formulario").submit();
      window.location = "cad.php";
      return true;
    }
  }
}

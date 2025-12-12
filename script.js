function validarFormCadastro() {
    // AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    var usuarioEl = document.getElementById("usuario");
    if (!usuarioEl)
        return false;
    var senhaEl = document.getElementById('senha');
    if (!senhaEl)
        return false;
    var emailEl = document.getElementById("email");
    if (!emailEl)
        return false;
    if (usuarioEl.value.trim() === "" || senhaEl.value.trim() === "" || emailEl.value.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    }
    return true;
}
function validarFormLogin() {
    // AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    var senhaEl = document.getElementById('senha');
    if (!senhaEl)
        return false;
    var emailEl = document.getElementById("email");
    if (!emailEl)
        return false;
    if (senhaEl.value.trim() === "" || emailEl.value.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    }
    return true;
}
function validarEmail() {
    var emailEl = document.getElementById("email");
    if (!emailEl)
        return;
    var classesEmail;
    var iconeEmail;
    var msgEl = document.getElementById("msgEmail");
    if (!msgEl)
        return;
    classesEmail = emailEl.classList;
    var iconeEmailEl = document.getElementById("iconeEmail");
    if (!iconeEmailEl)
        return;
    iconeEmail = iconeEmailEl.classList;
    if (emailEl.value.indexOf("@") == -1
        || emailEl.value.indexOf(".") == -1
        || emailEl.value.indexOf(" ") != -1) {
        classesEmail.remove("is-success");
        iconeEmail.remove("fa-check");
        classesEmail.add("is-danger");
        iconeEmail.add("fa-exclamation-triangle");
        msgEl.innerHTML = "Email inválido!";
    }
    else {
        classesEmail.remove("is-danger");
        iconeEmail.remove("fa-exclamation-triangle");
        classesEmail.add("is-success");
        iconeEmail.add("fa-check");
        msgEl.innerHTML = "";
    }
}
function validarUsuario() {
    var usuarioEl = document.getElementById("usuario");
    var classesUsuario = usuarioEl.classList;
    var iconeUsuario = document.getElementById("iconeUsuario").classList;
    var msgEl = document.getElementById("msgUsuario");
    if (!msgEl)
        return;
    if (usuarioEl.value.trim() === "") {
        classesUsuario.remove("is-success");
        iconeUsuario.remove("fa-check");
        classesUsuario.add("is-danger");
        iconeUsuario.add("fa-exclamation-triangle");
        msgEl.innerHTML = "Digite o seu usuário!";
    }
    else {
        classesUsuario.remove("is-danger");
        iconeUsuario.remove("fa-exclamation-triangle");
        classesUsuario.add("is-success");
        iconeUsuario.add("fa-check");
        msgEl.innerHTML = "";
    }
}
function validarSenha() {
    var senhaEl = document.getElementById("senha");
    if (!senhaEl)
        return;
    var classesSenha = senhaEl.classList;
    var iconeSenha = document.getElementById("iconeSenha").classList;
    var msgEl = document.getElementById("msgSenha");
    if (!msgEl)
        return;
    if (senhaEl.value.trim() === "" || (senhaEl.value.length < 8 || senhaEl.value.length > 20)) {
        classesSenha.remove("is-success");
        iconeSenha.remove("fa-check");
        classesSenha.add("is-danger");
        iconeSenha.add("fa-exclamation-triangle");
        msgEl.innerHTML = "A senha deve ter entre 8 e 20 caracteres!";
    }
    else {
        classesSenha.remove("is-danger");
        iconeSenha.remove("fa-exclamation-triangle");
        classesSenha.add("is-success");
        iconeSenha.add("fa-check");
        msgEl.innerHTML = "";
    }
}
function abrirFecharModal() {
    var modalEl = document.getElementById("modal");
    if (modalEl.classList.contains("is-active")) {
        modalEl.classList.remove("is-active");
    }
    else {
        modalEl.classList.add("is-active");
    }
}

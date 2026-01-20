function validarFormCadastro() {
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
    $(document).ready(function () {
        var _a;
        var email = (_a = $("#email").val()) === null || _a === void 0 ? void 0 : _a.toString();
        if (!email)
            return;
        if (email.indexOf("@") == -1
            || email.indexOf(".") == -1
            || email.indexOf(" ") != -1) {
            $("#email").removeClass("is-succsess");
            $("#iconeEmail").removeClass("fa-check");
            $("#email").addClass("is-danger");
            $("#iconeEmail").addClass("fa-exclamation-triangle");
            $("#msgEmail").html("Email inválido!");
        }
        else {
            $("#email").removeClass("is-danger");
            $("#iconeEmail").removeClass("fa-exclamation-triangle");
            $("#email").addClass("is-success");
            $("#iconeEmail").addClass("fa-check");
            $("#msgEmail").html("");
        }
    });
}
function validarUsuario() {
    var _a;
    var usuarioEl = document.getElementById("usuario");
    var usuario = (_a = $("#usuario").val()) === null || _a === void 0 ? void 0 : _a.toString();
    if (!usuario)
        return;
    if (usuario.trim() === "") {
        $("#usuario").removeClass("is-success");
        $("#iconeUsuario").removeClass("fa-check");
        $("#usuario").addClass("is-danger");
        $("#iconeUsuario").addClass("fa-exclamation-triangle");
        $("#msgUsuario").html("Digite o seu usuário!");
    }
    else {
        $("#usuario").removeClass("is-danger");
        $("#iconeUsuario").removeClass("fa-exclamation-triangle");
        $("#usuario").addClass("is-success");
        $("#iconeUsuario").addClass("fa-check");
        $("#msgUsuario").html("");
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
$(document).ready(function () {
    $("#modalCadastrar").click(function () {
        $("div.modal").addClass("is-active");
    });
});

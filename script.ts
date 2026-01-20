function validarFormCadastro(): boolean {

    const usuarioEl = document.getElementById("usuario") as HTMLInputElement;
    if (!usuarioEl) return false;

    const senhaEl = document.getElementById('senha') as HTMLInputElement;
    if (!senhaEl) return false;

    const emailEl = document.getElementById("email") as HTMLInputElement;
    if (!emailEl) return false;

    if (usuarioEl.value.trim() === "" 
    || senhaEl.value.trim() === "" 
    || emailEl.value.trim() === "") {
        
        alert("Preencha todos os campos!");
        return false;
    }

    return true;
}

function validarFormLogin(): boolean {
    // AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA

    const senhaEl = document.getElementById('senha') as HTMLInputElement;
    if (!senhaEl) return false;

    const emailEl = document.getElementById("email") as HTMLInputElement;
    if (!emailEl) return false;

    if (senhaEl.value.trim() === "" || emailEl.value.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    }

    return true;
}

function validarEmail(): void {

    $(document).ready(function () {

        let email: string | undefined = $("#email").val()?.toString();
        if (!email) return;

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

function validarUsuario(): void {
    const usuarioEl = document.getElementById("usuario") as HTMLInputElement

    let usuario: string | undefined = $("#usuario").val()?.toString();
    if(!usuario) return;

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

function validarSenha(): void {
    const senhaEl = document.getElementById("senha") as HTMLInputElement;
    if (!senhaEl) return;

    let classesSenha: DOMTokenList = senhaEl.classList;
    let iconeSenha: DOMTokenList = document.getElementById("iconeSenha")!.classList;

    const msgEl = document.getElementById("msgSenha") as HTMLElement | null;
    if (!msgEl) return;

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
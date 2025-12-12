function validarFormCadastro(): boolean {
// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    const usuarioEl = document.getElementById("usuario") as HTMLInputElement;
    if (!usuarioEl) return false;

    const senhaEl = document.getElementById('senha') as HTMLInputElement;
    if (!senhaEl) return false;

    const emailEl = document.getElementById("email") as HTMLInputElement;
    if (!emailEl) return false;

    if(usuarioEl.value.trim() === "" || senhaEl.value.trim() === "" || emailEl.value.trim() === "") {
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

    if(senhaEl.value.trim() === "" || emailEl.value.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    }

    return true;
}

function validarEmail(): void {

    const emailEl = document.getElementById("email") as HTMLInputElement;
    if (!emailEl) return;

    let classesEmail: DOMTokenList;
    let iconeEmail: DOMTokenList;

    const msgEl = document.getElementById("msgEmail") as HTMLElement | null;
    if (!msgEl) return;

    classesEmail = emailEl.classList;

    const iconeEmailEl = document.getElementById("iconeEmail") as HTMLElement | null;
    if (!iconeEmailEl) return;

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

function validarUsuario(): void {
    const usuarioEl = document.getElementById("usuario") as HTMLInputElement

    let classesUsuario: DOMTokenList = usuarioEl.classList;
    let iconeUsuario: DOMTokenList = document.getElementById("iconeUsuario")!.classList;
    
    const msgEl = document.getElementById("msgUsuario") as HTMLElement | null;
    if (!msgEl) return;

    if(usuarioEl.value.trim() === "") {
        classesUsuario.remove("is-success");
        iconeUsuario.remove("fa-check");

        classesUsuario.add("is-danger");
        iconeUsuario.add("fa-exclamation-triangle");

        msgEl.innerHTML = "Digite o seu usuário!";
    }
    else{
        classesUsuario.remove("is-danger");
        iconeUsuario.remove("fa-exclamation-triangle");

        classesUsuario.add("is-success");
        iconeUsuario.add("fa-check");

        msgEl.innerHTML = "";
    }

}

function validarSenha(): void {
    const senhaEl = document.getElementById("senha") as HTMLInputElement;
    if (!senhaEl) return;

    let classesSenha: DOMTokenList = senhaEl.classList;
    let iconeSenha: DOMTokenList = document.getElementById("iconeSenha")!.classList;

    const msgEl = document.getElementById("msgSenha") as HTMLElement | null;
    if (!msgEl) return;

    if(senhaEl.value.trim() === "" || (senhaEl.value.length < 8 || senhaEl.value.length > 20)) {
        classesSenha.remove("is-success");
        iconeSenha.remove("fa-check");

        classesSenha.add("is-danger");
        iconeSenha.add("fa-exclamation-triangle");

        msgEl.innerHTML = "A senha deve ter entre 8 e 20 caracteres!";
    }
    else{
        classesSenha.remove("is-danger");
        iconeSenha.remove("fa-exclamation-triangle");

        classesSenha.add("is-success");
        iconeSenha.add("fa-check");

        msgEl.innerHTML = "";
    }

}

function abrirFecharModal(): void{
    const modalEl = document.getElementById("modal") as HTMLElement;
    
    if(modalEl.classList.contains("is-active")){
        modalEl.classList.remove("is-active");
    }
    else{
        modalEl.classList.add("is-active");
    }
}
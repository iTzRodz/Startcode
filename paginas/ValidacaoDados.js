function ValidarCPF() {
    var cpf = document.getElementById('CPF')
    if(cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += '.'
    } else if(cpf.value.length == 11) {
        cpf.value += '-'
    }
}

function ValidarTel() {
    var cpf = document.getElementById('tel')
    if(cpf.value.length == 0) {
        cpf.value += '('
    } else if(cpf.value.length == 3) {
        cpf.value += ') '
    }else if(cpf.value.length == 10) {
        cpf.value += '-'
    }
}
// cpf.value += '-'
// cpf.value +=')'
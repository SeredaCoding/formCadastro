function formatoTelefoneInput(input) {
    const value = input.value.replace(/\D/g, '');
    const length = value.length;

    if (length >= 11) {
        input.value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7, 11)}`;
    } else if (length >= 6) {
        input.value = `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6, 10)}`;
    } else if (length >= 2) {
        input.value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
    }
}

document.getElementById('telefone_contato').addEventListener('input', function() {
    formatoTelefoneInput(this);
});

document.getElementById('celular_contato').addEventListener('input', function() {
    formatoTelefoneInput(this);
});

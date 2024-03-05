const checkboxMedico = document.getElementById('isMedico');
const divMedicForms = document.getElementById('medicForms');
checkboxMedico.addEventListener('change', function () {

    if (this.checked) {
        divMedicForms.style.display = 'block';
    } else {
        divMedicForms.style.display = 'none';
    }
});
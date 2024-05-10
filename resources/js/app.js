import './bootstrap';

// Phone mask script
var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
opt = {
    onKeyPress: function(val, e, field, options) {
        field.mask(maskBehavior.apply({}, arguments), options);
        }
};
$('#phone-masked').mask(maskBehavior, opt);


// Steps Controls
var step = 0
var step_titles = ['Dados Pessoais', 'Informações da Vaga', 'Currículo', 'Enviar']
document.getElementById('btnBack').style.display = 'none'

document.getElementById('btnNext').addEventListener('click', () => {
    
    document.getElementById('step-' + step).requestSubmit()

    if(document.getElementById('step-' + step).checkValidity()){
        if(step < 2){
            step ++;
            setFormStep(step)
        }
        else if(step == 2){
            step = 3;
            formatFullForm()
        }
    }
})

document.getElementById('btnBack').addEventListener('click', () => {
    if(step > 0){
        step --;
        setFormStep(step)
    }
})

function setFormStep(step) {
    document.getElementById('step-0').style.display = 'none'
    document.getElementById('step-1').style.display = 'none'
    document.getElementById('step-2').style.display = 'none'
    document.getElementById('step-3').style.display = 'none'
    document.getElementById('step-' + step).style.display = 'block'

    for (const [index, node] of  Array.from(document.getElementById('form-step-vizualizer').children).entries()) {
        node.classList.remove('bg-primary')
        node.classList.remove('bg-light')
        if(index <= step) node.classList.add('bg-primary')
        else node.classList.add('bg-light')
    }

    document.getElementById('form-step-title').innerText = step_titles[step]

    step == 2 ? document.getElementById('btnNext').innerText = 'Confirmar' : step == 3 ? document.getElementById('btnNext').innerText = 'Enviar' : document.getElementById('btnNext').innerText = 'Avançar'
    step == 0 ? document.getElementById('btnBack').style.display = 'none' : document.getElementById('btnBack').style.display = 'block'
    
}

function formatFullForm() {

    var form_fields = document.getElementsByClassName('form-field')
    var full_form_fields = document.getElementsByClassName('full-form-field')
    var full_form_field_labels = document.getElementsByClassName('full-form-field-label')

    for (const [index, node] of  Array.from(form_fields).entries()) {
        if(index == 6){
            full_form_fields[index].files = node.files
            full_form_field_labels[index].value = node.files[0].name
        }else{
            full_form_fields[index].value = node.value
            full_form_field_labels[index].value = node.value
        }
    }

    setFormStep(step)
}

//Form Bootstrap Validation
var forms = document.querySelectorAll('.needs-validation')

Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
})
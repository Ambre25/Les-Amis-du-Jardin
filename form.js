const submit = document.querySelector('#btn-submit'),
    form = document.querySelector('form');

submit.addEventListener('click', (e) => {
        e.preventDefault();
        form.reset();
        document.getElementById('merci').style.display = 'block';
    
})
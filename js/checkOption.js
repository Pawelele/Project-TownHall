const options = document.querySelectorAll('.radio');
const labels = document.querySelectorAll('.option');


const check = (e) => {
        e.target.closest('label').classList.add('option-active');
        e.target.closest('label').classList.remove('option');
        const currentInputId = e.target.id;

    options.forEach(el => {
        console.log(el.checked);
        if(el.checked == false)
        {
            el.closest('label').classList.remove('option-active');
            el.closest('label').classList.add('option');

        }
    })
}

options.forEach(el => {
    el.addEventListener('click', check);
})


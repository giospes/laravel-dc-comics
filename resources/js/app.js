import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteSubmitButtons = document.querySelectorAll('.delete-button');
const modal = document.getElementById('deleteModal')

deleteSubmitButtons.forEach((button) =>{
    button.addEventListener('click', (e) =>{
        e.preventDefault();
        
        const dataTitle = button.getAttribute('data-item-title')
        

        const bootstrapModal = new bootstrap.Modal(modal)
        bootstrapModal.show()
        
        const modalItemTitle= modal.querySelector('#modal-item-title')
        modalItemTitle.textContent = dataTitle

        const buttonDelete = modal.querySelector('button.btn-danger')

        buttonDelete.addEventListener('click', ()=> {
            button.parentElement.submit()
        })
         
    })
})

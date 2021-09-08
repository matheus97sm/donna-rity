import { toastify } from './toastify';

export default function form() {
  const form = document.querySelector('form');
  const formFirstCheckbox = document.querySelector('form h3 input[type="checkbox"]');
  const formCheckboxs = document.querySelectorAll('.cleaningType input[type="checkbox"]');
  const formCheckboxsLabels = document.querySelectorAll('.cleaningType .wpcf7-list-item-label');
  const formContents = document.querySelectorAll('.form-content-wrapper');

  if (!formCheckboxsLabels[0]) return;

  form.noValidate = false;

  formCheckboxsLabels.forEach((checkbox, index) => {
    checkbox.innerText = '';

    checkbox.addEventListener('click', e => {
      checkbox.classList.toggle('active');

      formContents[index].classList.toggle('active');
    });
  });

  form.addEventListener('submit', e => {
    const checkboxArray = Array.from(formCheckboxs);

    const atLeastOneChecked = checkboxArray.find(checkbox => {
      return !!checkbox.checked;
    });


    if (!atLeastOneChecked) {
      const errorTitle = 'Required Field.';
      const errorMessage = 'You need to select at least one option.';
      
      formFirstCheckbox.required = true;

      toastify(errorTitle, errorMessage, 'error', 5000);
    }
  });
}

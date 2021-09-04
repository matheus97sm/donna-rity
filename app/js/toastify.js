export function toastify(title, message, type, time) {
  const toastifyElement = document.createElement('div');

  toastifyElement.classList.add('toastify', type);
  toastifyElement.innerHTML = `
    <strong>${title}</strong>
    <span>${message}</span>
  `;

  document.body.appendChild(toastifyElement);

  window.setTimeout(() => {
    toastifyElement.classList.add('active');
  }, 10);

  window.setTimeout(() => {
    toastifyElement.classList.remove('active');
  }, time);

  window.setTimeout(() => {
    toastifyElement.remove();
  }, time + 10);
}
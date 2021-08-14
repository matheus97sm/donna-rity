export default function setColor(items, colors) {
  const itemsArray = document.querySelectorAll(items);

  if (!itemsArray || !colors) return null;

  let actual = 0;

  itemsArray.forEach(item => {
    item.classList.add(colors[actual]);

    actual = actual === colors.length - 1 ? 0 : actual + 1;
  });
}
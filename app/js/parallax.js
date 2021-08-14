export default function parallax(classes) {
  const parallaxImgs = document.querySelectorAll(classes)

  if (!parallaxImgs) return null;

  let actual = 0;

  parallaxImgs[0].classList.add('active');

  window.setInterval(() => {
    parallaxImgs[actual].classList.remove('active');
    
    actual = actual === parallaxImgs.length - 1 ? 0 : actual + 1;
    
    parallaxImgs[actual].classList.add('active');
  }, 5000)
}

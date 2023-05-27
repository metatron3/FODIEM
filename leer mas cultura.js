const buttons = document.querySelectorAll('.read-more-btn');
const textElements = document.querySelectorAll('.hideText');

buttons.forEach((button, cultura) => {
  button.addEventListener('click', () => {
    const textElement = textElements[cultura];
    textElement.classList.toggle('showText');
  });
});
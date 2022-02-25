// Create an intersection observer with default options, that
// triggers a class on/off depending on an element’s visibility
// in the viewport
const animationObserver = new IntersectionObserver((entries, observer) => {
  for (const entry of entries) {
    entry.target.classList.toggle('build-in-animate', entry.isIntersecting)
  }
});

// Use that IntersectionObserver to observe the visibility
// of some elements
for (const element of document.querySelectorAll('.build-in-scale-up')) {
  animationObserver.observe(element);
}
for (const element of document.querySelectorAll('.build-in-scale-up-fade-in')) {
  animationObserver.observe(element);
}
for (const element of document.querySelectorAll('.build-in-slide-left')) {
  animationObserver.observe(element);
}
for (const element of document.querySelectorAll('.build-in-slide-left-long')) {
  animationObserver.observe(element);
}
for (const element of document.querySelectorAll('.scale')) {
  animationObserver.observe(element);
}
 

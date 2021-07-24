//パララックス縦
const parallax = document.querySelectorAll('.parallax-img');
new simpleParallax(parallax, {
  scale: 1.2,
  delay: 0.4,
  orientation: 'down'
});
const parallax03 = document.querySelectorAll('.parallax');
new simpleParallax(parallax03, {
  scale: 1.2,
  delay: 0.4,
  overflow: true,
  orientation: 'down'
});
//パララックス横右
const parallax01 = document.querySelectorAll('.parallax-rt');
new simpleParallax(parallax01, {
  orientation: 'right',
  scale: 1.3
});
const parallax02 = document.querySelectorAll('.parallax-lt');
new simpleParallax(parallax02, {
  orientation: 'left',
  scale: 1.3
});
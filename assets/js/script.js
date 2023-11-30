/** @format */

//import { properCase, log, listen, months } from './utils.js';

let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');
const left = document.querySelector('#left-column');

//date format
const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
  dateStyle: 'full',
});
// datey.style.color = '#4b0082';
datey.innerText = f.format(today);

let yer = new Date();
copyr.innerHTML = `\u00A92023 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
  // this highlights the current active link
  if (document.links[i].href === document.URL) {
    document.links[i].className = 'current';
  }
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function randomRGB() {
  const rgb = `rgb(${random(0, 255)},${random(0, 255)},${random(0, 255)})`;
  left.style.backgroundColor = rgb;
  document.querySelector('.color-display').innerText = rgb;
}
randomRGB();

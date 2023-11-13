/** @format */

import { properCase, log, listen, months } from './utils.js';

let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');

//date format
const today = new Date();
const f = new Intl.DateTimeFormat('en-us', {
  dateStyle: 'full',
  //timeStyle: 'full',
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
class check {
  constructer() {
    ccccc;
  }
}

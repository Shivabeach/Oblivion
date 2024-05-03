/** @format */

//import { properCase, log, listen, months } from './utils.js';

let datey = document.getElementById('datey');
const copyr = document.querySelector('.copy');
//const left = document.querySelector('#left-column');
const leftColor = document.querySelector('#left-columns');

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

// function randomRGB() {
//   const rgb = `rgb(${random(0, 255)},${random(0, 255)},${random(0, 255)})`;
//   if (left) {
//     left.style.backgroundColor = rgb;
//     document.querySelector('.color-display').innerText = rgb;
//   }
//   if (leftColor) {
//     leftColor.style.backgroundColor = rgb;
//     document.querySelector('.color-display').innerText = rgb;
//   }
// }
// randomRGB();

// function randomsRGB() {
//   const rgb = `rgb(${random(0, 255)},${random(0, 255)},${random(0, 255)})`;
//   if (leftColor) {
//     leftColor.style.backgroundColor = rgb;
//     document.querySelector('.color-display').innerText = rgb;
//   }
// }
// randomsRGB();

// const date1 = new Date('7/13/2010');
// const date2 = new Date('12/15/2010');
// const diffTime = Math.abs(date2 - date1);
// const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
// console.log(diffTime + " milliseconds");
// console.log(diffDays + " days");

// var day1 = new Date('08/25/2020');
// var day2 = new Date('12/25/2021');

// var difference = day2.getTime() - day1.getTime();

// document.write(difference);
// function isPrime(number) {
//   if (number <= 1) {
//     return false; // numbers less than or equal to 1 are not prime numbers
//   }

//   // Check from 2 to square root of number
//   for (let i = 2; i <= Math.sqrt(number); i++) {
//     if (number % i === 0) {
//       return false; // number is divisible by another number, so it's not prime
//     }
//   }

//   return true; // number is prime
// }

// // Example usage:
// const numberToCheck = 28;
// //console.log(`Is ${numberToCheck} a prime number?`, isPrime(numberToCheck));

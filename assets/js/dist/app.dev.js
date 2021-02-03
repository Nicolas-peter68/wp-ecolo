"use strict";

var brand = document.querySelector('.navbar-brand');

if (window.innerWidth < 767) {
  brand.style.display = "none";
} else {
  brand.style.display = "inline-block";
}
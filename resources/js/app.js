import './bootstrap';
require('jquery');
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap';
const payform = require('payform');

// import popper from "@popperjs/core";

if(document.querySelector('#card-number')){
    let cardInput = document.querySelector('#card-number');
    payform.cardNumberInput(cardInput);
    payform.validateCardNumber('4242 4242 4242 4242');
}

if(document.querySelector('#expiry')){
    let expiryInput = document.querySelector('#expiry');
    payform.expiryInput(expiryInput);
    payform.validateCardExpiry('08', '2022');
}

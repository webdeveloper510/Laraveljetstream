import './bootstrap';
var moment = require('moment');

const app = new Vue({
    el: '#app',
    data:{
    moment: moment
   }
});
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

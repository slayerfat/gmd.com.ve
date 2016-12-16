window.$ = window.jQuery = require('jquery');

// The official npm package doesn't have the version needed (3.0.3)
require('components-bootstrap');

var wow = require('wow.js');

new wow().init();
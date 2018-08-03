
try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

require('select2')
require('jquery-ui')
require('bootstrap-daterangepicker')
require('bootstrap-datepicker')
require('moment')
require('slimscroll')
require('fastclick')
require('admin-lte')


$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
    $('.select2').select2();
});


// global.ckeditor = require('@ckeditor/ckeditor5-build-classic')
//
// $(document).ready(function () {
//     global.ckeditor
//         .create(document.querySelector('.editor'))
//         .then(editor => {
//             console.log(editor);
//         })
//         .catch(error => {
//             console.error(error);
//         });
// });
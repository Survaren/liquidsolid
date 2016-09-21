window._ = require('lodash');

window.$ = window.jQuery = require('jquery');
require('jquery-ui');
require('bootstrap-sass');
require('bootstrap-hover-dropdown');
require('jquery-slimscroll');
require('block-ui');
require('bootstrap-switch');
require('jquery.cookie');
require('moment');
window.toastr = require('toastr');

window.Vue = require('vue');
require('vue-resource');


Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;

    next();
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

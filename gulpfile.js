const elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

require('laravel-elixir-vue');

elixir(mix => {
  mix.sass([
    'bootstrap.scss',
    'global/components.scss',
    'global/plugins.scss',
    'layouts/layout/layout.scss',
    'layouts/layout/themes/darkblue.scss',
    'pages/login.scss',
    'custom.scss'
  ])
  .browserify('app.js')
  .copy('resources/assets/img', 'public/img')
  .copy('resources/assets/js/metronic.js', 'public/js')
  .copy('resources/assets/js/quick-sidebar.js', 'public/js')
  .copy('resources/assets/js/layout.js', 'public/js')
  .copy('node_modules/font-awesome/fonts', 'public/fonts')
  .copy('node_modules/simple-line-icons/fonts', 'public/fonts');
});

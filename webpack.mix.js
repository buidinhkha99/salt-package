let mix = require('laravel-mix')

const path = require('path')
mix.alias({
    '@': path.join(__dirname, 'resources/js')
})

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .react({
        extractStyles: true
    })
    .sass("resources/scss/app.scss", "public/scss")
    .css("resources/css/app.css", "public/css");

mix.version();
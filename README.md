Trio Wordpress theme, based on [underscores](https://github.com/Automattic/_s).

Staging area is at [http://trio.justinbrowndev.com](http://trio.justinbrowndev.com).

Source SCSS and JS files are in `src/scss` and `src/js`, destination files are in `css` and `js`

Run `npm install` to install dependencies.

Run `gulp` to compile SCSS and transpile JS.

Functions that are hooked into theme are in `inc/template-functions.php`, functions that are invoked directly in theme files are in `inc/theme-functions.php`

The theme does not use `style.css` for styles, just for docs and versioning.  All styles will be compiled from SCSS into `css/main.css`
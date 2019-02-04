# Laravel & CoreUI Starter

Very Basic laravel 5.7 + CoreUI
Run NPM install / NPM run dev to compile the files

/welcome (and / ) routes will be as a 'guest'
When you're logged in (not included) you should go to /admincp
Route::auth is included, but posting to /login will not get you logged in,
The routes aren't protected

The default pages from coreui are in /resources/views/pages
Make routes for them in routes/web.php

They extend /admincp/admincp
and admincp has includes for partials/admincpheader (and admincpfooter)

There is also an 'aside' which gives you a sidebar on the righthand side (like original coreui)

I have included a pagessidebar, so you can include that in your layout once you've made the routes
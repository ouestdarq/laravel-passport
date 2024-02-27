# Laravel's Passport PKCE implementation

Currently `src/Providers/RouteServiceProvider` is loading files in the `routes` directory.
However at the moment due to changes from the original laravel passport package
the only route being registered is `/login` view which creates a `get` route, and `post` route whose logic is being managed by
`src/Http/Controllers/AuthenticationController`.

`src/Providers/OAuthServiceProvider` is loading and publishing `resources/views`.
This makes the use of `proxymurder/laravel-passport::<blade_file>` possible through out the project.

This project will be abandoned and left only for some reference.

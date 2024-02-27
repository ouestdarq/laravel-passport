# Laravel's Passport PKCE implementation

Currently `src/Providers/RouteServiceProvider` is loading files in the `routes` directory.
However at the moment due to changes from the original laravel passport package
the only route being registered is `/login` view which creates a `get` route, and `post` route whose logic is being managed by
`src/Http/Controllers/AuthenticationController`.

`src/Providers/OAuthServiceProvider` is loading and publishing `resources/views`.

There has been no update to blade files since we'll be managing all of the front end in a separate space.
The choice has been made to made a collection of Vue components that will satisfy multiple needs.

## Instalation

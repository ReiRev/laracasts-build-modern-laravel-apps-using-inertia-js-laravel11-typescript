# Build Modern Laravel Apps Using Inertia.js/Laravel 11/typescript

This repository replicates [Build Modern Laravel Apps Using Inertia.js](https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js) series from [Laracasts](https://laracasts.com/referral/reirev), using **Laravel 11** and **TypeScript**.

This repository replicates the concepts from the Build Modern Laravel Apps Using Inertia.js series, with the key difference being the use of Laravel 11 and TypeScript.

## Branches

Each episode is represented by a separate branch. Switch between branches to follow along with the series.

The following sections includes:
- Todos
- Key points

Switch branches and complete the Todos to easily review and practice the concepts.

## 02 Install and Configure Inertia

### TODO

- [ ] Create a new Laravel project with `laravel new`
- [ ] Complete [server-side setup](https://inertiajs.com/server-side-setup). Note that `Kernel.php` is not present in Laravel 11.
- [ ] Complete [client-side setup](https://inertiajs.com/client-side-setup). Also, add typescript support. The easiest way to do this is to create temporary vue project with `npm install @inertiajs/vue3`, then copy the files and merge the settings. Ensure you update several files like `package.json`, `.editorconfig`, `vite.config.ts`, etc. Change `*.js` to `*.ts`.

### Key Points

- `@inertia`
- How the `InertiaApp` resolves `*.vue` file.

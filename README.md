# Build Modern Laravel Apps Using Inertia.js/Laravel 11/typescript

This repository replicates [Build Modern Laravel Apps Using Inertia.js](https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js) series from [Laracasts](https://laracasts.com/referral/reirev), using **Laravel 11** and **TypeScript**.

This repository replicates the concepts from the Build Modern Laravel Apps Using Inertia.js series, with the key difference being the use of Laravel 11 and TypeScript.

## Branches

Each episode is represented by a separate branch. Switch between branches to follow along with the series.

The following sections includes:
- Todos
- Key points

Switch branches and complete the Todos to easily review and practice the concepts.

## Start server

```
npm run dev
```

```
php artisan serve
```

## 02 Install and Configure Inertia

### TODO

- [ ] Create a new Laravel project with `laravel new`
- [ ] Complete [server-side setup](https://inertiajs.com/server-side-setup). Note that `Kernel.php` is not present in Laravel 11.
- [ ] Complete [client-side setup](https://inertiajs.com/client-side-setup). Also, add typescript support. The easiest way to do this is to create temporary vue project with `npm install @inertiajs/vue3`, then copy the files and merge the settings. Ensure you update several files like `package.json`, `.editorconfig`, `vite.config.ts`, etc. Change `*.js` to `*.ts`.

### Key Points

- `@inertia`
- How the `InertiaApp` resolves `*.vue` file.

## 03 Pages

### TODO

- [ ] Create `Welcome.vue` and show "Hello World".
- [ ] Pass name prop from Laravel to frontend. Show "Hello, ${name}"
- [ ] Rename `Welcome.vue` with `Home.vue`.
- [ ] Pass frameworks prop from Laravel and show all of them.

### Key Points

- `inertia` / `Inertia::render` functions.
- [Vue.js devtools](https://chromewebstore.google.com/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd?hl=en)
- How to get props from Laravel.

## 04 Inertia Links

### TODO

- [ ] Create `/users` and `/settings` pages. Display "Users" and "Settings" in the respective page heading.
- [ ] Create a navigation bar (`nav`) in `Home.vue` that links to each page. Prevent page reloads during transitions. Verify SPA functionality by adding 2-second delay in `/user` endpoint.
- [ ] Create reusable `Nav.vue` component and import it into each pages.

### Key Points

- [ ] Distinguish between standard anchor tags and Inertia's Link component.
- [ ] Explore the typical Inertia directory structure.

## 05 Progress Indicators

Note: Inertia now includes default progress indicator.

### TODO

- [ ] Customize the progress indicator by changing its color and displaying a spinner. Refer to the [official document](https://inertiajs.com/progress-indicators) for more details.

### Key Points

- [ ] Techniques for customizing the progress indicator.

## 06 Perform Non-GET Requests

### TODO

- [ ] Implement `/logout` endpoint. Upon receiving a POST request, display a "logging out" message with `dd`. Add a logout button to `Nav.vue`.
- [ ] Apply tailwind styling to `Home.vue` and `Nav.vue`.
  - [ ] Increase the font size and weight of heading in `Home.vue`.
  - [ ] Add padding to the entire page.
  - [ ] Style links to appear blue and display an underline on hover.

### Key Points

- [ ] Method for sending HTTP requests other than GET.

## 07 Preserve the Scroll Position

### TODO

- [ ] Display the current server-side time in `Users.vue`.
- [ ] Add top margin to require scrolling to view the time.
- [ ] Include a "Refresh" link. Maintain the current scroll position after refreshing the page.

### Key Points

- [ ] Techniques for preserving the user's scroll position when navigating a page.

# Laravel Jetstream & PrimeVue
A starter kit using [Laravel Jetstream](https://jetstream.laravel.com/introduction.html) with the [Intertia.js](https://inertiajs.com/) Vue option, utilizing [PrimeVue](https://primevue.org/) components.

## Installation 
1. Clone the repo (or download the zip)
   ```
   git clone https://github.com/ajrdiaz/laraprimevue3-skeleton.git
   ```

2. Step into the project directory
   ```
   cd ./primevue-breeze-inertia
   ```

3. Install the framework and other packages
   ```
   composer install
   ```

3. Setup `.env` file

   Windows
   ```
   copy .env.example .env
   ```
   Unix/Linux/MacOS
   ```
   cp .env.example .env
   ```

4. Generate the app key
   ```
   php artisan key:generate
   ```

5. Migrate database tables (after `.env` and database related config setup)
   ```
   php artisan migrate
   ```

6. Install npm packages
   ```
   npm install
   ```

7. Start the Vite dev server
   ```
   npm run dev
   ```

## Theme
Este kit de inicio proporciona un modo claro/oscuro y una funcionalidad de tema personalizada proporcionada por el poderoso sistema de temas PrimeVue, utilizando el modo con estilo y valores de token de diseño personalizados.

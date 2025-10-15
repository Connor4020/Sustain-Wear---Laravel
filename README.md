# Sustain Wear
## How to Run

- Open two terminal windows and navigate to the SustainWear project folder in both.

- In the first terminal, install PHP dependencies using Composer:
```bash
composer install
```
- In the second terminal, install Node dependencies:

```bash
npm install
```
- Start the Vite development server in the second terminal:

```bash
npm run dev
```
- Start the Laravel server in the first terminal:

```bash
php artisan serve
```
- Open your browser and go to http://127.0.0.1:8000 (or the URL shown in the terminal).

# Notes:

If you encounter errors, you may need to edit your php.ini or install missing PHP extensions.

Axios is included via npm, so make sure npm install runs successfully.

make sure to generate an app key with: 

```bash
php artisan key:generate
```

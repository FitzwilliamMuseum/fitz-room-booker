# Fitzwilliam Museum Internal room booking

A minimum viable product for admin of internal spaces in the museum.

This is based off [Laravel Daily's](https://github.com/LaravelDaily/Laravel-Faculty-RoomBooking) Faculty Room Booking, with several functions changed and templates adapted by Daniel Pett.


## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- If running locally, run php __php artisan serve__
- If running on a webserver, set up apache or nginx
- That's it: launch the main URL.
- You can login to adminpanel with default credentials __admin@admin.com__ - __password__
- Once logged in

## License

Basically, feel free to use and re-use any way you want.

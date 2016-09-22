# Ready To Use TicketIT

This project is a ticket management website based on the TicketIt project's - Optimized for the French and English language.

Based on the version 0.2.9 of package [TicketIt](https://github.com/thekordy/ticketit), this project works independently.

Supplied with a database, this project is ready for use.

A minimal configuration is required for its functioning (see setup project)

--> Please not update dependences <--


## Setup Project

### General configuration

1 - Download and place your files in your directory (localhost or online)

2 - Configure your file **.env** with the SMTP and the database informations.

3 - Import the script contained in the **'database'** folder in your PhpMyAdmin (for example)

4 - Run your project with your URL (example : **'localhost/your_project/public/'**)

5 - Change the language in **'config/app.php'** with 'locale' fields **(ex : 'locale' => 'en')**<br />
    **If you choose 'en', the views are not translated in English (but in French).**

--> Your project must be now operational !

### Recaptcha

--> However the recaptcha is not required for the connection !

--> To activate Recaptcha, please inform your public key in<br /> 
    the file **'/resources/views/auth/login.blade.php'** in **data-sitekey='your_public_site_key'**. 

--> It's possible that your Recaptcha does not work in localhost configuration.

### Emails

--> After your SMTP configuration, your emails should send.

--> To customize your fields subject in emails, change informations<br /> 
    in **'resources/lang/vendor/ticketit/your_language/lang.php'**<br /> 
    and in **'app/Http/Controllers/Auth/PasswordController.php'**

--> You can personalize all of e-mails views ('resources/views/vendor/ticketit/emails/...') and more.

### Customize 

--> You can change the logo and the icon by replacing them here : 'public/img/'

--> You can personalize all files (except vendor folder) for a precise use.

## Documentation

If you have difficulty, there is the main documentations :

--> [Laravel Framework](http://laravel.com/docs).

--> [Console Commands Artisan](https://laravel.com/docs/5.3/artisan).

--> [TicketIT Package](https://github.com/thekordy/ticketit).

--> [TicketIt v0.2 Features](https://github.com/thekordy/ticketit/wiki/v0.2-Features).

## Problems

If you have a problem, please put down a [Issue](https://github.com/WestFR/Ready_to_use_TicketIT/issues).


## License

This project is licensed under [MIT license](http://opensource.org/licenses/MIT).

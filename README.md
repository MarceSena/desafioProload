# Proload Challenge

Create a system that fetches news from an RSS feed and uses the Zapito API to send them via WhatsApp to cell phones registered in an admin panel.

## Installing / Getting Started

Clone the Project;
``shell
git clone https://github.com/MarceSena/desafioProload.git``

Have Composer, PHP and Docker installed on your machine;
At the end, execute the command in your composer install terminal, to install all project dependencies;
At the root of the project create a new file called .env and compile the data from .env-exampleple. Change the environment variables if necessary, and TOKEN_ZAPITO (mandatory). Generate your token in Zapito.
Run the command php artisan key: generate, to generate a new key for the project, which can be seen in .env.

## Note
The system uses scheduling, to get messages from G1, at 1 minute intervals.

Run the command ``shell sail artisan schedule: work``, to get the data automatically.
Run the command ``shell sail artisan get:news``, make an interaction
In your browser, put the url http: //localhost/ Create your registration and access.

# Proload Challenge

Create a system that fetches news from an RSS feed and uses the Zapito API to send them via WhatsApp to cell phones registered in an admin panel.

## Installing / Getting Started

Clone the Project;
``shell
git clone https://github.com/MarceSena/desafioProload.git``

Clone the Project;
Have ``shell Composer``, ``shell PHP`` and ``shellDocker`` installed on your machine;

apois run the command on your ``shell composer`` install terminal, to install all project dependencies;

At the root of the project create a new file called ``shell .env`` and compile the data from ``shell .env-exampleple``. Change the environment variables if necessary, and URL_ZAPITO end ZAPITO_HEADER_TOKEN (mandatory).

Generate your token in Zapito.

Run the command ``shell php artisan key:generate ``, to generate a new key for the project, which can be seen in .env.

At the end of the previously done process, ``shell run docker-compose up`` command and wait for it to finish;

To place the tables in the database, run the ``shell php artisan migrate``;

Note:

The system uses scheduling, to get messages from G1, at 1 minute intervals.

Run the command php artisan schedule: work, to get the data automatically.

In your browser, place an url http: //localhost/admin/. Create your registration and access.

## Note
The system uses scheduling, to get messages from G1, at 1 minute intervals.

Run the command ``shell  artisan schedule: work``, to get the data automatically.
Run the command ``shell  artisan get:news``, make an interaction
In your browser, put the url http: //localhost/ Create your registration and access.

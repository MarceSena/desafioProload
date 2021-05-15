# Proload Challenge

Create a system that fetches news from an RSS feed and uses the Zapito API to send them via WhatsApp to cell phones registered in an admin panel.

## Installing / Getting Started

Clone the Project;
`` shell
git clone https://github.com/MarceSena/desafioProload.git

``
At the root of the project create a new file called .env and compile the data from .env-exampleple. Change the environment variables if necessary, and TOKEN_ZAPITO (mandatory). Generate your token in Zapito;

Have your Docker machine installed;

run the command on your terminal

`` shell
  composer require laravel / sail --dev
``
run the command on your terminal
`` shell
  ./vendor/bin/sail up -d ";
``
run the command on your terminal
`` shell
  alias sail = 'bash vendor / bin / sail
``
read the doc "https://laravel.com/docs/8.x/sail";
Freelance Forecaster API
==============================

Overview
--------
This project provides the API-backend for the Freelance Forecaster application. At this stage it's
quite simple, providing the ability to manage and search data using a RESTful service provided by
[Apigility](https://apigility.org). No special performance optimisation has been done at this
stage, but that's planned for later in the project.

The application is designed to help freelancers (initially writers) forecast both their work and
accompanying income over the course of a year.

Requirements
------------
  
Please see the [composer.json](composer.json) file. In addition to those, you'll currently need
[a PostgreSQL database](http://www.postgresql.org) version 8.1 or above. I'm looking to provide
an SQLite and MySQL implementation later. But for right now, it's PostgreSQL.

Installation
------------

### Via Composer (create-project)

You can use the `create-project` command from [Composer](http://getcomposer.org/) to create the
project in one go:

```bash
curl -s https://getcomposer.org/installer | php --
php composer.phar create-project -sdev zfcampus/zf-apigility-skeleton path/to/install
```

### Via Git (clone)

First, clone the repository:

```bash
git clone https://github.com/settermjd/Freelance-Forecaster-API.git # optionally, specify the
directory in which to clone
cd path/to/install
```

At this point, you need to use [Composer](https://getcomposer.org/) to install dependencies.
Assuming you already have Composer:

```bash
composer.phar install
```

Now, fire it up! Do one of the following:

- Create a vhost in your web server that points the DocumentRoot to the `public/` directory of
the project
- Fire up the built-in web server in PHP (5.4.8+) (**note**: do not use this for production!)

In the latter case, do the following:

```bash
cd path/to/install
php -S 0.0.0.0:8080 -t public public/index.php
```
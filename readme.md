# Lumen frontend API website example  

## Documentation

Documentation for Lumen can be found here https://lumen.laravel.com/docs/5.4
Documentation for Guzzle can be found here http://guzzle.readthedocs.io/en/stable


## Installation

1) Clone this repository, cd into the project folder, 
2) Copy the .env.example file to .env
3) Run composer-update to pull in the dependencies 
4) Finally ./run to start the PHP server

```
git clone https://github.com/iperiumrealestate/frontend-lumen.git

cd frontend-lumen

cp .env.example .env

composer update --ignore-platform-reqs

./run
```

Once installed and running the documentation is viewable at http://localhost:8000/docs

You can see the routes in the resources/routes/web.php file, most of the interesting ones are in 
resources/routes/examples/properties.php

The properties routes are:
Property lists - http://localhost:8000/sales

Example content pages:
http://localhost:8000/en
http://localhost:8000/en/about-us


## License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

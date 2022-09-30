# ICE and FIRE API

The api url is: https://anapioficeandfire.com/Documentation#books

Laravel and PHP versions used:

Laravel v9.26.1 (PHP v8.1.8)

Database used: sqlite

## API Reference

#### Get books

```http
  GET /circle/2
```

```
{
  "type": "circle",
  "radius": 2,
  "surface": 12.56,
  "circumference": 12.56
}
```

#### Get a single external books

```http
  GET /api/external-books/{id}
```

```
{
  "type": "triangle",
  "a": 3,
  "b": 4,
  "c": 5,
  "surface": 6,
  "circumference": 12
}
```

## Run Locally

Clone the project

```bash
  git clone https://github.com/esinniobiwaquareeb/geometry-assessment.git
```

Go to the project directory

```bash
  cd geometry-assessment
```

Install dependencies

```bash
  composer install
```

Start the server

```bash
  php artisan serve
```

## Running Tests

To run tests, run the following command

```bash
  php artisan test
```

## Test Screenshots

![Test Screenshot](https://i.ibb.co/QDkY8FK/Screenshot-2022-09-30-at-10-26-29-AM.png)

## API Navigations Screenshots

From here, you can easily navigate around the api without having to use test tools

![API Navigation Screenshot](https://i.ibb.co/NtzRpjx/Screenshot-2022-08-30-at-5-04-02-PM.png)

### Solution 2

Microservices communicate with each other by inter-service communication on network level

Microservice communication can be Sync or Async Communication

The difference between the two is that, Syn wait until the it gets response due to the fact that it uses HTTP communication protocol. In this case, it is advised to use RESTful protocol

On the other hand, Async is NON-blocking communication and it uses Advanced Message Queuing Protocol (AMQP).

My approach to implementing Microservice communication is using RabbitMQ queue

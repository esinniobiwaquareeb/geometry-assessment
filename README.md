# Geometry Assessment

Laravel and PHP versions used:

Laravel v9.26.1 (PHP v8.1.8)

#### Circle Route

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

#### Triangle Route

```http
  GET /triangle/3/4/5
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

From here, you can easily navigate around without having to use test tools

![API Navigation Screenshot](https://i.ibb.co/9vb6hVN/Screenshot-2022-09-30-at-10-33-53-AM.png)

### Solution 2

Microservices communicate with each other by inter-service communication on network level

Microservice communication can be Sync or Async Communication

The difference between the two is that, <code>Syn</code> wait until the it gets response due to the fact that it uses HTTP communication protocol. In this case, it is advised to use RESTful protocol

On the other hand, <code>Async</code> is NON-blocking communication and it uses Advanced Message Queuing Protocol (AMQP).

My approach to implementing Microservice communication is using RabbitMQ queue

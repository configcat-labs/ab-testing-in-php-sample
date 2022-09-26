# A/B testing in PHP sample

A companion repo for "How to A/B test new features in PHP using Feature Flags and Amplitude

## How it works

This sample PHP app uses the Laravel framework and its default Blade templating engine on the frontend. It is a demo e-commerce website page showing a list of products. It is used to demonstrate how to conduct an A/B test experiment by comparing how well the variation state (Shown on the right) performs compared to the control state (Shown on the left). The aim of the test is to determine if showing the price of the product would increase the number of clicks on the **View More** button. See the screenshot below.

![Screenshot of the A/B difference](https://user-images.githubusercontent.com/74829200/192379454-bf56fe48-6954-4ca2-ace1-29d75508a8a5.png)

## How it works

Clicking on the **View More** button under the product logs an event to Amplitude. These events are then recorded in 
an analysis chart for later comparison to the benchmark metrics collected for the control state.

## Build and Run

### Software requirements
- Composer version 2 - a tool for managing dependencies in PHP
- Node version 16+
- NPM version 8+ - a package manager for setting up and building the frontend
- PHP

## How to run this app

**1.** Clone the this repository.

**2.** Run the following command to install the PHP's dependencies.

```sh
composer install
```

**3.** Compile the frontend with NPM using the following command.

```sh
npm run dev
```

**4.** Start the PHP server with this command:

```sh
php artisan serve
```

You should now be able to see the app by visiting [http://127.0.0.1:8000/](http://127.0.0.1:8000/).

## Learn more

Useful links to technical resources.

- [PHP Documentation](https://www.php.net/docs.php) - learn about PHP.

[**ConfigCat**](https://configcat.com) also supports many other frameworks and languages. Check out the full list of supported SDKs [here](https://configcat.com/docs/sdk-reference/overview/)

You can also explore other code samples for various languages, frameworks, and topics here in the [ConfigCat labs](https://github.com/configcat-labs) on GitHub.

Keep up with ConfigCat on [Twitter](https://twitter.com/configcat), [Facebook](https://www.facebook.com/configcat), [LinkedIn](https://www.linkedin.com/company/configcat/), and [GitHub](https://github.com/configcat).

## Author
[Chavez Harris](https://github.com/codedbychavez)

## Contributions
Contributions are welcome!

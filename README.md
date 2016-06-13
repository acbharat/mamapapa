#mamapapa

Basic automation scripts for mamasandpapas project, based on Codeception  ((BDD-Style PHP Testing Framework).

Ultimate goal of the project is to create a automation acceptance test script, which is user-friendly and these tests are represented as a set of user's actions.

I used full-stack BDD methodology, with phpspec and codeception.

**These are the goals:**

* Run tests simultaneously, so that adding configurations doesn’t slow down the process

* Make it easy to add configurations

* Make tests executable from the command-line, by anyone, at any time

**Running tests in parallel**

Parallel Test Execution consists of 3 steps:

* splitting tests

* running tests in parallel

* merging results

Now that we have the tests running in BrowserStack from the command-line, it’s time to start running them simultaneously on various configurations. In order to run them on various configurations we need a few things:
Quick Installation

$ wget http://getcomposer.org/composer.phar
$ php composer.phar create-project sylius/sylius
$ cd sylius
$ php app/console sylius:install
$ php app/console server:run
The install script will give you the option to run fixtures that make testing and development phases much easier.

If you want to try out new Sylius UI, please run the following commands:

$ npm install
$ gulp
Behat scenarios

By default Behat uses http://localhost:8080/ as your application base url. If your one is different, you need to create behat.yml files that will overwrite it with your custom url:

imports: ["behat.yml.dist"]

default:
    extensions:
        Behat\MinkExtension:
            base_url: http://my.custom.url
Then run selenium-server-standalone:

$ bin/selenium-server-standalone
Then setup your test database:

$ php app/console doctrine:database:create --env=test
$ php app/console doctrine:schema:create --env=test
You can run Behat using the following commands:

$ bin/behat

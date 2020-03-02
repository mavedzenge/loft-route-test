# loft-test
To install the test suite (Codeception) run:
````
Run composer install
````

The command calls the manager which takes json data and sorts it to output desired order.

* To run the command run the following command in your terminal:
-- Change directory to the one that has the files and run the following in your command line:
````
./Command/SortArrayCommand.php
````

The command runs a function `sortRouteArray` in `LoftDigitalManager` which does the sorting and returns and array of the data after it has been sorted.

I have also written a test which tests that the function also returns the same output when we pass the json in a different order.

Before running the command run the following command to initialise codeception
````
php vendor/bin/codecept bootstrap
````
* In order to run the test, run the following command:
````
php vendor/bin/codecept run unit
````

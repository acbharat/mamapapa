# mamapapa

Steps followed to run acceptance tests on local

Install codeception

Download selenium server and run selenium server with chromedriver using the following command:

java -jar -Dwebdriver.chrome.driver=$(pwd -P){path_to_chrome_driver} {selenium-server}.jar

Now run all acceptance tests from the tests suite on chrome using this command

php codecept.phar run acceptance
You can find test results on /tests/_output folder

Create Git repository and move all acceptance tests.
Set up Jenkins and create Job so that we can trigger tests

Open terminal and run the command:

vendor/bin/robo parallel:all
This command will split all the tests into 5 parts and will be launched on 5 different machines.

For now all results are saved in the result.xml file (path to file /codeception/frontend/tests/_output).

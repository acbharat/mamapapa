#mamapapa

Basic automation scripts for mamasandpapas project, based on Codeception  ((BDD-Style PHP Testing Framework).

Ultimate goal of the project is to create a automation acceptance test script, which is user-friendly and these tests are represented as a set of user's actions.

I used full-stack BDD methodology, with codeception.

**These are the goals:**

* Run tests simultaneously, so that adding configurations doesn’t slow down the process

* Make it easy to add configurations

* Make tests executable from the command-line, by anyone, at any time

**Running tests in parallel**

Parallel Test Execution consists of 3 steps:

* splitting tests

* running tests in parallel on isolated docker containers

* merging results

**Environment setup:**

Created seperate Github repository
     -- https://github.com/acbharat/mamapapa

Created seperate EC2 instance (t2.micro) on Amazon AWS 
Installed Ubuntu trusty

Installed Jenkins server
     -- Created Job in Jenkins to run tests parallel (The Job script will give you the option to run tests with prefered browser parallely that make tests run faster.)

Installed Docker 

For ec2 access:
URL: https://ap-southeast-1.console.aws.amazon.com/ec2/v2/home?region=ap-southeast-1#Instances:sort=instanceId
     --Username: acbharat@hotmail.com and Password on email.
 
 **Execute acceptance tests:**    
 
 Thou we are using ec2 micro instance with 512 mb RAM, there might be the possiblity of high memory usuage which slows down build execution or failure.
 
     So I created two separate job in Jenkins:

              1. Run tests in parallel (Job name: mamapapa)
              2. Run tests in sequential (Job name: mamapapa_sequential)

 If you want to run tests on parallel using docker containers, please follow the steps the following commands:

**Run tests in parallel (Job name: mamapapa)**

URL: http://54.169.41.195/jenkins/job/mamapapa/
    -- User name: user
    -- Password: bitnami
Go to the project "mamapapa"
Click : Build with parameter
Select Environment "Firefox or Chrome" from dropdown.
Click "Build" button
Once complete, you can see HTML reports by clicking the button "Mamapapa reports"
    -- http://54.169.41.195/jenkins/job/mamapapa/MamaPapa_Report/
    
**Run tests sequential (Job name: mamapapa)**

With above mentioned URL, 
Go to the project "mamapapa_sequential"
Click : Build with parameter
Select Environment "Firefox or Chrome" from dropdown.
Click "Build" button
Once complete, you can see HTML reports by clicking the button "Mamapapa reports"
    http://54.169.41.195/jenkins/job/mamapapa_sequential/MamaPapa_Report/

If you want to see configuration, click on "Configure" link.


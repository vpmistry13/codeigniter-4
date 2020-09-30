# CodeIgniter 4 Development
This project is really awesome project try it once
[![Build Status](https://travis-ci.org/bcit-ci/CodeIgniter4.svg?branch=develop)](https://travis-ci.org/bcit-ci/CodeIgniter4)
[![Coverage Status](https://coveralls.io/repos/github/bcit-ci/CodeIgniter4/badge.svg?branch=develop)](https://coveralls.io/github/bcit-ci/CodeIgniter4?branch=develop)
<br>

## What is CodeIgniter?
CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds the pre-alpha code for CodeIgniter 4 only. 
Version 4 is a complete rewrite to bring the quality and the code into a more modern version, 
while still keeping as many of the things intact that has made people love the framework over the years. 

**This is pre-release code and should not be used in production sites.**

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

### Documentation

The current documentation can be found [here](https://bcit-ci.github.io/CodeIgniter4/). As with the rest of the framwork, it is currently a work in progress, and will see changes over time to structure, explanations, etc.

## Important Change with index.php

index.php is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management
We use Github issues to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

If you raise an issue here that pertains to support or a feature request, it will
be closed! If you are not sure if you have found a bug, raise a thread on the forum first -
someone else may have encountered the same thing.

Before raising a new Github issue, please check that your bug hasn't already
been reported or fixed. 

We use pull requests (PRs) for CONTRIBUTIONS to the repository.
We are looking for contributions that address one of the reported bugs or
approved work packages.

Do not use a PR as a form of feature request.
Unsolicited contributions will only be considered if they fit nicely
into the framework roadmap.
Remember that some components that were part of CodeIgniter 3 are being moved
to optional packages, with their own repository.

## Contributing
We **are** accepting contributions from the community, specifically those identified as part of phase 2.

We will try to manage the process somewhat, by adding a "Help wanted" label to those that we are 
specifically interested in at any point in time. Join the discussion for those issues, and let us know 
if you want to take the lead for one of them.

We are not looking for out-of-scope contributions, only those that would be considered part of our controlled evolution!

Please read the *Contributing to CodeIgniter* section in the user guide

## Server Requirements
PHP version 7.0.15 or higher is required, with the following extensions installed: 

- intl


## Running CodeIgniter Tests
Information on running CodeIgniter test suite can be found in the [README.md](tests/README.md) file in the tests directory.
# codeigniter-4

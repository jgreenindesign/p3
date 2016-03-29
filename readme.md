# CSCI E-15 Project 3 : Laravel Basics
### Hands-on practice with working with the essentials of building a Laravel-based site. Creating a Laravel application, installing and using packages, etc.

## Live URL
<http://p3.jgreenindesign.com/>

## Description
* Project 3 required us to create an all-in-one resource page for developers to be able to generate lorem ipsum text, random users, and random passwords. 

## Video URL
* https://youtu.be/eTrJ3Ol3ZkE
* During the video I mentioned including a "profile image" (at 1:54) as one of the checkable options.. I meant to say profile bio. Sorry for the confusion.

## Additional Info to TA
### Lorem Ipsum Generator
* Used Ecrmnn/Lorem

### Random User Generator
* Used Fzaninotto/Faker
* I decided to put the users in a carousel instead of having them run down the page.
* I put the options in order of appearance in the output
* I decided to generate a password through domain names (seperated by a hyphen) because the password generator through faker was generating charactors that were causing issues with my code

### Password Generator
* Included the XKCD Password Generator from P2
* I had a problem with the array_rand() randomizing the contents of the text file, so I had to do a work around and call shuffle() before and after array_rand() in order to get a random word
* Made the output smaller to fix the scrolling text issue with larger generated passwords

### Misc
* I tried to limit input from the user to reduce user error
* Navigation is at the top of the page only
* Created custom error messages for lorem ipsum and random user forms.

## Additional Resources
* Twitter Bootstrap Framework (http://getbootstrap.com/)
* Fzaninotto/Faker Package for Random Users (https://packagist.org/packages/fzaninotto/faker)
* Ecrmnn/Lorem Package for Lorem Ipsum Text (https://packagist.org/packages/ecrmnn/lorem)
* http://stackoverflow.com/questions/12124492/array-rand-not-randomizing
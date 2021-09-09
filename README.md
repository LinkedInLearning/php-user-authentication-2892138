# PHP: User Authentication
This is the repository for the LinkedIn Learning course PHP: User Authentication. The full course is available from [LinkedIn Learning][lil-course-url].

![PHP: User Authentication][lil-thumbnail-url] 

Do you need to know how to apply best practices for user authentication in PHP? This course walks you through a series of best practices that you can apply to your own PHP projects to avoid costly security pitfalls. Instructor Kevin Skoglund gives you an overview of user authentication in PHP, then dives into how you can implement it. He steps through creating the database table, adding new users, logging users in and out, and controlling access to pages and functions. Kevin shows you how to work with strong passwords, prevent weak ones, and reset forgotten ones. He shows you how to secure user authentication by preventing insecure direct object references (IDOR), using HTTPS, protecting access tokens, and keeping track of logins. Kevin concludes with a challenge/solution set exploring how to write PHP code that expires a user login after a set amount of time has passed.

## Instructions
This repository has branches for each of the videos in the course. You can use the branch pop up menu in github to switch to a specific branch and take a look at the course at that stage, or you can add `/tree/BRANCH_NAME` to the URL to go to the branch you want to access.

## Branches
The branches are structured to correspond to the videos in the course. The naming convention is `CHAPTER#_MOVIE#`. As an example, the branch named `02_03` corresponds to the second chapter and the third video in that chapter. 
Some branches will have a beginning and an end state. These are marked with the letters `b` for "beginning" and `e` for "end". The `b` branch contains the code as it is at the beginning of the movie. The `e` branch contains the code as it is at the end of the movie. The `main` branch holds the final state of the code when in the course.

When switching from one exercise files branch to the next after making changes to the files, you may get a message like this:

    error: Your local changes to the following files would be overwritten by checkout:        [files]
    Please commit your changes or stash them before you switch branches.
    Aborting

To resolve this issue:
	
    Add changes to git using this command: git add .
	Commit changes using this command: git commit -m "some message"

## Installing
1. To use these exercise files, you must have the following installed:
	- Web server, such as Apache or Nginx
	- PHP
	- MySQL
	- Code editor
	- Web browser
2. Clone this repository into your local machine using the terminal (Mac), CMD (Windows), or a GUI tool like SourceTree.


### Instructor

Kevin Skoglund                           

Check out my other courses on [LinkedIn Learning](https://www.linkedin.com/learning/instructors/kevin-skoglund).

[lil-course-url]: https://www.linkedin.com/learning/php-user-authentication
[lil-thumbnail-url]: https://cdn.lynda.com/course/2892138/2892138-1630601158628-16x9.jpg


Unit tests & TDD in web development
===================================

Blog application example for unit tests/TDD lessons.

TODO list
---------
 - posts editor
    - save data from html form
    - validate form fields before sent data to server
    - validate data before save
 - show post
 - blog line

At start of development of blog application we have no any tools/frameworks, only pure php and javascript (except framework for unit testing), therefore we must realize easy web application tools:

Appication
^^^^^^^^^^

Class for organize layer between request and response.

::

   src/Application.php - file with Application class
   tests/ApplicationTest.php - test for Application

Request
^^^^^^^

Class for working with request data.

::
   
   src/Request.php - file with request class
   tests/RequestTest.php - file with test

Response
^^^^^^^^

Class for make response from server side.

::
   
   src/Response.php - file with request class
   tests/ResponseTest.php - file with test
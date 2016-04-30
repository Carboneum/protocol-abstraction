Protocol abstraction
====================

This classes implement abstract request/response interface.

Request
-------

Request concept has three aspects:
  
  - Target &lt;string&gt;: locator of requested target. HTTP analog is 
  path or host + path combination. In command-line interface it could be, 
  for example, command name.
  
  - Parameters sets &lt;array&gt;: finite named sets of key-value hash maps. 
  Main characteristic of parameters set - it is predefined and can be fetched 
  all at once or by name. For CLI it can be command options set and arguments set, 
  for HTTP parameters stand for request parameters, cookies and headers.
  One of parameters set must be defined as default parameters set.
  
  - Payload &lt;generator&gt;: request payload has unknown length and can be 
  fetched by portions. HTTP analog of payload can be request body, 
  CLI - standard input.


Response
--------

  - Status &lt;boolean&gt; was request processing successful or not.
  
  - Parameters sets - the same as in request - they are predefined and 
  can be fetched all at once before reading response body.
  
  - Body  &lt;generator&gt;: payload that has unknown length and can be 
  fetched by portions. HTTP analog is response, CLI - standard output.

TODO:
-----

  - [ ] Tests
  - [ ] CI integration

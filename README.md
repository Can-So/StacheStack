#View Docs on Github#

* https://beardandfedora.github.io/StacheStack

![StacheStack](https://raw.githubusercontent.com/BeardandFedora/StacheStack/master/screenshot.png)


#Clone StacheStack Docs Project in Codio#

+ Create new project in Codio.
+ Open up the Terminal Window in Codio.
+ Clone StacheStack and checkout the Documentation branch

        $ git clone git@github.com:BeardandFedora/StacheStack.git
        $ git checkout gh-pages
        
+ Install Jekyll via Codio Terminal Window. Note: Ignore "Conflict" error received after this command.
        
        $ gem install Jekyll

+ Create Jekyll repo

        $ jekyll serve --watch

+ Navigate to http://box-url.codio.io:4000/StacheStack/ Note: Replace "box-url" with your Codio's "Box URL."


<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>HW 1: Programming Languages </title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <header>
            <p>
                <h1>Declarative</h1>
            </p> 
            <p>
                <h1>Languages</h1>
            </p>
            <nav>
                <table>
                    <tr class="table-row">
                        <td><a href="index.php"> Home </a></td>
                        <td><a href="history.php"> History </a></td>
                    </tr>
                    <tr class="table-row">
                        <td><a href="imperative.php"> Imperative </a></td>
                        <td id="current"><a href="declarative.php"> Declarative </a></td>
                    </tr>
                </table>
            </nav>
        </header>
        
        <main>
            <div id="image">
                <figure>
                    <img src='img/01-sandwich-opt.png' alt='Declarative Languages'/>
                </figure>
            </div>
            <div class='container'>
                <h2>Declarative Programming Paradigm</h2>
                <p>
                    Declarative programming is more like human language than Imperative programming.  Take the above 
                    comic.  It's a good example of a declarative language (and the quirks of Linux).
                    In this case, the declaration is "Make me a sandwich".  The person isn't told how to make a sandwich, just that
                    they should make one.  This is declarative programming at its simplest.  If this same process were to use 
                    Imperative language, the person requesting the sandwich would lay out all the steps required to 
                    obtain the proper outcome, like finding the bread, getting the condiments, etc.
                    
                    Here's a short list of Declarative Languages:
                    <ul>
                        <li>Prolog</li>
                        <li>Lisp</li>
                        <li>Haskell</li>
                        <li>Miranda</li>
                        <li>Erlang</li>
                        <li>SQL</li>
                    </ul>
                </p>
                <h2>Declarative Programming and the Web</h2>
                <p>
                    Declarative programming is used widely in the world wide web.  HTML might be the most commonly
                    encoutered Declarative programming language.  SQL, also considered a declarative language, is
                    often used in concert with HTML.  With both HTML and SQL, all the matters is what's printed in
                    the web browser or requested from the database.  The user doesn't need to know how HTML changes
                    tags into fonts or how SQL parses a query.
                </p>
            </div>
        </main>
        
        <footer>
            <p id="source_header">
                Sources    
            </p>
            <ul id="sources">
                <li><a href="https://devskiller.com/history-of-programming-languages/">History</a></li>
                <li><a href="https://www.ionos.com/digitalguide/websites/web-development/imperative-programming/">Imperative Programming</a></li>
                <li><a href="https://www.ionos.com/digitalguide/websites/web-development/declarative-programming/">Declarative Programming</a></li>
                <li><a href="https://www.smashingmagazine.com/2014/07/declarative-programming/">Declarative Programming</a></li>
            </ul>
        </footer>

    </body>
</html>
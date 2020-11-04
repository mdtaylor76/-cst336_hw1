<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>HW 1: Programming Languages </title>
        <meta charset="utf-8">
    </head>
    <body>
        
        <header>
            <p><h1>Programming</h1></p> 
            <p><h1>Languages</h1></p>
            <nav>
                <table>
                    <tr class="table-row">
                       <td id="current"><a href="index.php"> Home </a></td>
                        <td><a href="history.php"> History </a></td>
                    </tr>
                    <tr class="table-row">
                        <td><a href="imperative.php"> Imperative </a></td>
                        <td><a href="declarative.php"> Declarative </a></td>
                    </tr>
                </table>
            </nav>
        </header>
        

        
        <main>
            <div id="image">
                <figure>
                    <img src='img/programming_languages.jpg' alt='Programming Languages'/>
                </figure>
            </div>
            
            <div class='container'>
                <h2>What is a programming language?</h2>
                <p>
                 	A programming language is language used by programmers to instruct a computer how or what to do in order to achieve some outcome.  
                 	A programming language’s syntax defines the form of the code and how it’s put together.  Semantics, on the other hand, deals with 
                 	the function and meaning of the code.  A program with poor syntax will not compile.  A program with poor semantics may compile and 
                 	run, but won’t generate the expected result.   
                </p>
                <h2>High-Level vs Low-level</h2>
                <p>
                    Languages such as C++ and Java are high level programming languages.  They provide an abstraction between hardware and software.  
                    An assembler is required to convert the program code to something that can be understood by the specific hardware on which the application 
                    will run.  Low-level programming using Assembly language requires hardware specific information.  Unlike high-level languages, if the 
                    hardware changes, the assembly language might change as well.
                </p>
                <h2>Programming Paradigms</h2>
                <p>
                    Programming languages can be broken down into programming paradigms.  The two major programming paradigms are Imperative and Declarative.  
                    Procedural and object-oriented programming are two types of programming that can be found within the Imperative programing paradigm.  
                    Functional and Logical programming can be found within the Declarative programing paradigm.
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
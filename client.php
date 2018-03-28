<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">TasksList</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <div class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchbar">
                        <button class="btn btn-secondary my-2 my-sm-0" onclick="search(document.getElementById('searchbar').value)">Search</button>
                        </div>
                    </div>                    
                </div>
            </nav>
            <br>
        </header>
        <main class="container">
            <h3>Lists</h3>
            <div id="output"></div>
        </main>
        <footer>
            
        </footer>
    </body>
    <script src="script.js"></script>  
</html> 
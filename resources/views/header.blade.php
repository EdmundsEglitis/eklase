<body>
    <link href="/css/index.css" rel="stylesheet"/>
    <header>
        <nav class="nav-container">
            <div id="logo" class="nav-left"><img class="logoIMG" src="IMGS/logo.svg"></div>
            <div class="darkmode-div">
                <input type="checkbox" id="darkmode-toggle" onclick="toggleDarkMode()" />
                <label class="darkmode" for="darkmode-toggle"></label>
            </div>
            <a href="/register">register</a>
        </nav>
    </header>
    <script src="{{ asset('js/app.js') }}"></script>
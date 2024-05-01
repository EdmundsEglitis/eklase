<body>
    <link href="/css/index.css" rel="stylesheet"/>
    <header>
        <nav class="nav-container">
            <div id="logo" class="nav-left"><img class="logoIMG" src="IMGS/logo.svg"></div>
            <div class="darkmode-div">
                <input type="checkbox" id="darkmode-toggle" onclick="toggleDarkMode()" />
                <label class="darkmode" for="darkmode-toggle"></label>
            </div>
            @if(Auth::check() && Auth::user()->admin == 1)
            <div id="register">register</div>
            @endif
            @if( Auth::check() )
            <div id="logout">logout</div>
            @endif
            @if( Auth::check() )
            <div id="B-klase">klase</div>
            @endif
        </nav>
    </header>
    <script src="{{ asset('js/header.js') }}"></script>
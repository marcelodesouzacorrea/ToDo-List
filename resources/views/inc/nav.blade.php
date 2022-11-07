<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">Lista</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
            <a class="nav-item nav-link {{Request::is('todo/create') ? 'active' : ''}}" href="/todo/create">create</a>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">AquarianPetz Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Você</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Seu pet</a>
                </li>
            </ul>

        </div>
        <div class="justify-content-end">
                @include('layout.login-register')
                <i class="fas fa-user-circle fa-3x" style="color:white" data-toggle="modal" data-target="#modalLRForm"></i>
        </div>
    </div>
</nav>

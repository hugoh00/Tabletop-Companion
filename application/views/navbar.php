</br>
<style>
a, a:hover,a:visited, a:focus {
    text-decoration:black;
    color:black;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcollapse">
            <ul class="navbar-nav justify-content-between w-100">
                <li class="nav-item px-4 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rulesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rules</a>
                    <div class="dropdown-menu" aria-labelledby="rulesDropdown">
                    <div class="d-md-flex align-items-start justify-content-start">
                        <div>   
                            <div class="dropdown-header">Base Game</div>
                                <a class="dropdown-item" onclick="ruleshow('bs34')" href="#">Base Game</a>
                        </div>
                        <div>   
                            <div class="dropdown-header">Seafarers</div>
                                <a class="dropdown-item" onclick="ruleshow('sf34')" href="#">Seafarers</a>
                        </div>
                        <div>   
                            <div class="dropdown-header">Cities & Knights</div>
                                <a class="dropdown-item" onclick="ruleshow('ck34')" href="#">Cities & Knights</a>
                        </div>
                        <div>   
                            <div class="dropdown-header">Traders & Barbarians</div>
                                <a class="dropdown-item" onclick="ruleshow('tb34')" href="#">Traders & Barbarians</a>
                        </div>
                        <div>   
                            <div class="dropdown-header">Explorers & Pirates</div>
                                <a class="dropdown-item" onclick="ruleshow('ep34')" href="#">Explorers & Pirates</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-4" id="strategySelect">
                    <a onclick="strategyshow()" class="nav-link"  role="button">Strategy</a>
                </li>
                <li class="nav-item px-4" id="gamehostingSelect">
                    <a onclick="gamehostingshow()" class="nav-link"  role="button">Game Tracking</a>
                </li>
            </ul>
        </div>
    </nav>
</br>
</div>

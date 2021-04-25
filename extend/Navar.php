<nav>
    <div class='sv-nav'>
        <p class="nav-title">
            <span class='top'>Cervexa</span>
            <span class='bottom'>GAMES</span>
        </p>
        <button onclick='onCicka()' class='menu'>Menu</button>
    </div>
    <div class='op-nav' id='menu'>
        <ul>
            <li><a href="/" class="nav-link">Inicio</a></li>
            <li><a href="javascript:void(0)" class="nav-link">Projectos</a>
                <ul class='drop'>
                    <li><a href="/">Draw WARS</a></li>
                </ul>
            </li>
            <li><a href="/" class="nav-link">Galleria</a></li>
            <li><a href="#contact" class="nav-link">Contactanos</a></li>
        </ul>
    </div>
</nav>

<script>
    var w = window.innerWidth;
    if(w < 590){
        document.getElementById('menu').classList.add("visible");
    }
    const onCicka = () => {
        document.getElementById('menu').classList.toggle("visible");
    } 
</script>
<ul class="nav nav-tabs">
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ Route('home') }}">Home</a>

    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('food-list') ? 'active' : '' }}" aria-current="page"
            href="{{ Route('food-list') }}">Food List</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link {{ Request::is('drink-list') ? 'active' : '' }}" aria-current="page"
            href="{{ Route('drink-list') }}">Drink List</a>
    </li>
</ul>

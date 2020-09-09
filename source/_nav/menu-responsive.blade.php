<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul id="reponsive-menu" class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Home</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/services"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >Services</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >About us</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact us</a>
        </li>
    </ul>
</nav>

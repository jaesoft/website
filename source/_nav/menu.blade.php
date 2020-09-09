<!-- navigation -->
<nav id="main_menu" class="w-full bg-white md:pt-0 px-6 shadow-lg relative z-20 border-t border-b border-gray-400">
    <div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
        <div class="w-full md:w-1/2 text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
            <a href="/" title="{{ $page->siteName }} Home"              class="nav-menu nav-menu-border {{ $page->isActive('/') ? 'active text-blue-600' : '' }}">Home</a>
            <a href="/services" title="{{ $page->siteName }} Services"     class="nav-menu nav-menu-border {{ $page->isActive('/services') ? 'active text-blue-600' : '' }}">Services</a>
            <a href="/about" title="{{ $page->siteName }} About Us"     class="nav-menu nav-menu-border {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">About Us</a>
            <a href="/contact" title="{{ $page->siteName }} Contact"    class="nav-menu                 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">Contact</a>
        </div>
        <div id="vue-search" class="flex flex-1 justify-end items-center">
            <search></search>
        </div>
    </div>
</nav>
<!-- /navigation -->

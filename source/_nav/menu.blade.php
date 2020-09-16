<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a class="navbar-brand row" href="#">
            <img  class=" col-6 h-8 md:h-10 mr-3" src="/assets/img/main-logo.svg" alt="{{ $page->siteName }} logo" />  
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="reponsive-menu" class="my-0 navbar-nav mr-auto">
            <li class="pl-4">
                <a
                    title="{{ $page->siteName }} Home"
                    href="/"
                    class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/') ? 'active text-blue' : '' }}"
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

      <div class="flex-search">
        <div id="vue-search" class="justify-end items-center">
            <search></search>
        </div>
    </div>
    </div>
  </nav>
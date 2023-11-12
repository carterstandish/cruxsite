<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<main id="main" class="main">
  @yield('landing-page')

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

  <div class="content">
    @yield('content')
  </div>
</main>

@include('sections.footer')

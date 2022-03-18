<ul class="nav nav-pills">
  <li class="nav-item"><a href="/" class="nav-link {{ (\Request::route()->getName() == 'home') ? 'active' : '' }}" aria-current="page">Inicio</a></li>
  <li class="nav-item"><a href="/cotizaciones" class="nav-link {{ (\Request::route()->getName() == 'cotizaciones') ? 'active' : '' }}">Cotizaciones</a></li>
  <li class="nav-item"><a href="/bolsa" class="nav-link {{ (\Request::route()->getName() == 'bolsa') ? 'active' : '' }}">Bolsa</a></li>
  <li class="nav-item"><a href="/cuentas" class="nav-link {{ (\Request::route()->getName() == 'cuentas') ? 'active' : '' }}">Cuentas</a></li>
  <li class="nav-item"><a href="/inversiones" class="nav-link {{ (\Request::route()->getName() == 'inversiones') ? 'active' : '' }}">Inversiones</a></li>
</ul>
<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        

        <li class="menu-sidebar"><a href="{{ url('/beranda') }}"><span class="fa fa-calendar-minus-o"></span> Beranda Dashboard</span></a></li>

        <li class="header"><a href=""><span class="fa fa-book"></span>
          @if(Str::length(Auth::guard('client')->user()) > 0)
          {{ Auth::guard('client')->user()->name }}
          @elseif(Str::length(Auth::guard('user')->user()) > 0)
          {{ Auth::guard('user')->user()->name }}
          @endif
        </span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/halaman1') }}"><span class="fa fa-check-circle"></span> Halaman 1</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/halaman2') }}"><span class="fa fa-check-circle"></span> Halaman 2</span></a></li>

        <li class="header">OTHER</li>

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>
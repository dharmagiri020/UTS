<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()->is('pemesanan') ? 'active' : '' }}"><a href="/pemesanan"><i class="fa fa-shopping-cart"></i> <span>Pemesanan</span></a></li>
        <li class="{{request()->is('stock_pemesanan') ? 'active' : '' }}"><a href="/stock_pemesanan"><i class="fa  fa-cart-plus"></i> <span>Stock Pemesanan</span></a></li>
        <li class="{{request()->is('barang_masuk') ? 'active' : '' }}"><a href="/barang_masuk"><i class="fa fa-opencart"></i> <span>Barang Masuk</span></a></li>
        <li class="{{request()->is('kelola_pelanggan') ? 'active' : '' }}"><a href="/kelola_pelanggan"><i class="fa  fa-user-plus"></i> <span>Kelola Pelanggan</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      
      </ul>
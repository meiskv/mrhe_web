<!-- sidebar menu -->
                      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                          <div class="menu_section">
                              <h3>Navigation</h3>
                              <ul class="nav side-menu">
                                <li><a href="{{route('admin..index')}}"><i class="fa fa-home"></i>Home</span></a>
                                  </li>
                                @role('admin')
                                <li><a><i class="fa fa-users"></i>Users<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{route('admin.user.create')}}">Create User</a>
                                          <li><a href="{{route('admin.user.index')}}">All Users</a>
                                      </ul>
                                  </li>
                                @endrole
                                <li><a><i class="fa fa-map-marker"></i>Oud Al Muteena 397<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{route('admin.data.create')}}">Create Data</a>
                                          <li><a href="{{route('datatables')}}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-map-marker"></i>Oud Al Muteena 500<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{route('admin.muteena.create')}}">Create Data</a>
                                          <li><a href="{{route('muteena')}}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-map-marker"></i>Al Muhesnah 4th<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{ route('admin.muhesnah.create') }}">Create Data</a>
                                          <li><a href="{{ route('muhesnah') }}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-map-marker"></i>Al Quoz 2nd<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{ route('admin.qouz.create') }}">Create Data</a>
                                          <li><a href="{{ route('admin.qouz.index') }}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-map-marker"></i>Hatta Makan<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{ route('admin.hatta.create') }}">Create Data</a>
                                          <li><a href="{{ route('hatta') }}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-map-marker"></i>Land Search<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{ route('admin.landsearch.create') }}">Create Data</a>
                                          <li><a href="{{ route('lands') }}">List Data</a>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- /sidebar menu -->
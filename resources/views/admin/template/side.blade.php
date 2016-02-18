<!-- sidebar menu -->
                      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                          <div class="menu_section">
                              <h3>Navigation</h3>
                              <ul class="nav side-menu">
                                @role('admin')
                                  <li><a><i class="fa fa-building"></i>Oud Al Muteena 397<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{route('admin.data.create')}}">Create Data</a>
                                          <li><a href="{{route('datatables')}}">List Data</a>
                                      </ul>
                                  </li>
                                  <li><a><i class="fa fa-building"></i>Al Muhesnah<span class="fa fa-chevron-down"></span></a>
                                      <ul class="nav child_menu" style="display: none">
                                          <li><a href="{{ route('admin.muhesnah.create') }}">Create Data</a>
                                          <li><a href="{{ route('muhesnah') }}">List Data</a>
                                      </ul>
                                  </li>
                                @endrole
                              </ul>
                          </div>
                      </div>
                      <!-- /sidebar menu -->
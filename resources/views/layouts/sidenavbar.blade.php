<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Header</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link"onclick="javascript:get_add()" href="#"><i class='mdi mdi-format-header-pound'></i></a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html"><i class='mdi mdi-tooltip-edit'></i></a></li>
              </ul>
            </div>
            <div class="col-12 grid-margin"  id='to_be_replaced'>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Header Form</h4>
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" id='title' class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                            <input type="file" id='image' class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">                    
                    <button type="button" id='save' class="btn btn-outline-warning btn-fw"  onclick="save()">Save</button>
                  </div>
                    </div>
                   
                  <div>
                  </form>
                </div>
              </div>
            </div>
                <script src="{{asset('feka/admin/jquery/jquery.min.js')}}"></script>

            <script>
               $(document).ready(function(){
                $('#to_be_replaced').hide()
               })
               
                function get_add(){
                    $('#replaced').replaceWith($('#to_be_replaced'))
                    $('#to_be_replaced').show()
                }
                function save(){
                  console.log(true)
                }
            </script>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
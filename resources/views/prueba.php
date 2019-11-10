
            <div class="header">
                <div class="row">
                    <div class="col-lg-1"  >

                    </div>
                        
      <div class="col-lg-1"  >
        
      </div>
    </div> 
                
            </div>
        <div class="container-fluid">
      
</head>

    <!--NAVBAR INICIO-->
    <?php
    include 'nav2.php';
    ?>
    <!--NAVBAR FIN-->

        </div>
        <!--ANIMACION JS-->
        <script src="js/nav.js"></script>
    </section>
  
            <div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>
                            
  <div class="main-content-inner" >
    <div class="page-content" >
                                           
    <div class="ace-settings-container" id="ace-settings-container" >
      <div class="ace-settings-box clearfix" id="ace-settings-box">
        <div class="pull-left width-50">
                  <div class="ace-settings-item">
                    <div class="pull-left">
                      <select id="skin-colorpicker" class="hide">
                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                      </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>                 </div>

                  <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" checked/>
                    <label class="lbl" for="ace-settings-add-container">
                      Inside
                      <b>.container</b>                   </label>
                  </div>
        </div><!-- /.pull-left -->

        <div class="pull-left width-50">
          <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" checked />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
          </div>
        </div><!-- /.pull-left -->
      </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->

            

  <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                          
      </div>
          
    </div><!-- /.row -->
                                                
  </div><!-- /.page-content -->
</div>
                            
        <div class="container" >
            <div class="container" >
                <div id="sidebar" class="sidebar responsive">
                                <p>
              <script type="text/javascript">
                      try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
              </script>
              @if ($menu=='nuestro_colegio')        
              @include('nav_nuestro_colegio')
              @endif
              @if ($menu=='oferta_academica')       
              @include('nav_oferta_academica')
              @endif
              @if ($menu=='comunidad_educativa')        
              @include('nav_comunidad_educativa')
              @endif
              @if ($menu=='usuario_administrador')
              @if (Session::has('login')) 

                <div class="row" >
                    <div class="col-sm-9 widget-container-col" align="center">
                        <div class="widget-box transparent">
                <div class="widget-header">
                    {{ session('login')}} 
                    @else {{route('notas_bloque')}} 
                    @endif 

                                {{ session('nombres_usuario')}} 
                                {{ session('apellidos_usuario')}} 

                                 {{ session('perfil')}}

                </div>
                        </div>
              </div>
                </div>
              @include('nav_administrador')
              @endif
              @if ($menu=='usuario_docente')
              @if (Session::has('login')) 
                <div class="row" >
              <div class="col-sm-9 widget-container-col" align="center">
                        <div class="widget-box transparent">
                <div class="widget-header">
                    {{ session('login')}} 
                    @else {{route('notas_bloque')}} 
                    @endif 
                           {{ session('nombres_usuario')}}<br> 
                           {{ session('apellidos_usuario')}}<br> 

                            {{ session('perfil')}}

                </div>
                        </div>
              </div>

              @include('nav_docente');
                    @endif
              </div>      
                


    </div>
  </div>
        
                </div>
            </div><!-- /.main-content -->
        
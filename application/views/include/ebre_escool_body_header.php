<body>
  <div class="navbar" id="navbar">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="#" class="brand">
            <small>
              <i class="icon-leaf"></i>
              Ebre-escool
            </small>
          </a><!-- /.brand -->

          <ul class="nav ace-nav pull-right">
            <li class="grey" style="display:none;">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-tasks"></i>
                <span class="badge badge-grey">4</span>
              </a>

              <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                <li class="nav-header">
                  <i class="icon-ok"></i>
                  4 Tasks to complete
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">Software Update</span>
                      <span class="pull-right">65%</span>
                    </div>

                    <div class="progress progress-mini ">
                      <div style="width:65%" class="bar"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">Hardware Upgrade</span>
                      <span class="pull-right">35%</span>
                    </div>

                    <div class="progress progress-mini progress-danger">
                      <div style="width:35%" class="bar"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">Unit Testing</span>
                      <span class="pull-right">15%</span>
                    </div>

                    <div class="progress progress-mini progress-warning">
                      <div style="width:15%" class="bar"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">Bug Fixes</span>
                      <span class="pull-right">90%</span>
                    </div>

                    <div class="progress progress-mini progress-success progress-striped active">
                      <div style="width:90%" class="bar"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    See tasks with details
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="purple" style="display:none;">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-bell-alt icon-animated-bell"></i>
                <span class="badge badge-important">8</span>
              </a>

              <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                <li class="nav-header">
                  <i class="icon-warning-sign"></i>
                  8 Notifications
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-mini no-hover btn-pink icon-comment"></i>
                        New Comments
                      </span>
                      <span class="pull-right badge badge-info">+12</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="btn btn-mini btn-primary icon-user"></i>
                    Bob just signed up as an editor ...
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
                        New Orders
                      </span>
                      <span class="pull-right badge badge-success">+8</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-mini no-hover btn-info icon-twitter"></i>
                        Followers
                      </span>
                      <span class="pull-right badge badge-info">+11</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    See all notifications
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="green" style="display:none;">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-envelope icon-animated-vertical"></i>
                <span class="badge badge-success">5</span>
              </a>

              <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                <li class="nav-header">
                  <i class="icon-envelope-alt"></i>
                  5 Messages
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Alex:</span>
                        Ciao sociis natoque penatibus et auctor ...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>a moment ago</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Susan:</span>
                        Vestibulum id ligula porta felis euismod ...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>20 minutes ago</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Bob:</span>
                        Nullam quis risus eget urna mollis ornare ...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>3:15 pm</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    See all messages
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="<?php echo base_url('/assets/avatars/user.jpg')?>" alt="Sergi's Photo" />
                <span class="user-info">
                  <small>Benvingut,</small>
                  Sergi
                </span>

                <i class="icon-caret-down"></i>
              </a>

              <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                <li>
                  <a href="#">
                    <i class="icon-cog"></i>
                    Configuració
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="icon-user"></i>
                    Perfil
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="<?php echo base_url('/index.php/skeleton_auth/auth/logout'); ?>">
                    <i class="icon-off"></i>
                    Sortir
                  </a>
                </li>
              </ul>
            </li>
          </ul><!-- /.ace-nav -->

        </div><!-- /.container-fluid -->
      </div><!-- /.navbar-inner -->
    </div>





    <div class="main-container container-fluid">
      <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
      </a>

      <div class="sidebar" id="sidebar">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <a href="<?php echo base_url('/index.php/dashboard'); ?>">
              <button class="btn btn-small btn-success">
                <i class="icon-signal"></i>
              </button>
            </a>

            <a href="#">
              <button class="btn btn-small btn-info">
                <i class="icon-flag"></i>
              </button>
            </a>
             
            <a href="#">    
              <button class="btn btn-small btn-warning">
                <i class="icon-group"></i>
              </button>
            </a>  

            <a href="#">
              <button class="btn btn-small btn-danger">
                <i class="icon-cogs"></i>
              </button>
            </a>  
          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
          </div>
        </div><!-- #sidebar-shortcuts -->

        <ul class="nav nav-list">
          <!-- PANELL DE CONTROL -->
          <li class="active">
            <a href="<?php echo base_url('/index.php/dashboard'); ?>">
              <i class="icon-dashboard"></i>
              <span class="menu-text"> Panell de control </span>
            </a>
          </li>
          <!-- PASSAR LLISTA -->
          <li>
            <a href="<?php echo base_url('/index.php/attendance/check_attendance'); ?>">
              <i class="icon-bell"></i>
              <span class="menu-text"> <?php echo lang('check_attendance');?> </span>
            </a>
          </li>
          <!-- TUTORIA -->
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-eye-open"></i>
              <span class="menu-text"> <?php echo lang('mentoring');?> </span>
              <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
              <!-- tutoritza els teus grups -->
              <li>
                <a href="<?=base_url()?>index.php/attendance/mentoring_groups">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('mentoring_groups_mentoring');?>
                </a>
              </li>
              <!-- llistat de faltes per alumne -->
              <li>
                <a href="<?=base_url()?>index.php/attendance/mentoring_attendance_by_student">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('mentoring_attendance_by_student');?>
                </a>
              </li>
            </ul>
              
          <!-- HORARIS -->
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-calendar"></i>
              <span class="menu-text"> <?php echo lang('timetables');?> </span>
              <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
              <!-- els meus horaris -->
              <li>
                <a href="<?php echo base_url('/index.php/timetables/mytimetables'); ?>">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('my_timetables');?>
              </li>
              <!-- horaris de tots els professors -->
              <li>
                <a href="<?php echo base_url('/index.php/timetables/allteacherstimetables'); ?>">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('all_teachers_timetables');?>
                </a>
              </li>
              <!-- tots els horaris de grups -->
              <li>
                <a href="<?php echo base_url('/index.php/timetables/allgroupstimetables'); ?>">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('all_groups_timetables');?>
                </a>
              </li>

            </ul>
          </li>
          <!-- INFORMES -->
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-file-text"></i>
              <span class="menu-text"> <?php echo lang('reports');?> </span>
              <b class="arrow icon-angle-down"></b>
            </a>
            <ul class="submenu">
              <!-- Assistència informes del centre -->
              <li>
                <a href="#" class="dropdown-toggle">
                  <i class="icon-double-angle-right"></i>

                  <?php echo lang('attendance'). ".<br/>" . lang('reports_educational_center_reports');?>
                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informe_centre_d_h_1'); ?>">
                      <?php echo lang('reports_educational_center_reports_incidents_by_day_and_hour');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informe_centre_di_df_1'); ?>">
                      <?php echo lang('reports_educational_center_reports_incidents_by_date');?>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informe_centre_ranking_di_df_1'); ?>">
                      <?php echo lang('reports_educational_center_reports_incidents_by_date_ranking');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/Llistat_grup_tutor'); ?>">
                      <?php echo lang('reports_educational_center_reports_grup_mentors');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/mailing_list_report'); ?>">
                      <?php echo lang('reports_educational_center_reports_student_emails');?>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Assistència informes de grup -->
              <li>
                <a href="#" class="dropdown-toggle">
                  <i class="icon-double-angle-right"></i>

                  <?php echo lang('attendance'). ".<br/> " . lang('reports_group_reports');?>
                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/class_list_report'); ?>">
                        <?php echo lang('reports_group_reports_class_list');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/class_sheet_report'); ?>">
                      <?php echo lang('reports_group_reports_student_sheet');?>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informe_resum_grup_di_df_1'); ?>">
                      <?php echo lang('reports_group_reports_incidents_by_date');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informe_resum_grup_faltes_mes_1'); ?>">
                      <?php echo lang('reports_group_reports_monthly_report');?>
                    </a>
                  </li>

                </ul>
                <!-- Informe guifi -->
                <li>
                  <a href="<?php echo base_url('/index.php/attendance/attendance_reports/informeGuifi'); ?>">
                   <i class="icon-double-angle-right"></i>
                    <?php echo lang('reports_guifi');?>
                  </a>
                </li>
              </li>

            </ul>
          </li>
          <!-- INVENTARI -->
          <li>
            <a href="<?=base_url()?>index.php/inventory/inventory">
              <i class="icon-check"></i>
              <span class="menu-text"> Inventari </span>
            </a>
          </li>

          <!-- MANTENIMENTS -->
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-briefcase"></i>
              <span class="menu-text">
                <?php echo lang('maintenances');?>
              </span>
              <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
              <!-- Persones -->
              <li>
                <a href="#" class="dropdown-toggle">
                  <i class="icon-double-angle-right"></i>

                  <?php echo lang('persons');?>

                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('/index.php/teachers'); ?>">
                      <?php echo lang('teachers');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/students'); ?>">
                      <?php echo lang('students');?>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo base_url('/index.php/persons'); ?>">
                       <?php echo lang('persons');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/persons/person_official_id_type'); ?>">
                      <?php echo lang('personal_id_type');?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/persons/localities'); ?>">
                      <?php echo "Poblacions";?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/persons/states'); ?>">
                      <?php echo "Províncies";?>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Unitats Organitzatives -->
              <li>
                <a href="<?php echo base_url('/index.php/curriculum/organizational_unit'); ?>">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('organizationalunit_menu');?>
                </a>
              </li>
              <!-- Espais -->
              <li>
                <a href="<?php echo base_url('/index.php/location/location'); ?>">
                  <i class="icon-double-angle-right"></i>
                  <?php echo lang('location_menu');?>
                </a>
              </li>
              <!-- Gestio Assistència -->              
              <li>
                <a href="#" class="dropdown-toggle">
                  <i class="icon-double-angle-right"></i>

                  <?php echo lang('attendance_managment');?>

                  <b class="arrow icon-angle-down"></b>
                </a>

                <ul class="submenu">
                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/classroom_groups'); ?>">
                      <?php echo lang('classroom_groups')?>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo base_url('/index.php/attendance/time_slots'); ?>">
                      <?php echo lang('time_slots')?>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                       <?php echo "TODO"?>
                    </a>
                  </li> 
                </ul>
              </li>
              <!-- currículum -->
         <li>
          <a href="#" class="dropdown-toggle">
            <i class="icon-double-angle-right"></i>
            <?php echo lang("curriculum");?>

                  <b class="arrow icon-angle-down"></b>
          </a>
            <ul class="submenu">
              <!-- Manteniments -->
              <li><a href='<?=base_url()?>index.php/curriculum/studies_organizational_unit'><?php echo lang('organizational_unit_studies');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/departments_families'><?php echo lang('departments_families');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/studies'><?php echo lang('studies');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/cycle'><?php echo lang('cycles');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/course'><?php echo lang('course');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/classroom_group'><?php echo lang('classroom_group');?></a></li>
              <li><a href='<?=base_url()?>index.php/curriculum/study_module'><?php echo lang('study_module');?></a></li><!-- Assignatura -->
              <li><a href='<?=base_url()?>index.php/curriculum/study_submodules'><?php echo lang('study_submodules');?></a></li><!-- Unitat Formativa -->
              <li><a href='<?=base_url()?>index.php/curriculum/lessons'><?php echo lang('lessons');?></a></li><!-- Lliçons -->              
            </ul>
         </li>  
              <!-- matricula -->
         <li>
          <a href="#" class="dropdown-toggle">
          <i class="icon-double-angle-right"></i>
            <?php echo lang('enrollment');?>
                  <b class="arrow icon-angle-down"></b>             
          </a>
           
            <ul class="submenu">
              <!-- Matrícules -->
              <li><a href='<?=base_url()?>index.php/enrollment/enrollment'><?php echo lang('enrollment');?></a></li>              
              <li><a href='<?=base_url()?>index.php/enrollment/enrollment_studies'><?php echo lang('enrollment_studies');?></a></li>              
              <li><a href='<?=base_url()?>index.php/enrollment/enrollment_class_group'><?php echo lang('enrollment_class_group');?></a></li>              
              <li><a href='<?=base_url()?>index.php/enrollment/enrollment_modules'><?php echo lang('enrollment_modules');?></a></li>              
              <li><a href='<?=base_url()?>index.php/enrollment/enrollment_submodules'><?php echo lang('enrollment_submodules');?></a></li>                            
            </ul>                                                                                                                                                                                                                                                                                                                                      
         </li>      
         <!-- Hores no lectives-->
         <li>
          <a href="#" class="dropdown-toggle">
          <i class="icon-double-angle-right"></i>
            <?php echo lang('timetables');?>
                  <b class="arrow icon-angle-down"></b>             
          </a>
           
            <ul class="submenu">
              <li><a href='<?=base_url()?>index.php/timetables/non_lective_hours'><?php echo lang('non_lective_hours');?></a></li>              
              <li><a href='<?=base_url()?>index.php/timetables/non_lective_lessons'><?php echo lang('non_lective_lessons');?></a></li>
            </ul>                                                                                                                                                                                                                                                                                                                                      
         </li> 
         <!-- Inventari -->
         <li>
          <a href="#" class="dropdown-toggle">
          <i class="icon-double-angle-right"></i>
            <?php echo lang('inventory');?>
                  <b class="arrow icon-angle-down"></b>             
          </a>
           
            <ul class="submenu">
              <li><a href='<?=base_url()?>index.php/inventory/externalIDType'><?php echo lang('externalid_menu');?></a></li>
              <li><a href='<?=base_url()?>index.php/inventory/material'><?php echo lang('material_menu');?></a></li>
              <li><a href='<?=base_url()?>index.php/inventory/brand'><?php echo lang('brand_menu');?></a></li>
              <li><a href='<?=base_url()?>index.php/inventory/model'><?php echo lang('model_menu');?></a></li>
              <li><a href='<?=base_url()?>index.php/inventory/provider'><?php echo lang('provider_menu');?></a></li>    
              <li><a href='<?=base_url()?>index.php/inventory/money_source'><?php echo lang('money_source_menu');?></a></li>              
              <li><a href='<?=base_url()?>index.php/inventory/barcode'><?php echo lang('barcode_menu');?></a></li>
            </ul>                                                                                                                                                                                                                                                                                                                                      
         </li> 

         <!-- Dades Bancaries -->
         <li>
          <a href="#" class="dropdown-toggle">
          <i class="icon-double-angle-right"></i>
            <?php echo lang('bank_data');?>
                  <b class="arrow icon-angle-down"></b>             
          </a>

            <ul class="submenu">
              <li><a href='<?=base_url()?>index.php/banks/bank_account')?><?php echo lang('bank_account');?></a></li>
            <li><a href='<?=base_url()?>index.php/banks/bank')?><?php echo lang('bank');?></a></li>
            <li><a href='<?=base_url()?>index.php/banks/bank_office')?><?php echo lang('bank_office');?></a></li>
            <li><a href='<?=base_url()?>index.php/banks/bank_account_type')?><?php echo lang('bank_account_type');?></a></li>
            </ul>                                                                                                                                                                                                                                                                                                                                      
         </li>


            </ul>
          </li>

          <!-- GESTIÓ -->
          <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-cog"></i>

              <span class="menu-text">
                <?php echo lang('managment');?>
              </span>

              <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
              <li>
                <a href="faq.html">
                  <i class="icon-double-angle-right"></i>
                  FAQ
                </a>
              </li>

              <li>
                <a href="error-404.html">
                  <i class="icon-double-angle-right"></i>
                  Error 404
                </a>
              </li>

              <li>
                <a href="error-500.html">
                  <i class="icon-double-angle-right"></i>
                  Error 500
                </a>
              </li>

              <li>
                <a href="grid.html">
                  <i class="icon-double-angle-right"></i>
                  Grid
                </a>
              </li>

              <li>
                <a href="blank.html">
                  <i class="icon-double-angle-right"></i>
                  Blank Page
                </a>
              </li>
            </ul>
          </li>


        </ul><!-- /.nav-list -->

        <div class="sidebar-collapse" id="sidebar-collapse">
          <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>

  </div>
<!-- END OF body_header. DO NOT CLOSE Body tag. Closed in body footer--> 

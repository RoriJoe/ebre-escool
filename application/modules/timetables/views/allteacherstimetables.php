﻿<div class="main-content">
                
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home home-icon"></i>
                            <a href="#">Home</a>

                            <span class="divider">
                                <i class="icon-angle-right arrow-icon"></i>
                            </span>
                        </li>
                        <li class="active"><?php echo lang('mytimetables_teacher_timetable_title');?></li>
                    </ul><!-- .breadcrumb -->

                </div>

       

    <div class="page-content">

        <div class="page-header position-relative">
                        <h1>
                            <?php echo lang("mytimetables_teacher_timetable_title");?>
                            <small>
                                <i class="icon-double-angle-right"></i>
                                <?php echo "TODO Nom Professor  ( ". lang("mytimetables_teacher_timetable_code") . " " .  $teacher_code . " )";?>
                            </small>
                        </h1>
        </div><!-- /.page-header -->


    <center>
        <select id="teachers" style="width: 400px">
            <option></option>
            <?php foreach( (array) $teachers as $teacher_id => $teacher): ?>
            <?php if( $teacher_id == $default_teacher): ?>
            <option value="<?php echo $teacher_id; ?>" selected="selected"><?php echo $teacher; ?></option>
            <?php else: ?> 
            <option value="<?php echo $teacher_id; ?>" ><?php echo $teacher; ?></option>
           <?php endif; ?> 
        <?php endforeach; ?> 
        </select> 
    </center>
    <div style="height: 10px;"></div>
    <center>
        <?php echo lang('show_full_timetable'); ?>
        <input id="show_compact_timetable" <?php if (!$compact) { echo "checked"; }?> type="checkbox" class="switch-small" 
        data-label-icon="icon-eye-open" 
        data-on-label="<i class='icon-ok'></i>" 
        data-off-label="<i class='icon-remove'></i>"
        data-off="danger">
        <?php echo lang('show_legend'); ?> <input id="hide_show_legend" type="checkbox" class="switch-small" 
        data-label-icon="icon-eye-open" 
        data-on-label="<i class='icon-ok'></i>" 
        data-off-label="<i class='icon-remove'></i>"
        data-off="danger">
    </center>
        <div style="height: 10px;" ></div>

        <div id="study_modules_legend" style="display: none;">
            <center>
            <table class="table table-striped table-bordered table-hover table-condensed" id="study_modules_legend_table" style="width:50%;">
                <thead style="background-color: #d9edf7;">
                    <tr>
                        <td colspan="5" style="text-align: center;">
                            <h4><?php echo lang('legend');?></h4>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo lang('group');?></th>
                        <th><?php echo lang('lesson_id');?></th>
                        <th><?php echo lang('name');?></th>
                        <th><?php echo lang('hours_per_week');?></th>
                        <th><?php echo lang('hours_per_week_calc');?></th>
                    </tr>
                </thead>
                <tbody><?php $i=0; ?>
                    <?php foreach ($all_teacher_study_modules as $study_module) : ?>
                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td class="group">
                                <a href="classroom_group_info/<?php echo $group_by_study_modules[$study_module->study_module_id];?>"><?php echo $group_by_study_modules[$study_module->study_module_id];?></a>
                            </td>
                            <td class="<?php echo $study_modules_colours[$study_module->study_module_id];?>">
                                <a href="study_module_info/<?php echo $study_module->study_module_shortname;?>"><?php echo $study_module->study_module_shortname;?></a>

                            </td>
                            <td>
                                <?php echo $study_module->study_module_name;?>
                            </td>
                            <td>
                                <?php echo $study_module->study_module_hoursPerWeek;?>
                            </td>
                            <td>
                                <?php echo $all_teacher_study_modules_hours_per_week[$i]; $i++;?>
                            </td>                              
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
            </center>
        </div>

        <div style="height: 10px;"></div>

        <div id="teacher_timetable" class="timetable" data-days="5" data-hours="<?php echo $time_slots_count;?>">
            <ul class="tt-events">
                
                <?php $day_index = 0; $iii=0;?>
                <?php foreach ($days as $day) : ?>
                    
                    <?php foreach ( $lessonsfortimetablebyteacherid[$day->day_number] as $day_lessons) : ?>
                        <?php foreach ( $day_lessons as $day_lesson) : ?>
                            <?php 
                            if ($day_lesson->time_slot_lective) {
                                $bootstrap_button_colour = "btn-inverse";
                            } else {
                                $bootstrap_button_colour = $study_modules_colours[$day_lesson->study_module_id];
                            }

                            $time_slot_current_position = $day_lesson->time_slot_order - $first_time_slot_order;
                            
                            ?> 

                            <li class="tt-event <?php echo $bootstrap_button_colour;?>" data-id="10" data-day="<?php echo $day->day_number - 1 ;?>" 
                                data-start="<?php echo $time_slot_current_position;?>" 
                                data-duration="<?php echo $day_lesson->duration;?>" style="margin-top:5px;">
                                <a href="<?php echo site_url();?>/timetables/classroom_group_info/<?php echo $day_lesson->group_code;?>"><?php echo $day_lesson->group_code;?></a>
                                <a href="<?php echo site_url();?>/timetables/study_module_info/<?php echo $day_lesson->study_module_shortname;?>"><?php echo $day_lesson->study_module_shortname;?></a><br />
                                <a href="<?php echo site_url();?>/timetables/location_info/<?php echo $day_lesson->location_code;?>"><?php echo $day_lesson->location_code;?></a>
                            </li>
                        <?php $iii++;?>  
                        <?php endforeach; ?>



                    <?php endforeach; ?> 
                    
                    <?php $day_index++;?> 

                <?php endforeach; ?>

            </ul>
            <div class="tt-times">
                <?php $time_slot_index = 0; ;?>
                <?php foreach ($time_slots as $time_slot_key => $time_slot) : ?>
                    <?php
                    list($time_slot_start_time1, $time_slot_start_time2) = explode(':', $time_slot->time_slot_start_time);
                    ;?>

                    <div class="tt-time" data-time="<?php echo $time_slot_index;?>">
                        <?php echo $time_slot_start_time1;?><span class="hidden-phone">:<?php echo $time_slot_start_time2;?></span></div>
                    <?php $time_slot_index++;?>    
                <?php endforeach; ?>

            </div>
            <div class="tt-days">
                <?php $day_index = 0; ;?>
                <?php foreach ($days as $day) : ?>
                    <div class="tt-day" data-day="<?php echo $day_index;?>">
                        <?php echo $day->day_shortname;?>.</div>
                    <?php $day_index++;?>    
                <?php endforeach; ?>
            </div>
        </div>
        
        <div style="height: px;"></div>
         
         <center>
            <?php echo lang('show_teacher_data');?> <input id="hide_show_teacher_legend" type="checkbox" class="switch-small" 
            data-label-icon="icon-eye-open" 
            data-on-label="<i class='icon-ok'></i>" 
            data-off-label="<i class='icon-remove'></i>"
            data-off="danger">
         </center>
        
        <div style="height: 10px;"></div>
        
        <div id="teacher_legend" style="display: none;">
            <center>
            <table class="table table-striped table-bordered table-hover table-condensed" id="study_modules_legend_table" style="width:50%;">
                <thead style="background-color: #d9edf7;">
                    <tr>
                        <td colspan="4" style="text-align: center;">
                            <h4><?php echo lang('teacher_data');?></h4>
                        </td>
                    </tr>
                </thead>
                <tbody>
                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('num_hours_per_week');?>
                            </td>
                            <td>
                                <?php echo $total_week_hours;?>
                            </td>
                        </tr>
                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('morning_hours');?>
                            </td>
                            <td>
                                <?php echo $total_morning_week_hours;?>
                            </td>
                        </tr>
                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('afternoon_hours');?>
                            </td>
                            <td>
                                <?php echo $total_afternoon_week_hours;?>
                            </td>
                        </tr>
                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('grup_count');?>
                            </td>
                            <td>
                                <?php echo $all_teacher_groups_count;?>
                            </td>
                        </tr>

                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('groups');?>
                            </td>
                            <td>
                                <?php foreach($all_teacher_groups_list as $teacher_groups){ ?>
                                <a href="classroom_group_info/<?php echo $teacher_groups;?>"><?php echo $teacher_groups;?></a>
                                <?php echo " ";} ?>
                            </td>
                        </tr>

                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('module_count');?>
                            </td>
                            <td>
                                <?php echo $all_teacher_study_modules_count;?>
                            </td>
                        </tr>

                        <tr align="center" class="{cycle values='tr0,tr1'}">
                            <td>
                                <?php echo lang('modules');?>
                            </td>
                            <td>
                                <?php foreach($all_teacher_study_modules_list as $teacher_study_modules){ ?>
                                <a href="study_module_info/<?php echo $teacher_study_modules;?>"><?php echo $teacher_study_modules;?></a>
                                <?php echo " ";} ?>                                
                            </td>
                        </tr>
                    
                </tbody>
            </table>
            </center>
        </div>
        
        <center><h3><?php echo lang('group_timetables');?></h3></center>
        
        <div class="row">
             <?php foreach ($all_teacher_groups as $teacher_group) : ?>
                <div class="span6">
                <b><center><?php echo "<a href='../classroom_group_info/".$teacher_group['classroom_group_code']."'>".$teacher_group['classroom_group_code']."</a>" . " ( " . $teacher_group['classroom_group_shortName']. " )" ;?>:</center></b>
                <div class="timetable" data-days="5" data-hours="<?php echo count($array_all_teacher_groups_time_slots[$teacher_group['classroom_group_id']]);?>">
                    <ul class="tt-events">
                        <?php $day_index = 0; $iii=0;?>
                        <?php foreach ($days as $day) : ?>
                            <?php foreach ( $lessonsfortimetablebygroupid[$teacher_group['classroom_group_id']][$day->day_number] as $day_lessons) : ?>
                                <?php foreach ( $day_lessons as $day_lesson) : ?>
                                    <?php 
                                    if ($day_lesson->time_slot_lective) {
                                        $bootstrap_button_colour = "btn-inverse";
                                    } else {
                                        //TODO not enough colours
                                        if (array_key_exists($day_lesson->study_module_id, $study_modules_colours)) {
                                            $bootstrap_button_colour = $study_modules_colours[$day_lesson->study_module_id];
                                        } else {
                                            $bootstrap_button_colour = "btn-beige";
                                        }
                                        
                                        //$bootstrap_button_colour = "btn-warning";
                                    }

                                    $time_slot_current_position = $day_lesson->time_slot_order - $first_time_slot_orderbygroupid[$teacher_group['classroom_group_id']];
                          
                                    ?> 
                                    <li class="tt-event <?php echo $bootstrap_button_colour;?>" data-id="10" data-day="<?php echo $day->day_number - 1 ;?>" 
                                        data-start="<?php echo $time_slot_current_position;?>" 
                                        data-duration="<?php echo $day_lesson->duration;?>" style="margin-top:5px;">
                                        <a href="classroom_group_info/<?php echo $day_lesson->group_code;?>"><?php echo $day_lesson->group_code;?></a>
                                        <a href="study_module_info/<?php echo $day_lesson->study_module_shortname;?>"><?php echo $day_lesson->study_module_shortname;?></a><br />
                                        <a href="location_info/<?php echo $day_lesson->location_code;?>"><?php echo $day_lesson->location_code;?></a>
                                    </li>
                                    <?php $iii++;?>  
                                <?php endforeach; ?>
                            <?php endforeach; ?> 
                           <?php $day_index++;?> 
                        <?php endforeach; ?>

                    </ul>
                    <div class="tt-times">
                        
                        <?php $time_slot_index = 0; ?>
                        
                        <?php foreach ($array_all_teacher_groups_time_slots[$teacher_group['classroom_group_id']] as $time_slot_key => $time_slot) : ?>
                            <?php
                                list($time_slot_start_time1, $time_slot_start_time2) = explode(':', $time_slot['time_slot_start_time']);
                            ;?>

                            <div class="tt-time" data-time="<?php echo $time_slot_index;?>">
                                <?php echo $time_slot_start_time1;?><span class="hidden-phone">:<?php echo $time_slot_start_time2;?></span></div>
                            <?php $time_slot_index++;?>    
                        <?php endforeach; ?>
                    </div>
                    <div class="tt-days">
                        <?php $day_index = 0; ;?>
                            <?php foreach ($days as $day) : ?>
                                <div class="tt-day" data-day="<?php echo $day_index;?>">
                                <?php echo $day->day_shortname;?>.</div>
                                <?php $day_index++;?>    
                            <?php endforeach; ?>    
                    </div>
                </div>
            </div>
             <?php endforeach; ?>
        </div>    


            
        <div class="well">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/deed.en_GB">
                <img alt="Creative Commons Licence" style="border-width: 0" src="http://i.creativecommons.org/l/by-nc-sa/2.0/uk/88x31.png" /></a><br />
                <?php echo lang('creative_commons_timetables_text');?>
        </div>

        </div>
</div>
</div>
</div>

<script>

$(function() {

    //*****************************
    //* CLASSROOMGROUP DROPDOWN  **
    //*****************************

    //Jquery select plugin: http://ivaynberg.github.io/select2/
    $("#teachers").select2(); 

    $('#teachers').on("change", function(e) {   
        selectedValue = $("#teachers").select2("val");
        var pathArray = window.location.pathname.split( '/' );
        var secondLevelLocation = pathArray[1];
        var baseURL = window.location.protocol + "//" + window.location.host + "/" + secondLevelLocation + "/index.php/timetables/allteacherstimetables";
        //alert(baseURL + "/" + selectedValue);
        window.location.href = baseURL + "/" + selectedValue;

    });

    $('#hide_show_legend').bootstrapSwitch({});

    $('#show_compact_timetable').bootstrapSwitch({});

    $('#hide_show_teacher_legend').bootstrapSwitch({});

    $('#hide_show_legend').on('switch-change', function (e, data) {
        var $element = $(data.el),
        value = data.value;
        //console.log(e, $element, value);
        $("#study_modules_legend").slideToggle();
    });


    $('#hide_show_teacher_legend').on('switch-change', function (e, data) {
        var $element = $(data.el),
        value = data.value;
        //console.log(e, $element, value);
        $("#teacher_legend").slideToggle();
    });

    $('#show_compact_timetable').on('switch-change', function (e, data) {
        var $element = $(data.el),
        value = data.value;
        
        var pathArray = window.location.pathname.split( '/' );
        var secondLevelLocation = pathArray[1];
        var baseURL = window.location.protocol + "//" + window.location.host + "/" + secondLevelLocation + "/index.php/timetables/mytymetables";

        selectedValue = "";
        console.log(value);
        if (value) {
            selectedValue = "compact";
        }
        alert(baseURL + "/" + selectedValue);
        window.location.href = baseURL + "/" + selectedValue;
    });


    $('#study_modules_legend_table').dataTable( {
                "oLanguage": {
                        "sProcessing":   "Processant...",
                        "sLengthMenu":   "Mostra _MENU_ registres",
                        "sZeroRecords":  "No s'han trobat registres.",
                        "sInfo":         "Mostrant de _START_ a _END_ de _TOTAL_ registres",
                        "sInfoEmpty":    "Mostrant de 0 a 0 de 0 registres",
                        "sInfoFiltered": "(filtrat de _MAX_ total registres)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Filtrar:",
                        "sUrl":          "",
                        "oPaginate": {
                                "sFirst":    "Primer",
                                "sPrevious": "Anterior",
                                "sNext":     "Següent",
                                "sLast":     "Últim"
                        }
            },
                "bPaginate": false,
                "bFilter": false,
        "bInfo": false,
        });

});

</script>
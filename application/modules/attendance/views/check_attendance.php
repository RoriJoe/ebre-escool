<div class="main-content">
 
<div id="breadcrumbs" class="breadcrumbs">
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
  <li class="active"><?php echo lang('check_attendance');?></li>
 </ul>
</div>

<div class="page-content">
<div class="page-header position-relative">
 <h1>
  Lliçons
  <small>
   <i class="icon-double-angle-right"></i>
    TODO Nom professor
  </small>
 </h1>
</div>

 <center>
  <select id="teachers" style="width: 400px">
  		   <option></option>
   <?php foreach( (array) $teachers as $teacher_id => $teacher_name): ?>
		   <?php if( $teacher_id == $default_teacher): ?>
            <option value="<?php echo $teacher_id; ?>" selected="selected"><?php echo $teacher_name; ?></option>
           <?php else: ?> 
            <option value="<?php echo $teacher_id; ?>" ><?php echo $teacher_name; ?></option>
           <?php endif; ?> 
   <?php endforeach; ?>	
  </select> 
  <div style="height: 10px;"></div>

  <div class="input-append date">
    	<input type="text" class="span2" value="<?php echo $check_attendance_date;?>"/><span class="add-on"><i class="icon-calendar"></i></span>
  </div>

  <div style="height: 10px;"></div>

  <?php echo "Mostrar horari complet:"; ?> <input id="hide_show_reduced_table" type="checkbox" class="switch-small" 
            data-label-icon="icon-eye-open" 
            data-on-label="<i class='icon-ok'></i>" 
            data-off-label="<i class='icon-remove'></i>"
            data-off="danger">
  
  <div style="height: 10px;"></div>

 </center>

 <div id ="check_attendance_table_reduced">

 <table class="table table-striped table-bordered table-hover table-condensed" id="table_check_attendance_table_reduced">
 <thead style="background-color: #d9edf7;">
  <tr>
    <td colspan="4" style="text-align: center;"> <h4><?php echo $check_attendance_table_title?> | Dia: <?php echo $days_of_week[$day_of_week_number] . " " . $check_attendance_date?></h4></td>
  </tr>
  <tr>
     <th><?php echo lang("time_slot");?></th>
     <th><?php echo lang("ClassroomGroup");?></th>
     <th>TODO Mòdul Profesional</th>
     <th><?php echo lang("attendances_actions");?></th>
  </tr>
 </thead>
 <tbody>
  <!-- Iteration that shows teacher groups for selected day-->
  <?php foreach ($all_time_slots_reduced as $key => $time_slot) : ?>
   <tr align="center" class="{cycle values='tr0,tr1'}" id="tr_<?php echo $key;?>">
     <td><?php echo $time_slot->time_interval;?></td>
     <td>
        <?php if ($time_slot->time_slot_lective == 1): ?>
            <li class="tt-event <?php echo $time_slot->classroom_group_colour;?>" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height:90%;" data-toggle="tooltip" 
              data-original-title="<?php echo $time_slot->group_code?>">
                <a href="<?php echo $time_slot->group_url;?> " style="text-decoration:none;color: inherit;">
                  <?php echo $time_slot->group_code;
                        if ($time_slot->group_name != "") { echo ". " . $time_slot->group_name; } ?></a><br />
                <?php echo "Lloc: " . $time_slot->lesson_location;?><br />
            </li>
        <?php else: ?>
            <li class="tt-event btn-inverse" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height: auto;">
                DESCANS<br/>
                &nbsp;<br />
            </li>
        <?php endif; ?>
     </td>

     <td>
        <?php if ($time_slot->time_slot_lective == 1): ?>
            <li class="tt-event <?php echo $time_slot->lesson_colour;?>" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height:90%;"
                data-toggle="tooltip" 
                data-original-title="<?php echo $time_slot->lesson_shortname?>">
                <?php echo $time_slot->lesson_shortname . ". " . $time_slot->lesson_name;?><br />
                <?php echo "Lloc: " . $time_slot->lesson_location;?><br />
            </li>
        <?php else: ?>
            <li class="tt-event btn-inverse" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height: auto;">
                DESCANS<br/>
                &nbsp;<br />
            </li>
        <?php endif; ?>

     </td>
     <td>
        <a href="<?php echo base_url() . "/index.php/attendance/check_attendance_classroom_group";?>" class="btn btn-primary">
          <i class="icon-bell icon-white"></i> Passar llista
        </a>
     </td>
   </tr>
        <?php endforeach; ?>
     </tbody>
    </table>

 </div>

 <div id ="check_attendance_table" style="display:none;" >
 
 <table class="table table-striped table-bordered table-hover table-condensed" id="table_check_attendance_table">
 <thead style="background-color: #d9edf7;">
  <tr>
    <td colspan="4" style="text-align: center;"> <h4><?php echo $check_attendance_table_title?> | Dia: <?php echo $days_of_week[$day_of_week_number] . " " . $check_attendance_date?></h4></td>
  </tr>
  <tr>
     <th><?php echo lang("time_slot");?></th>
     <th><?php echo lang("ClassroomGroup");?></th>
     <th>TODO Mòdul Profesional</th>
     <th><?php echo lang("attendances_actions");?></th>
  </tr>
 </thead>
 <tbody>
  <!-- Iteration that shows teacher groups for selected day-->
  <?php foreach ($all_time_slots as $key => $time_slot) : ?>
   
   <tr align="center" class="{cycle values='tr0,tr1'}" id="tr_<?php echo $key;?>">
     <td><?php echo $time_slot->time_interval;?></td>
     <td>
		<?php if ($time_slot->time_slot_lective == 1): ?>
			<li class="tt-event <?php echo $time_slot->classroom_group_colour;?>" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height:90%;" data-toggle="tooltip">
           		<a href="<?php echo $time_slot->group_url;?> " style="text-decoration:none;color: inherit;">
                <?php echo $time_slot->group_code;
                        if ($time_slot->group_name != "") { echo ". " . $time_slot->group_name; } ?></a><br />
            	<?php echo $time_slot->lesson_location;?><br />
        	</li>
		<?php else: ?>
			<li class="tt-event btn-inverse" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height: auto;">
           		DESCANS<br/>
           		&nbsp;<br />
        	</li>
		<?php endif; ?>
     </td>

     <td>
     	<?php if ($time_slot->time_slot_lective == 1): ?>
			<li class="tt-event <?php echo $time_slot->lesson_colour;?>" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height:90%;">
           		<?php echo $time_slot->lesson_shortname;
                    if ($time_slot->lesson_name != "") { echo ". " . $time_slot->lesson_name; }?><br />
            	<?php echo $time_slot->lesson_location;?><br />
        	</li>
		<?php else: ?>
			<li class="tt-event btn-inverse" style="margin-left: auto;margin-right: auto;position:relative; width: 90%; height: auto;">
           		DESCANS<br/>
           		&nbsp;<br />
        	</li>
		<?php endif; ?>

	 </td>
	 <td>
    <a href="<?php echo base_url() . "/index.php/attendance/check_attendance_classroom_group";?>" class="btn btn-primary">
  			<i class="icon-bell icon-white"></i> Passar llista
		</a>
	 </td>
   </tr>
  <?php endforeach; ?>
 </tbody>
</table>

</div>

</div>

<script>

$(function() {

    $('.tt-event').tooltip();

    $('#hide_show_reduced_table').bootstrapSwitch({});

    $('#hide_show_reduced_table').on('switch-change', function (e, data) {
        var $element = $(data.el),
        value = data.value;
        //console.log(e, $element, value);
        $("#check_attendance_table").slideToggle();
        $("#check_attendance_table_reduced").slideToggle();
    });

  //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('.obs_').editable();

  //Datatable
  //TODO
  //Obtenir les dades corresponents al dropdown escollit (alumne, hora i incidència) i insertar-los a la BD

  //***********************
  //* TEACHERS DROPDOWN  **
  //***********************

  //Jquery select plugin: http://ivaynberg.github.io/select2/
  $("#teachers").select2(); 

  $('#teachers').on("change", function(e) { 
    teacher_code = $("#teachers").select2("val");
    selected_date = $('.input-append.date').datepicker('getDate');
    day= selected_date.getDate();
    month = parseInt(selected_date.getMonth());
    converted_month = month +1 ;
    year=selected_date.getFullYear();
    formated_selectedDate = day + "/" + converted_month + "/" + year;
    //alert (formated_selectedDate);
    var pathArray = window.location.pathname.split( '/' );
    var secondLevelLocation = pathArray[1];
    var baseURL = window.location.protocol + "//" + window.location.host + "/" + secondLevelLocation + "/index.php/attendance/check_attendance";
    //alert(baseURL + "/" + teacher_code);
    window.location.href = baseURL + "/" + teacher_code + "/" + formated_selectedDate;

  }); 

  //***********************
  //* Datepicker         **
  //***********************
  $('.input-append.date').datepicker({
      format: "dd/mm/yyyy",
      weekStart: 1,
      todayBtn: true,
      language: "ca",
      daysOfWeekDisabled: "0,6",
      autoclose: true,
      todayHighlight: true
    }).on("changeDate", function(e){
        teacher_code = $("#teachers").select2("val");
        selected_date = $('.input-append.date').datepicker('getDate');
        day=selected_date.getDate();
        month = parseInt(selected_date.getMonth());
        converted_month = month +1 ;
        year=selected_date.getFullYear();
        formated_selectedDate = day + "/" + converted_month + "/" + year;

        /*
        alert ( "Day: " + day);
        alert ( "Month: " + converted_month );
        alert ( "Year: " + year);
        */

        var pathArray = window.location.pathname.split( '/' );
        var secondLevelLocation = pathArray[1];
        var  baseURL = window.location.protocol + "//" + window.location.host + "/" + secondLevelLocation + "/index.php/attendance/check_attendance";
        //alert(baseURL + "/" + selectedValue);
        window.location.href = baseURL + "/" + teacher_code + "/" + formated_selectedDate;
    });


  //*****************************
  //* CHECK ATTENDANCES TABLES **
  //*****************************

    

     $('#table_check_attendance_table_reduced').dataTable( {
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


     $('#table_check_attendance_table').dataTable( {
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





  $("select").change(function(){
    var fila = null;
    var columna = null;
    var hora = null;
    var alumne = null;
    var observacions = null;  
    var incidencia = $("option:selected", this).val();
    var id = $(this).attr('id');

    //obtenir la fila i columna a partir de l'identificador
    text = id.split("-");
    fila = text[1];
    columna = text[0];
    //hora = $(".hora_"+columna).text();
    hora= get_hour(columna);
    //alumne = $("#nom_"+fila).text();
    alumne = get_student(fila);
    insert_value(alumne,hora,incidencia);
    //read_value(alumne,hora);
  });

    //$('#groups_by_teacher_an_date1').dataTable();
    //console.log("HEY YOU1");
  
  //Datepicker
  var data;
  $.datepicker.regional['ca'] = {
          onSelect: function(date) {
                  data = date;
              },
                  closeText: 'Tancar',
                  prevText: '&#x3c;Ant',
                  nextText: 'Seg&#x3e;',
                  currentText: 'Avui',
                  monthNames: ['Gener','Febrer','Mar&ccedil;','Abril','Maig','Juny',
                  'Juliol','Agost','Setembre','Octubre','Novembre','Desembre'],
                  monthNamesShort: ['Gen','Feb','Mar','Abr','Mai','Jun',
                  'Jul','Ago','Set','Oct','Nov','Des'],
                  dayNames: ['Diumenge','Dilluns','Dimarts','Dimecres','Dijous','Divendres','Dissabte'],
                  dayNamesShort: ['Dug','Dln','Dmt','Dmc','Djs','Dvn','Dsb'],
                  dayNamesMin: ['Dg','Dl','Dt','Dc','Dj','Dv','Ds'],
                  weekHeader: 'Sm',
                  dateFormat: 'dd/mm/yy',
                  firstDay: 1,
                  isRTL: false,
                  showMonthAfterYear: false,
                  yearSuffix: ''};

  data = $( "#datepicker" ).datepicker($.datepicker.regional['ca']);
  //alert("la data es: "+data.val());
});

</script>

<?php 

  /* Urls per a fer el Insertar, Editar, Llegir i Esborrar */
  $url_insert = ('http://localhost/ebre-escool/index.php/attendance/insert/prova_incidencies');
  $url_read = ('http://localhost/ebre-escool/index.php/attendance/read/prova_incidencies');
  $url_update = ('http://localhost/ebre-escool/index.php/attendance/update/prova_incidencies');
  $url_delete = ('http://localhost/ebre-escool/index.php/attendance/delete/prova_incidencies');
?>

<script type="text/javascript">

function get_student(fila){
  alumne = $("#nom_"+fila).text();
  return alumne;
}

function get_hour(columna){
  hora = $(".hora_"+columna).text();
  return hora;
}

function insert_value(alumne,hora,incidencia){
  jQuery.ajax({
    url:'<?php echo $url_insert;?>',
    data: {
        alumne: alumne,
        incidencia: incidencia,
        hora: hora
      },
      type: 'post',
      dataType: 'json'
    }).done(
      function (data) 
      {
        alert("S'ha insertat " + data + " fila.");
      }
    ).fail(
      function() 
      {
        alert( "No s'ha pogut obtenir cap valor" );
      });
} 

function read_value(alumne,hora){
  jQuery.ajax({
    url:'<?php echo $url_read;?>',
    data: {
        alumne: alumne,
        hora: hora
      },
      type: 'post',
      dataType: 'json'
    }).done(
      function (data) 
      {
        alert("S'ha llegit " + data + ".");
      }
    ).fail(
      function() 
      {
        alert( "No s'ha pogut obtenir cap valor" );
      });
}
</script>

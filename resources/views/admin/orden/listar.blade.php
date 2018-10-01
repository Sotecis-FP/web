    @extends('layouts.admin')
    @section('content')
    <!-- page content -->
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
    <h2>ORDENES <small>FLP</small></h2>
    <a href="{{route('orden.buscar','Pendiente')}}">
    <button type="button" style="margin-left:10%;" class="btn btn-default" name="button">PENDIENTES</button>
    </a>
    <a href="{{route('orden.buscar','Aprobada')}}">
    <button type="button" style="margin-left:10%;" class="btn btn-default" name="button">APROBADAS</button>
    </a>
    <a href="{{route('orden.buscar','Anulada')}}">
    <button type="button" style="margin-left:10%;" class="btn btn-default" name="button">ANULADAS</button>
    </a>
    <ul class="nav navbar-right panel_toolbox">
    <li><a href="#"><i class="fa fa-close"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
    <tr class="headings">
    <th>Referencia </th>
    <th>Estado</th>
    <th>Nombre cliente </th>
    <th>Correo cliente </th>
    <th>Telefono </th>
    <th>Precio </th>
    <th class=" no-link last"><span class="nobr">Action</span>
    </th>
    </tr>
    </thead>

    <tbody>
      @foreach($ordenes as $orden)
    <tr class="even pointer">

    <td class=" ">{{$orden->referencia}}</td>
    <td class=" ">{{$orden->estado}}</td>
    <td class=" ">{{$orden->nombre_cliente}}
    </td>
    <td class=" ">{{$orden->correo_cliente}}</td>
    <td class=" ">{{$orden->telefono_cliente}}</td>
    <td class="a-right a-right ">${{$orden->total}}</td>
    <td class=" last">
      <a href="{{route('orden.ver',$orden->id)}}">
        <button type="button" name="button" class="btn btn-default btn-sm">VER</button>
      </a>
      <a href="{{route('orden.editar',$orden->id)}}">
        <button type="button" name="button" class="btn btn-default btn-sm">EDITAR</button>
      </a>
    </td>
    </tr>
    @endforeach




    </tbody>

    </table>
    </div>
    </div>
    </div>

    <br />
    <br />
    <br />

    </div>

    <!-- /page content -->
    </div>



    <!-- Datatables -->
    {{ Html::script('admin/js/datatables/js/jquery.dataTables.js') }}
    {{ Html::script('admin/js/datatables/tools/js/dataTables.tableTools.js') }}
    <script>
    $(document).ready(function () {
    $('input.tableflat').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass: 'iradio_flat-green'
    });
    });

    var asInitVals = new Array();
    $(document).ready(function () {
    var oTable = $('#example').dataTable({
    "oLanguage": {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"
    },
    "oAria": {
    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    },
    "aoColumnDefs": [
    {
    'bSortable': false,
    'aTargets': [0]
    } //disables sorting for column one
    ],
    'iDisplayLength': 12,
    "sPaginationType": "full_numbers",
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
    "sSwfPath": ""
    }
    });
    $("tfoot input").keyup(function () {
    /* Filter on the column based on the index of this element's parent <th> */
    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
    });
    $("tfoot input").each(function (i) {
    asInitVals[i] = this.value;
    });
    $("tfoot input").focus(function () {
    if (this.className == "search_init") {
    this.className = "";
    this.value = "";
    }
    });
    $("tfoot input").blur(function (i) {
    if (this.value == "") {
    this.className = "search_init";
    this.value = asInitVals[$("tfoot input").index(this)];
    }
    });
    });
    </script>



    @endsection

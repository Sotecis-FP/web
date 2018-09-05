@extends('layouts.admin')
@section('content')
<br/>
<!-- Modulo de reporte -->
<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a href="{{route('orden.buscar','Pendiente')}}">
<div class="tile-stats">
<div class="icon"><i class="fa fa-user"></i>
</div>
<div class="count">-</div>
<h3>ORDENES PENDIENTES</h3>
<p>Flores del prado.</p>
</div>
</a>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a href="{{route('orden.buscar','Aprobada')}}">
<div class="tile-stats">
<div class="icon"><i class="fa fa-user"></i>
</div>
<div class="count">-</div>
<h3>ORDENES APROBADAS</h3>
<p>Flores del prado.</p>
</div>
</a>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a href="{{route('orden.buscar','Anulada')}}">
<div class="tile-stats">
<div class="icon"><i class="fa fa-user"></i>
</div>
<div class="count">-</div>
<h3>ORDENES <br> ANULADAS</h3>
<p>Flores del prado.</p>
</div>
</a>
</div>



<div class="col-md-9 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Reporte general</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<ul class="dropdown-menu" role="menu">
</ul>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="dashboard-widget-content">
<div class="col-md-3 hidden-small">
<h2 class="line_30">Ordenes</h2>
<table class="countries_list">
<tbody>
<tr>
<td>Total</td>
<td class="fs15 fw700 text-right">0</td>
</tr>
<tr>
<td>Aprobadas</td>
<td class="fs15 fw700 text-right">0</td>
</tr>
<tr>
<td>Pendientes</td>
<td class="fs15 fw700 text-right">0</td>
</tr>
<tr>
<td>Anuladas</td>
<td class="fs15 fw700 text-right">0</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>


</div>

<!-- Fin modulo reporte -->




@endsection

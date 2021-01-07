{{-- PAGE NI TAK PAKAI --}}



@extends('layouts.app')

@section('title')

Dashboard | Dutarini CRM

@endsection

@section('content')

    <!--Sidebar-->

    <div class="sidebar" data-color="blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="/dashboard" class="simple-text logo-mini">
            D
          </a>
          <a href="/dashboard" class="simple-text logo-normal">
            DUTARINI CRM
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li class= "active">
              <a href="/blogs.index">
                <i class="now-ui-icons files_paper "></i>
                <p>Tickets</p>
              </a>
            </li>
            <li>
              <a href="/dashboard">
                <i class="now-ui-icons ui-1_settings-gear-63"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <!--Sidebar,--><!--Add here because need to active the sidebar  -->

<!--Page Content-->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
</div>
@endsection

<!--Page Content-->

@section('scripts')

@endsection

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
          <a href="/tickets" class="simple-text logo-mini">
            D
          </a>
          <a href="/tickets" class="simple-text logo-normal">
            DUTARINI CRM
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li class= "active">
              <a href="/tickets">
                <i class="now-ui-icons files_paper "></i>
                <p>Tickets</p>
              </a>
            </li>
            <li>
              <a href="/settings">
                <i class="now-ui-icons ui-1_settings-gear-63"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <!--Sidebar,--><!--Add here because need to active the sidebar  -->

<!--Page Content-->

<!--Page Content-->
@endsection



@section('scripts')

@endsection

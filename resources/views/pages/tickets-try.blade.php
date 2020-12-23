@extends('layouts.app')

@section('title')

Tickets | Dutarini CRM

@endsection

@section('content')

    <!--Sidebar-->
    <div class="sidebar" data-color="blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            D
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            DUTARINI CRM
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="/dashboard">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li  class= "active">
              <a href="/tickets">
                <i class="now-ui-icons files_paper"></i>
                <p>Tickets</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <!--Sidebar-->


    <!--Page Content-->
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">


            <!--Pagination-->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                </ul>
            </nav>
            <!--Pagination-->

            </div>

        </div>
        </div>
    </div>
<!--Page Content-->


@endsection


@section('scripts')

@endsection

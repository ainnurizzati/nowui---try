@extends('layouts.app')


@section('title')

Profile| Dutarini CRM

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
        <li>
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
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                            <x-jet-section-border />
                        @endif

                    </div>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
        </div>
    </div>
    <!--Page Content-->

@endsection

@section('scripts')

@endsection

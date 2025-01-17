@extends('layouts.app')

@section('title')

Settings | Dutarini CRM

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
            <li class= "active">
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
          <h4 class="card-title">Settings</h4>
        </div>
        <div class="card-body">

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>

                            <x-jet-section-border />
                        @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-jet-section-border />
            @endif

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                    <x-jet-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>

        </div>
      </div>
    </div>
</div>
@endsection

<!--Page Content-->

@section('scripts')

@endsection

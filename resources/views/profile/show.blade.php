<x-app-layout>

    <!DOCTYPE html>
<html lang="en">

<head>
 <base href="/public">
  @include("css")
  @include("cssForm")
</head>
<body>
  
    <!-- partial:partials/_navbar -->
         @include("navbar")
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html-->
         @include("settingspanel") 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
         @include("sidebar")
      <!-- partial -->

        <div class="content-wrapper">
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

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

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>

     </div>
    </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials -->
         @include("footer")
        <!-- partial -->
   
      <!-- main-panel ends -->
   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    @include("script")
    <!-- ReportScript-->
      <script src="/js/serviceAchat.js"></script>
    <!---->
</body>

</html>

</x-app-layout>

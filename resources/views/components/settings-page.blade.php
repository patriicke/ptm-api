

<!-- Settings Menu -->
<div class="settings-menu-links">
    <ul class="nav nav-tabs menu-tabs">
        <li class="nav-item {{ Request::is('settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('settings')}}">General Settings</a>
        </li>
        <li class="nav-item {{ Request::is('localization') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('localization')}}">Localization</a>
        </li>
        <li class="nav-item {{ Request::is('payment-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('payment-settings')}}">Payment Settings</a>
        </li>
        <li class="nav-item {{ Request::is('emailsettings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('emailsettings')}}">Email Settings</a>
        </li>
        <li class="nav-item {{ Request::is('social-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('social-settings')}}">Social Media Login</a>
        </li>
        <li class="nav-item {{ Request::is('social-links') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('social-links')}}">Social Links</a>
        </li>
        <li class="nav-item {{ Request::is('seo-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('seo-settings')}}">SEO Settings</a>
        </li>
        <li class="nav-item {{ Request::is('others-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('others-settings')}}">Others</a>
        </li>
    </ul>
</div>
<!-- Settings Menu -->





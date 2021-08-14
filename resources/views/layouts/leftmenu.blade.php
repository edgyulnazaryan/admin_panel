<div id="menu" role="navigation">
    <ul class="navigation list-unstyled" id="demo">
        <li><span class="close-icon d-xl-none d-lg-block"><img src="{{asset('img/images/input-disabled.png')}}"
                    alt="image missing"></span></li>

        <a href="{{ URL::to('index') }}" class="logo navbar-brand mr-0">
            <h1 class="text-center">JOSH</h1>
        </a>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('') }}">
                <span class="mm-text ">Dashboard</span>
                <span class="menu-icon"><i class="im im-icon-Home"></i></span>
            </a>
        </li>

        <li {!! (Request::is('builder') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('builder') }}">
                <span class="mm-text ">Crud Builder</span>
                <span class="menu-icon"><i class="im im-icon-Gift-Box"></i></span>
            </a>
        </li>

        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('typography') }}">
                <span class="mm-text ">Typography</span>
                <span class="menu-icon"><i class="im im-icon-Italic-Text"></i></span>
            </a>
        </li>

        <li {!! (Request::is('buttons') || Request::is('alerts') || Request::is('dropdown') || Request::is('cards') ||
            Request::is('forms') || Request::is('form_layout')|| Request::is('form_examples') ||
            Request::is('accordion') || Request::is('progress_bar') || Request::is('pagination') || Request::is('icons')
            || Request::is('tabs') || Request::is('modals') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" )
            !!}>
            <a href="#">
                <span class="mm-text ">Content</span>
                <span class="menu-icon "> <i class="im im-icon-Pen-4"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('alerts') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('alerts') }}">
                        Alerts
                    </a>
                </li>
                <li {!! (Request::is('buttons') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('buttons') }}">
                        Buttons
                    </a>
                </li>
                <li {!! (Request::is('cards') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('cards') }}">
                        <span class="mm-text ">Cards</span>
                    </a>
                </li>
                <li {!! (Request::is('dropdown') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('dropdown') }}">

                        <span class="mm-text ">Dropdown</span>
                    </a>
                </li>
                <li {!! (Request::is('forms') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('forms') }}">

                        <span class="mm-text ">Forms</span>
                    </a>
                </li>
                <li {!! (Request::is('form_layout') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('form_layout') }}">

                        <span class="mm-text ">Form Layouts</span>
                    </a>
                </li>
                <li {!! (Request::is('form_examples') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('form_examples') }}">

                        <span class="mm-text ">Form Examples</span>
                    </a>
                </li>
                <li {!! (Request::is('accordion') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('accordion') }}">

                        <span class="mm-text ">Accordion</span>
                    </a>
                </li>
                <li {!! (Request::is('progress_bar') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('progress_bar') }}">
                        <span class="mm-text ">Progressbar</span>
                    </a>
                </li>
                <li {!! (Request::is('pagination') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('pagination') }}">
                        <span class="mm-text ">Pagination</span>
                    </a>
                </li>
                <li {!! (Request::is('icons') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('icons') }}">
                        <span class="mm-text ">Icons</span>
                    </a>
                </li>
                <li {!! (Request::is('tabs') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('tabs') }}">
                        <span class="mm-text ">Tabs</span>
                    </a>
                </li>
                <li {!! (Request::is('modals') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('modals') }}">
                        <span class="mm-text ">Modals</span>
                    </a>
                </li>
            </ul>
        </li>

        <li {!! (Request::is('table') || Request::is('data_table') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Tables</span>
                <span class="menu-icon "> <i class="im im-icon-Window-2"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('table') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('table') }}">
                        <span class="mm-text ">Table</span>
                    </a>
                </li>
                <li {!! (Request::is('data_table') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('data_table') }}">
                        Advanced Data Table
                    </a>
                </li>
            </ul>
        </li>

        <li {!! (Request::is('advanced_select') || Request::is('toastr') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Pages</span>
                <span class="menu-icon "> <i class="im im-icon-Books"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('advanced_select') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('advanced_select') }}">
                        Advanced Form Elements
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('toastr') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('toastr') }}">
                        Toastr Notification
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('sweetalert') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('sweetalert') }}">
                        Advanced Alerts
                    </a>
                </li>
            </ul>
        </li>







        @include("layouts/menu")
    </ul>
    <!-- / .navigation -->
</div>

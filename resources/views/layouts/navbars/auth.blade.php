<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQGC7S7pcdHycw/company-logo_200_200/0/1572314657860?e=2159024400&v=beta&t=vSAWRQ1JZaVcXUtg5nEZF7YwTlgK9lcqi6XL9Z3NDT8">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Creative Tim') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'customers' ? 'active' : '' }}">
                <a href="{{ route('customers.index') }}">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>{{ __('Customers') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'cities' ? 'active' : '' }}">
                <a href="{{ route('cities.index') }}">
                    <i class="nc-icon nc-world-2"></i>
                    <p>{{ __('Cities') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
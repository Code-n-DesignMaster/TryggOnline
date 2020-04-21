@php if(!is_user_logged_in()): @endphp
        @include('woocommerce.partials.form-login.content')
@php else: @endphp
        <h1>logged in</h1>
@endif
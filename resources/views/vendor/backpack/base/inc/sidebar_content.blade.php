<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('receiver') }}'><i class='nav-icon la la-question'></i> Receivers</a></li>
<form action="{{ backpack_url('message') }}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">Place Order</button>
</form>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('client') }}'><i class='nav-icon la la-question'></i> Clients</a></li>
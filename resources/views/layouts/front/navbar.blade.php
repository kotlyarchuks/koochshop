<nav class="container">
    <div class="flex justify-between items-center py-5">
        <div>
            <a class="text-5xl" href="{{ route('home') }}">{{ config('app.name') }}</a>
        </div>
        <div class="flex items-center">
            <div class="mr-16">
                <form action="{{route('search.product')}}" method="GET">
                    <input
                            type="text"
                            name="q"
                            placeholder="Search..."
                            value="{!! request()->input('q') !!}"
                            class="input py-3 px-5"
                    >
                </form>
            </div>
            <div>
                <ul class="list-none flex items-center text-2xl">
                    @if(auth()->check())
                        <li class="mr-12">
                            <a href="{{ route('accounts', ['tab' => 'profile']) }}">My Account</a>
                        </li>
                        <li class="mr-12">
                            <a href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="mr-12">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="mr-12">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                    <li id="cart" class="menubar-cart">
                        <a href="{{ route('cart.index') }}" title="View Cart" class="awemenu-icon relative">
                            <i class="fa fa-shopping-cart text-4xl" aria-hidden="true"></i>
                            <span class="cart-icon">
                                {{ $cartCount }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
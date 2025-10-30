<a href="/gateways/create">
    <strong>Make a New Galleon Gateway ⛵</strong> 
</a>
<h2>Your Galleon Gateways</h2>
<ul>
    @foreach ($gateways as $gateway)
        <li>
            <a href="/gateways/{{ $gateway['id'] }}/non-like">
                <strong>{{ $gateway['name'] }}</strong> 
            </a>
        </li>
    @endforeach
</ul>


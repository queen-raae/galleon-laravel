
<a href="/gateways/create">
    <strong>Make a New Galleon Gateway ⛵</strong> 
</a>
<ul>
    @foreach ($gateways as $gateway)
        <li>
            <a href="/gateways/{{ $gateway['id'] }}">
                <strong>{{ $gateway['name'] }}</strong> 
            </a>
        </li>
    @endforeach
</ul>


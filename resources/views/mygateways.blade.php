
<a href="/newgateway">
    <strong>New Gateway</strong> 
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
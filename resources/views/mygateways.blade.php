
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

<!-- Todo:  show $job in instead of $gateway and then switch back, when I've fixed Jobs.php -->

<a href="/newgateway">
    <strong>Make a New Galleon Gateway ⛵</strong> 
</a>
<ul>
    @foreach ($gateways as $gateway)
        <li>
            <a href="/mygateways/{{ $gateway['id'] }}">
                <strong>{{ $gateway['name'] }}</strong> 
            </a>
        </li>
    @endforeach
</ul>

<!-- Todo:  show $job in instead of $gateway and then switch back, when I've fixed Jobs.php -->
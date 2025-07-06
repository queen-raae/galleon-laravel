


<h2>
    <strong>Add a provider</strong> 
</h2>

<p> A dropdown with providers</p>

<ul>
    @foreach ($providers as $provider)
        <li>
            <p>
                <strong>{{ $provider['name'] }}</strong> 
            </p>
        </li>
    @endforeach
</ul>

<a href="" >Save</a>
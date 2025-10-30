<!-- POST  -->
<form method="POST" action="/gateways/{{ $gateway->id }}">
    @csrf 
    @method('PATCH')
    <div>
        <div>
        <h2>You Fake Framer Post You ⛵</h2>
        <div>
            <input 
                type="radio" 
                id="like_button_toggled" 
                name="like_button_toggled" 
                value="yes" 
            />
            <label for="like_button_toggled">Like</label>
        </div>
        <div">
            <button form="delete-like-form">Delete Like</button>
        </div>
        
            <div>
                <div>
                    <label for="title">Fake URL For a Framer Post </label>
                    <div>
                        <div>
                            <input
                                placeholder="🥔 Potet på 🛴  " 
                                type="text" 
                                name="name" 
                                id="name" 
                                
                            >
                        </div>
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    
                    
                    </div>
            </div>
            
        </div>
        </div>



    <div>
        <button type="button">Cancel</button>
        <button type="submit">Save</button>
    </div>
</form>

<!-- Non-like form at http://galleon.test/gateways/{id}/non-like  -->
    

<form method="POST" action="/gateways/{{ $gateway->id }}"  id="delete-like-form" class="hidden">
    @csrf 
    @method('DELETE')
</form>
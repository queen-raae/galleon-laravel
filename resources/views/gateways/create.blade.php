<!-- POST  -->
<form method="POST" action="/gateways">
    @csrf 

    <div>
        <div>
        <h2>You Fake Framer Post ⛵</h2>
        <div>
            <input 
                type="radio" 
                id="like_button_toggled" 
                name="like_button_toggled" 
                value="yes" 
            />
            <label for="like_button_toggled">Like</label>
        </div>        

            <div>
                <div>
                    <label for="title">Framer Post Fake URL</label>
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

<!-- Unlike form at http://galleon.test/gateways/{id}/unlike  -->
<form method="POST" action="/gateways/{{ $gateway->id }}" id="unlike-form" class="hidden">
    @csrf 
    @method('PATCH')
    <p>Unlike</p>
</form>


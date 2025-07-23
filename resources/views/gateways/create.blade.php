
    <!-- 15:43 @csrf  -->
    <form method="POST" action="/gateways">
    @csrf 

    <div>
        <div>
        <h2>Create a New Galleon Gateway ⛵</h2>
        <p>We just need a name from you to start.</p>

            <div>
                <div>
                    <label for="title">Gateway Name</label>
                    <div>
                        <div>
                            <input
                                placeholder="🥔 Potet på 🛴  " 
                                type="text" 
                                name="name" 
                                id="name" 
                                required
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



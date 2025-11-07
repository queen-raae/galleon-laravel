<!-- POST  -->
<form method="POST" action="/api/likes">
    @csrf

    <div>
        <div>
        <h2>You Fake Framer API You ⛵</h2>
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
        <button type="button" form="delete-form">DELETE</button>
    </div>
</form>


<!-- DELETE  -->
<form method="POST" action="/api/likes" id="delete-form" class="hidden">
    
    @method('DELETE')
    @csrf 

</form>
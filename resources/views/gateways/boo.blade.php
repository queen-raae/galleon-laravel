<!-- POST  -->
<!-- 'art_id' not 'name' 
'bookmark_button_toggled' not 'like_button_toggled' -->
<form method="POST" action="/reactions">
    @csrf

    <div>
        <div>
        <h2>You Fake Framer API You ⛵</h2>
        <div>
            <input
                type="radio"
                id="action_type"
                name="action_type"
                value="bookmark"
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
                                name="art_id"
                                id="art_id"

                            >
                        </div>
                        @error('shipmate_id')
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


<!-- DELETE  -->
<!-- <button type="button" form="delete-form">DELETE</button> -->
<!-- <form method="POST" action="/boof" id="delete-form" class="hidden">
    
    @method('DELETE')
    @csrf 

</form> -->
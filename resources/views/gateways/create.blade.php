<x-layout>
    
    <!-- 15:43 @csrf  -->
    <form method="POST" action="/jobs">
    @csrf 

    <div>
        <div>
        <h2>Tell Your Tale</h2>
        <p>We just need a handful of details from you.</p>

            <div>
                <div>
                    <label for="title">Title</label>
                    <div>
                        <div>
                            <input type="text" name="title" id="title" placeholder="Dev">
                        </div>
                        @error('title')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
            
                <div>
                    <label for="salary">Salary</label>
                    <div>
                        <div>
                            <input type="text" name="salary" id="salary" placeholder="1 million $" >
                        </div>
                        @error('salary')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- <div class="mt-10">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div> -->
        </div>
        </div>



    <div>
        <button type="button">Cancel</button>
        <button type="submit">Save</button>
    </div>
    </form>


</x-layout>
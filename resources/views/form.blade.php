<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
     <h4 class="bg-amber-400">User Form</h4>
<!--      
     @if($errors->any())
     @foreach($errors->all() as $error)
     <div>{{$error}}</div>
     @endforeach
     @endif -->

     <form action="adduser" method="post">
        @csrf
        <div>
            <input 
                type="text" 
                placeholder="User name"
                name="user-name"
                value="{{old('user-name')}}"
            >
            <span>@error('user-name'){{$message}} @enderror</span>
        </div>
        <div>
            <input 
                type="email" 
                placeholder="User email"
                name="user-email"
                value="{{old('user-email')}}"
            >
            <span style="color:red">@error('user-email'){{$message}} @enderror</span>
        </div>
        <div>
            <input 
                type="password" 
                placeholder="User password"
                name="user-password"
                value="{{old('user-password')}}"
            >
        </div>
        <div>
            <input 
                type="submit" 
                value="Register"
            >
        </div>
     </form>
</div>

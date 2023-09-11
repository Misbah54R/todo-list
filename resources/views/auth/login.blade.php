<x-common.index></x-common.index>
  
        <x-common.nav></x-common.nav>

<div class=" w-1/3 mx-auto">


<form method="Post" class=" bg-violet-100 rounded-xl mt-24 p-6" action="{{ route('login.store')}}">
    @csrf

    <h1 class="text-2xl font-bold mb-4 text-center">
       Welcome Back
    </h1>
    
    <div class="w-full">

        <label for="email" class="mt-2 mb-2 inline-block font-semibold">Your email</label>
        <x-common.input type="email" name="email" id="email" placeholder="name@company.com" value="{{old('email')}}"></x-common.input>
    
        @error('email')
                <div class="text-sm text-red-700">{{ $message }}</div>
                @enderror  
   
    </div>
    <div class="w-full">
        <label for="password" class="mt-2 mb-2 inline-block font-semibold">Password</label>
        <x-common.input type="password" name="password" id="password" placeholder="••••••••" ></x-common.input>
   
   
    </div>
   
    
    <div class="w-full">
    <button type="submit" class="text-white font-medium w-full bg-violet-500 rounded-lg cursor-pointer hover:bg-violet-700 py-3 mt-3">Login</button>
    </div>


    
         <p class="text-sm mt-1 w-full mx-auto">Don’t have an account yet? <a href="{{ route('register')}}" class="font-medium hover:underline">Sign up</a>
      </p> 
</form>

</div>
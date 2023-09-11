<x-common.index></x-common.index>

<x-common.nav></x-common.nav>


@auth
<div class="w-full">
  <section>
    <div class=" grid gap-8 w-screen h-screen max-w-screen-xl grid-cols-1 mx-auto text-center place-content-center ">
      <div class="font-bold text-5xl text-violet-900  ">
        {{__('Welcome Back') . ' '. Auth::user()->name}}. {{__('Pickup where you left.') }}!
      </div>

      <div class="text-center">
        <a href="#" class=" rounded px-4 py-2 text-xg text-white bg-violet-700">Get Started</a>
      </div>
    </div>
  </section>
  <section class="bg-violet-100" id="About">
    <div class="h-screen w-screen grid grid-cols-1 text-center mx-auto place-content-center">
      <p class="font-bold text-5xl text-violet-900"> Organize your work and life, finally. </p>
      <p class=" px-4 py-4 text-2xl text-violet-900"> Become focused, organized, and calm with Todo list.</p>
    </div>
  </section>

  <section id="Services" class="bg-violet-50 grid grid-cols-1">
    <div class="mt-24 p-8 w-1/2">
      <div>
        <x-common.pRed></x-common.pRed>
        Clear your mind 
        <x-common.pViolet></x-common.pViolet>

          The fastest way to get tasks out of your head.
        <x-common.pSlate></x-common.pSlate>
          Type just about anything into the task field and Todoist’s one-of-its-kind natural language recognition will instantly fill your to-do list.
        
      </div>
      <div class="mt-24">
        <x-common.pRed></x-common.pRed>
        Focus on what’s important
        <x-common.pViolet></x-common.pViolet>

          Reach that mental clarity you’ve been longing for.
        <x-common.pSlate></x-common.pSlate>
          Your tasks are automatically sorted into Today, Upcoming, and custom Filter views to help you prioritize your most important work.
      
      </div>
      <div class="mt-24">
        <x-common.pRed></x-common.pRed>
        Get it all done
        <x-common.pViolet></x-common.pViolet>
         Where work and personal tasks can finally coexist.
        <x-common.pSlate></x-common.pSlate>
          Tons of tasks, just one app. With workspaces, your personal, work, and team tasks can all live harmoniously under the same roof. (Sigh of relief).
        
      </div>
    </div>
  </section>
  <section>
    <div>
      <p class="font-bold text-violet-900 text-5xl text-center mt-40 mb-40 p-8 w-3/4 mx-auto">“Todoist makes it easy to go as simple or as complex as you want”</p>
    </div>
  </section>

  @else
  <div class="w-full">
    <div class=" grid gap-8 w-screen h-screen max-w-screen-xl grid-cols-1 mx-auto text-center place-content-center ">
      <div class="font-bold text-5xl text-violet-900  ">
        Welcome to ToDo Lists. Sign up and get started today. Or login to pickup where you left</div>

      <div class="text-center">
        <a href="{{ route('register') }}" class=" rounded px-4 py-2 text-xg text-white bg-violet-700">Sign up</a>
        <a href="{{ route('login.create') }}" class=" rounded px-4 py-2 text-xg text-white bg-violet-700">Login</a>
      </div>
    </div>
    @endauth




  </div>
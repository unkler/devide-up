<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <h1 class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
      <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap  text-white" href="{{ config('app.url') }}">
        Devide Up
      </a>
      <button
        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
        type="button"
        onclick="toggleNavbar('collapse-navbar')"
      >
        <i class="text-white fas fa-bars"></i>
      </button>
    </h1>
    <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="collapse-navbar">
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center">
          <a
            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg font-bold"
            href="{{ config('app.url') }}/login"
          >
            <i class="lg:text-gray-300 text-gray-500 fas fa-sign-in-alt text-lg leading-lg"></i>
            <span class="inline-block ml-2">ログイン</span>
          </a>
        </li>
        <li class="flex items-center">
          <a
            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg font-bold"
            href="{{ config('app.url') }}/register"
          >
            <i class="lg:text-gray-300 text-gray-500 fas fa-user-plus text-lg leading-lg"></i>
            <span class="inline-block ml-2">無料登録</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
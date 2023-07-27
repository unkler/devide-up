<footer class="relative bg-gray-300 pt-8 pb-6">
  <div
    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
    style="height: 80px;"
  >
    <svg
      class="absolute bottom-0 overflow-hidden"
      xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="none"
      version="1.1"
      viewBox="0 0 2560 100"
      x="0"
      y="0"
    >
      <polygon
        class="text-gray-300 fill-current"
        points="2560 0 2560 100 0 100"
      ></polygon>
    </svg>
  </div>
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="w-full lg:w-6/12 px-4">
      </div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <ul class="list-unstyled">
              <li>
                <a
                  class="text-gray-700 hover:text-gray-500 font-semibold block pb-2 text-sm"
                  href="{{ config('app.url') }}/privacy_policy"
                >
                  プライバシーポリシー
                </a>
              </li>
              <li>
                <a
                  class="text-gray-700 hover:text-gray-500 font-semibold block pb-2 text-sm"
                  href="{{ config('app.url') }}/terms_of_service"
                >
                  利用規約
                </a>
              </li>
              <li>
                <a
                  class="text-gray-700 hover:text-gray-500 font-semibold block pb-2 text-sm"
                  href="{{ config('app.url') }}/management"
                >
                  運営元
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-gray-400" />
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-gray-600 font-semibold py-1">
          Copyright © Devide Up
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
</script>
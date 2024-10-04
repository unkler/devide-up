<!DOCTYPE html>
<html>
@component('components.landing.header')
運営元 | Devide Up
@endcomponent

<body class="text-gray-800 antialiased">
  @component('components.landing.nav')
  @endcomponent
  <main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
      <div class="absolute top-0 w-full h-full bg-center bg-cover"
        style="background-image: url('https://devide-up.s3.ap-northeast-1.amazonaws.com/images/hero.jpg');">
        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div class="pr-12">
              <h2 class="text-white font-semibold text-5xl">
                運営元
              </h2>
              <p class="mt-4 text-lg text-gray-300">
                エンジニア歴10年以上のベテランが手がける信頼のおける技術力を活かした高品質なサービス
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <section class="text-gray-600 body-font bg-gray-200">
      <div class="container px-5  mx-auto flex flex-col">
        <div class="lg:w-4/6 mx-auto">
          <div class="flex flex-col sm:flex-row mt-10">
            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
              <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-500 text-gray-400">
                <img src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/unkler_logo.png"
                  class="rounded-full">
              </div>
              <div class="flex flex-col items-center text-center justify-center">
                <h2 class="font-medium title-font mt-4 text-gray-900 text-2xl">unkler</h2>
              </div>
            </div>
            <div
              class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
              <p class="leading-relaxed font-normal text-lg text-gray-500 dark:text-gray-400 mb-4">
                WEBアプリケーション(認証システム、ログ管理システム、社内基幹システム)の開発を長年に渡り担当。
                エンジニア職と兼任してチームリーダーを務め、上流から下流工程まで幅広く経験。
                現在はフリーランスのエンジニアとして、Webシステムを開発。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @component('components.landing.footer')
  @endcomponent
</body>

</html>
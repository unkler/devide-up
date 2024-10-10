<!DOCTYPE html>
<html>
@component('components.landing.header')
Devide Up | 現場作業向け スケジュール管理ツール
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
              <h2 class="text-white font-semibold text-4xl">
                現場の割り振りを簡単・正確に管理
              </h2>
              <p class="mt-4 text-lg text-gray-300">
                直感的なインターフェースと柔軟なスケジュール管理で、タスクの割り当てを容易に。
                適切な役割分担と効果的なリソース配分で社内の生産性を最大化。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <section class="pb-20 bg-gray-300 -mt-24">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg scroll-reveal">
              <div class="px-4 py-5 flex-auto">
                <div class="flex justify-center">
                  <img src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/thinking_man.png" width="100"
                    class="m-auto" alt="エクセルでの管理から脱却">
                </div>
                <h3 class="text-xl font-semibold mt-4">エクセルでの管理から脱却</h3>
                <p class="mt-2 mb-4 text-gray-600">
                  ユーザーの使いやすさを最優先に考え、シンプルなデザインを採用。直感的な操作性と視覚的な整合性により、ストレスのないシームレスな体験を提供。
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg scroll-reveal">
              <div class="px-4 py-5 flex-auto">
                <div class="flex justify-center">
                  <img src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/browser.png" width="100"
                    class="m-auto" alt="かんたん登録">
                </div>
                <h3 class="text-xl font-semibold mt-4">かんたん登録</h3>
                <p class="mt-2 mb-4 text-gray-600">
                  「ユーザー名」 「メールアドレス」 「パスワード」を登録するだけで、全ての機能が無料で利用可能。
                </p>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-4/12 px-4 text-center">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg scroll-reveal">
              <div class="px-4 py-5 flex-auto">
                <div class="flex justify-center">
                  <img src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/worker.png" class="text-center"
                    width="100" class="m-auto" alt="現場作業の割り当てに特化">
                </div>
                <h3 class="text-xl font-semibold mt-4">現場作業の割り当てに特化</h3>
                <p class="mt-2 mb-4 text-gray-600">
                  スケジュールや作業の可視化し、正確な管理で現場作業を最適化。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap items-center mt-32 scroll-reveal">
          <div class="w-full px-4 mr-auto ml-auto">
            <div class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-lg rounded-lg bg-blue-800">
              <img src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/landing_expain01.png"
                class="w-full align-middle rounded-t-lg" alt="操作画面イメージ" />
              <blockquote class="relative p-8 mb-4">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                  class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                  <polygon points="-30,95 583,95 583,65" class="text-blue-800 fill-current"></polygon>
                </svg>
                <h4 class="text-xl font-bold text-white">
                  分かりやすいインターフェイスで優れた操作を実現
                </h4>
                <p class="text-md font-light mt-2 text-white">
                  直感的に操作できるインターフェイス。<br>
                  シンプルなデザインと一貫性を重視し、初めての利用者でも直感的に操作可能。<br>
                  メール通知など、リアルタイムな情報共有と柔軟な割り当て機能で、チームの生産性を向上。
                </p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="relative block bg-gray-900 pb-5">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="mx-auto px-4 lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-6/12 px-4 text-center mb-10">
            <h2 class="text-4xl font-semibold text-white">
              <i class="far fa-question-circle"></i>
              <span class="text-3xl">よくある質問</span>
            </h2>
          </div>
          <div class="m-2 space-y-2 scroll-reveal">
            <div class="group flex flex-col gap-2 rounded-lg bg-blue-800 p-5 text-white" tabindex="1">
              <div class="flex cursor-pointer items-center justify-between">
                <span class="text-lg border-b-2">なぜ全ての機能が無料で提供できるのですか？</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                  class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" alt="toggle button" />
              </div>
              <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                当サービスは広告費で運用しております。<br>
                よって全てのサービスの利用において利用者様がご負担する必要は一切ありません。
              </div>
            </div>
            <div class="group flex flex-col gap-2 rounded-lg bg-blue-800 p-5 text-white" tabindex="2">
              <div class="flex cursor-pointer items-center justify-between">
                <span class="text-lg border-b-2">データに関しての機密性は守られていますか？</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                  class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" alt="toggle button" />
              </div>
              <div
                class="invisible h-auto max-h-0 opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                当サービス利用者のデータプライバシーを最重要視しております。<br>
                データは厳重に保護され、SSL暗号化などのセキュリティ対策により安全に送受信されます。<br>
                個人情報は匿名化され、第三者への提供はありません。
              </div>
            </div>
            <div class="group flex flex-col gap-2 rounded-lg bg-blue-800 p-5 text-white" tabindex="3">
              <div class="flex cursor-pointer items-center justify-between">
                <span class="text-lg border-b-2">ユーザー情報は広告ターゲティングに使用されるのでしょうか？</span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                  class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" alt="toggle button" />
              </div>
              <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                ユーザー情報は広告ターゲティングに使用されることはありません。<br>
                個人情報の取り扱いについては、ユーザーのプライバシーを最優先に考慮し、厳重に管理しています。
                広告主へのユーザー情報の提供や、広告ターゲティングのためのデータの共有は一切行われません。
              </div>
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
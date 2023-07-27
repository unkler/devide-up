<!DOCTYPE html>
<html>
@component('components.landing.header')
プライバシーポリシー | Devide Up
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
              <h1 class="text-white font-semibold text-5xl">
                プライバシーポリシー
              </h1>
              <p class="mt-4 text-lg text-gray-300">
                当サイトは、当サイトが取得した個人情報の取扱いに関し、個人情報の保護に関する法律、個人情報保護に関するガイドライン等の指針、その他個人情報保護に関する関係法令を遵守します。
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
    <section class="pb-20 bg-gray-200">
      <div class="container mx-auto px-4">
        <h4 class="text-2xl font-extrabold dark:text-white pt-10">個人情報の安全管理</h4>
        <p class="mb-10 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、個人情報の保護に関して、組織的、物理的、人的、技術的に適切な対策を実施し、
          本サービスの取り扱う個人情報の漏えい、滅失又はき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講ずるものとします。
          個人情報の取得等の遵守事項 本サービスによる個人情報の取得、利用、提供については、以下の事項を遵守します。
        </p>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の取得</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、本サービスが管理するインターネットによるサービスの運営に必要な範囲で、本サイトの一般利用者（以下「ユーザー」といいます。）
          又は本サイトに広告掲載を行う者（以下「掲載主」といいます。）から、ユーザー又は掲載主に係る個人情報を取得することがあります。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の利用目的</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、本サービスが取得した個人情報について、法令に定める場合又は本人の同意を得た場合を除き、
          以下に定める利用目的の達成に必要な範囲を超えて利用することはありません。
          <ul class="list-disc ml-10">
            <li>本サイトの運営、維持、管理</li>
            <li>本サイトを通じたサービスの提供及び紹介</li>
          </ul>
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の提供等</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、法令で定める場合を除き、本人の同意に基づき取得した個人情報を、本人の事前の同意なく第三者に提供することはありません。
          なお、本人の求めによる個人情報の開示、訂正、追加若しくは削除又は利用目的の通知については、法令に従いこれを行うとともに、ご意見、ご相談に関して適切に対応します。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の利用目的の変更</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          前項で特定した利用目的は変更される場合がございます。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の取扱いの改善・見直し</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、個人情報の取扱い、管理体制及び取組みに関する点検を実施し、継続的に改善・見直しを行います。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">個人情報の廃棄</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、個人情報の利用目的に照らしその必要性が失われたときは、個人情報を消去又は廃棄するものとし、
          当該消去及び廃棄は、外部流失等の危険を防止するために必要かつ適切な方法により、業務の遂行上必要な限りにおいて行います。
          苦情や相談の担当窓口 本サービスは、個人情報の取扱いに関する担当窓口及び責任者を以下の通り設けます。
          <div>
            <a href="mailto:unkler0830@gmail.com" class="underline">担当窓口はこちらへ</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  @component('components.landing.footer')
  @endcomponent
</body>

</html>
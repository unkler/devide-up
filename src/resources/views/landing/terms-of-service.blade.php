<!DOCTYPE html>
<html>
@component('components.landing.header')
利用規約 | Devide Up
@endcomponent

<body class="text-gray-800 antialiased">
  @component('components.landing.nav')
  @endcomponent
  <main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
      <div class="absolute top-0 w-full h-full bg-center bg-cover"
        style="background-image: url('https://devide-up2025.s3.ap-northeast-1.amazonaws.com/images/hero.jpg');">
        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div class="pr-12">
              <h2 class="text-white font-semibold text-5xl">
                利用規約
              </h2>
              <p class="mt-4 text-lg text-gray-300">
                この利用規約（以下、「本規約」といいます。）は、ウェブサービス「Devide Up」上で提供するサービス（以下、「本サービス」といいます。）の利用条件を定めるものです。
                ご利用ユーザーの皆さま（以下、「ユーザー」といいます。）には、本規約に従って、本サービスをご利用いただきます。
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
        <h4 class="text-2xl font-extrabold dark:text-white pt-10">適用</h4>
        <p class="mb-10 font-normal text-gray-500 dark:text-gray-400">
          本規約は、ユーザーと本サービスとの間の本サービスの利用に関わる一切の関係に適用されるものとします。
        </p>
        <h5 class="text-xl font-extrabold dark:text-white">禁止事項</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          ユーザーは、本サービスの利用にあたり、以下の行為をしてはなりません。
          <ul class="list-disc ml-10">
            <li>法令または公序良俗に違反する行為 犯罪行為に関連する行為</li>
            <li>本サービスのサーバーまたはネットワークの機能を破壊したり、妨害したりする行為</li>
            <li>本サービスのサービスの運営を妨害するおそれのある行為 他のユーザーに関する個人情報等を収集または蓄積する行為</li>
            <li>他のユーザーに成りすます行為</li>
            <li>本サービスのサービスに関連して、反社会的勢力に対して直接または間接に利益を供与する行為</li>
            <li>その他、本サービスが不適切と判断する行為</li>
          </ul>
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">本サービスの提供の停止等</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、以下のいずれかの事由があると判断した場合、
          ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。
          <ul class="list-disc ml-10">
            <li>本サービスにかかるコンピュータシステムの保守点検または更新を行う場合</li>
            <li>地震、落雷、火災、停電または天災などの不可抗力により、本サービスの提供が困難となった場合</li>
            <li>コンピュータまたは通信回線等が事故により停止した場合</li>
            <li>その他、本サービスが本サービスの提供が困難と判断した場合</li>
          </ul>
          本サービスは、本サービスの提供の停止または中断により、ユーザーまたは第三者が被ったいかなる不利益または損害について、
          理由を問わず一切の責任を負わないものとします。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">利用制限</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、以下の場合には、事前の通知なく、ユーザーに対して、
          本サービスの全部もしくは一部の利用を制限し、またはユーザーとしての登録を抹消することができるものとします。
          <ul class="list-disc ml-10">
            <li>本規約のいずれかの条項に違反した場合</li>
            <li>その他、本サービスが本サービスの利用を適当でないと判断した場合</li>
          </ul>
          本サービスは、本条に基づき本サービスが行った行為によりユーザーに生じた損害について、一切の責任を負いません。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">サービス内容の変更等</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、ユーザーに通知することなく、本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし、
          これによってユーザーに生じた損害について一切の責任を負いません。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">利用規約の変更</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスは、必要と判断した場合には、ユーザーに通知することなくいつでも本規約を変更することができるものとします。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">権利義務の譲渡の禁止</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          ユーザーは、本サービスの書面による事前の承諾なく、利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し、または担保に供することはできません。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">免責</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本サービスの運営元は、次の各号の場合において、一切その責任を負わないものとします。
          本サービスを介して行う、第三者が提供するコンテンツのダウンロード、および、第三者が管理・運営するリンクサイトへのアクセス等の行為により、利用者に生じた損害。
          当社が合理的な安全策を講じたにもかかわらず、本サービスの無断改変、本サービスに関するデータへの不正アクセス、コンピュータウィルスの混入等の不正行為が行われ、
          これに起因して利用者に生じた損害。
          その他本サービズの利用（これらに伴う当社による情報提供行為等を含みます）若しくは不利用により生じる一切の損害（精神的苦痛、またはその他の金銭的損失を含む一切の不利益）。
          前項各号において、万一当社が責任を負う場合であっても、当社が責任を負うのは当社に故意または重過失がある場合に限るものとし、またその責任範囲は直接かつ通常の損害に限られるものとします。
        </div>
        <h5 class="text-xl font-extrabold dark:text-white">準拠法・裁判管轄</h5>
        <div class="mb-4 font-normal text-gray-500 dark:text-gray-400">
          本規約の解釈にあたっては、日本法を準拠法とします。
          本サービスに関して紛争が生じた場合には、本サービスの本店所在地を管轄する裁判所を専属的合意管轄とします。
        </div>
      </div>
    </section>
  </main>
  @component('components.landing.footer')
  @endcomponent
</body>

</html>

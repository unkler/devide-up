<template>
  <div class="w-full flex items-center justify-between h-14 text-white bg-blue-800 dark:bg-gray-800">
    <a href="https://devide-up.com" class="flex items-center justify-start h-14 ml-5">
        <img class="w-6 h-6 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://devide-up.s3.ap-northeast-1.amazonaws.com/images/logo.jpg" />
        <span class="hidden md:block">Devide Up</span>
    </a>
    <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
      <ul class="flex items-center">
        <li>
          <ToggleDarkMode />
        </li>
        <li>
          <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
        </li>
        <li>
          <p @click="logout" class="flex items-center mr-4 text-xs cursor-pointer">
            ログアウト
          </p>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import ToggleDarkMode from './ToggleDarkMode.vue'
import { errorMessage } from '../constants/message'

export default {
  components: {
    ToggleDarkMode
  },
  data() {
    return {
      isLoggingOut: false,
    }
  },
  methods: {
    logout() {
      // 既にログアウト処理が実行中の場合は、二重送信を防ぐために処理を終了
      if (this.isLoggingOut) return

      this.isLoggingOut = true

      axios.post('/logout')
        .then(res => {
          location.href = '/login'
        })
        .catch(error => {
          this.$toasted.error(errorMessage.systemError)
        })
        .finally(() => {
        this.isLoggingOut = false
        })
    }
  },
}
</script>
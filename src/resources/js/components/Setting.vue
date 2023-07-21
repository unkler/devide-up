<template>
  <div :class="{'open-setting': isSettingOpen }"
    class="bg-white dark:bg-gray-800 absolute z-10 top-16 right-0 overflow-x-hidden w-0 h-full transition-all duration-200">
    <div class="flex justify-between mt-10 mx-4"> 
      <h2 class="font-medium text-gray-800 dark:text-gray-400">設定変更</h2>
      <button @click="toggleSetting" class="text-gray-600 hover:text-gray-500 dark:text-gray-400 text-3xl" title="閉じる">
        <i class="fas fa-times-circle"></i>
      </button>
    </div>
    <ValidationObserver tag="form" @submit.prevent="editSetting"  v-slot="{ invalid }" class="w-full">
      <div class="md:w-4/5 mx-auto p-2">
        <label for="name" class="leading-7 text-sm text-gray-600 dark:text-gray-400">アカウント名</label>
        <ValidationProvider name="アカウント名" rules="required|max:255" v-slot="{ errors }">
          <input type="text" v-model="user.name" id="name" name="name" maxlength="255"
            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8">
          <div v-if="errors" class="text-red-500 text-sm">{{ errors[0] }}</div>
          <div v-if="errors.length === 0 && serverValidationMessage.errors?.name !== undefined" class="text-red-500 text-sm">
            {{ serverValidationMessage.errors.name[0] }}
          </div>
        </ValidationProvider>
      </div>
      <div class="md:w-4/5 mx-auto p-2">
        <label for="email" class="leading-7 text-sm text-gray-600 dark:text-gray-400">メールアドレス</label>
        <ValidationProvider name="メールアドレス" rules="required|email|max:254" v-slot="{ errors }">
          <input type="text" v-model="user.email" id="email" name="email" maxlength="254"
            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8">
          <div v-if="errors" class="text-red-500 text-sm">{{ errors[0] }}</div>
          <div v-if="errors.length === 0 && serverValidationMessage.errors?.email !== undefined" class="text-red-500 text-sm">
            {{ serverValidationMessage.errors.email[0] }}
          </div>
        </ValidationProvider>
      </div>
      <div class="md:w-4/5 mx-auto p-2">
        <button
          class="flex text-xs mx-auto text-white bg-blue-800 border-0 py-2 px-6 disabled:bg-gray-400  focus:outline-none hover:bg-blue-600 dark:text-gray-400 dark:bg-gray-700">登録</button>
      </div>
    </ValidationObserver>
  </div>
</template>

<script>
import { extend, ValidationProvider, ValidationObserver, localize } from 'vee-validate'
import { required, email, max } from 'vee-validate/dist/rules'
import jaVeeValidate from 'vee-validate/dist/locale/ja'
import { infoMessage, errorMessage } from '../constants/message'

localize('ja', jaVeeValidate)

extend('required', required);
extend('email', email);
extend('max', max);

export default {
  components: {
    ValidationProvider,
    ValidationObserver,
  },
  data() {
    return {
      user: {},
      serverValidationMessage: {},
      isSettingOpen: false,
    }
  },
  methods: {
    toggleSetting() {
      this.isSettingOpen = !this.isSettingOpen
    },
    isAuthenticated() {
      axios.get('/api/authenticated')
        .then(res => {
          if(res.data.is_authenticated) {
            this.getUser()
          }
        })
        .catch(error => {
          this.$toasted.error(errorMessage.systemError)
        })
    },
    getUser() {
      axios.get('/api/setting/fetch_user')
        .then(res => {
          this.user = res.data
        })
        .catch(error => {
          this.$toasted.error(errorMessage.systemError)
        })
    },
    editSetting() {
      axios.post('/api/setting/update', {
        name: this.user.name,
        email: this.user.email,
      })
      .then(res => {
          if(res.data === 201 && res.status === 200) {
            this.toggleSetting()
            this.$toasted.show(infoMessage.succeededEdit)
          } else {
            this.$toasted.error(errorMessage.systemError)
          }
        })
        .catch(error => {
          this.serverValidationMessage = error.response.data
        })
    }
   },
   created() {
    this.isAuthenticated()
   }
}
</script>

<style scoped>
.open-setting {
  width: 80%;
}
</style>  
<template>
  <main class="py-[40px] px-[12%] lg:py-[11%]">
    <section
      class="flex lg:gap-32 gap-16 justify-center items-center flex-col lg:flex-row"
    >
      <div>
        <h1 class="text-blue-600 text-6xl font-bold">facebook</h1>
        <p class="text-3xl w-[80%] mt-4">
          Connect with friends and the world around you on Facebook.
        </p>
      </div>
      <div>
        <div
          class="bg-white rounded-[8px] w-[350px] lg:w-[420px] min-h-[350px] max-h-[456px] pt-[12px] px-[12px] shadow-xl"
        >
          <Errors v-if="errorLength > 0" :errors="errors" />

          <form
            @submit.prevent="login"
            class="flex justify-around items-center flex-col gap-2"
          >
            <div class="w-full">
              <input
                type="email"
                v-model="form.email"
                placeholder="Email address"
                class="px-[16px] py-[14px] rounded-[6px] w-full border-[1px] placeholder:text-lg"
                autofocus
              />
            </div>
            <div class="w-full">
              <input
                type="password"
                v-model="form.password"
                placeholder="Password"
                class="px-[16px] py-[14px] rounded-[6px] w-full border-[1px] placeholder:text-lg"
              />
            </div>
            <button
              type="submit"
              :disabled="form.processing"
              class="bg-blue-500 text-white text-2xl font-semibold rounded-[6px] w-full py-[10px] mt-4"
              :class="{ 'opacity-25': form.processing }"
            >
              Log in
            </button>
            <Link href="/forgot-password" class="text-blue-500 text-md"
              >Forgot password?</Link
            >
            <div class="relative flex items-center">
              <span class="flex-shrink mx-4 text-gray-400">or</span>
            </div>
            <button
              type="button"
              @click="toggleRegister"
              class="bg-green-500 text-white text-xl font-semibold rounded-[6px] w-[65%] py-[10px] mb-4 text-center"
            >
              Create new account
            </button>
          </form>
        </div>
      </div>
    </section>
    <hr class="h-px my-8 bg-gray-200 border-0" />
    <Transition name="register">
      <RegisterModal v-if="showRegister" @close="toggleRegister" />
    </Transition>
  </main>
</template>

<script setup>
import { computed, ref } from "vue";
import { useForm, Link } from "@inertiajs/vue3";
import Errors from "@/Pages/Components/Errors.vue";
import RegisterModal from "./RegisterModal.vue";

const props = defineProps(["errors"]);

const showRegister = ref(false);

const toggleRegister = () => (showRegister.value = !showRegister.value);

const errorLength = computed(() => Object.keys(props.errors).length);

const form = useForm({
  email: "",
  password: "",
});
const login = () => {
  form.post("/login", {
    onError: () => form.reset("password"),
    onSuccess: () => emit("close"),
  });
};
</script>

<style scoped>
.register-enter-from,
.register-leave-to {
  opacity: 0;
}
.register-enter-active,
.register-leave-active {
  transition: opacity 0.3s ease;
}
</style>

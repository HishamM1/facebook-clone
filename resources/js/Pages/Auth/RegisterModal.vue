<template>
  <div
    class="fixed top-0 bottom-0 left-0 right-0 flex justify-center bg-white bg-opacity-80"
  >
    <div class="shadow-2xl bg-white h-fit w-[30%] mt-[10%] rounded-[8px] relative">
      <img
        class="w-[24px] absolute top-[15px] right-[15px] cursor-pointer"
        src="https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/zgulV2zGm8t.png"
        alt="close"
        @click="emits('close')"
      />
      <div class="py-[10px] px-[16px]">
        <h2 class="font-bold text-[32px]">Sign Up</h2>
        <p class="text-gray-500 text-[15px]">It's quick and easy.</p>
      </div>
      <hr class="h-px bg-gray-200 border-0" />
      <form @submit.prevent="register">
        <div class="p-4">
          <div class="mb-3 flex gap-4 items-center w-full">
            <input
              type="text"
              placeholder="First name"
              class="border-[1px] rounded-[8px] p-2 bg-slate-100 w-full"
              v-model="form.first_name"
            />
            <input
              type="text"
              placeholder="Last name"
              class="border-[1px] rounded-[8px] p-2 bg-slate-100 w-full"
              v-model="form.last_name"
            />
          </div>
          <input
            type="email"
            placeholder="Email address"
            class="border-[1px] rounded-[8px] p-2 block w-full mb-3 bg-slate-100"
            v-model="form.email"
          />
          <input
            type="password"
            placeholder="Password"
            class="border-[1px] rounded-[8px] p-2 block w-full mb-3 bg-slate-100"
            v-model="form.password"
          />
          <div>
            <p class="text-gray-500 text-[15px]">Date of birth</p>
            <input
              type="date"
              class="border-[1px] rounded-[8px] p-2 block w-full mb-3"
              :max="new Date().toISOString().split('T')[0]"
              v-model="form.birth_date"
            />
          </div>
          <div>
            <p class="text-gray-500 text-[15px]">Gender</p>
            <div class="flex items-center gap-4">
              <span class="border-[1px] px-2 py-2 rounded-[6px] w-full">
                <label for="male" class="pr-[58%] pl-[12px]">Male</label>
                <input
                  type="radio"
                  name="gender"
                  id="male"
                  value="male"
                  v-model="form.gender"
              /></span>
              <span class="border-[1px] px-2 py-2 rounded-[6px] w-full">
                <label for="female" class="pr-[50%] pl-[12px]">Female</label>
                <input
                  type="radio"
                  name="gender"
                  value="female"
                  id="female"
                  v-model="form.gender"
              /></span>
            </div>
          </div>
          <div class="mt-2 text-gray-500 text-[11px]">
            <p class="w-auto">
              People who use our service may have uploaded your contact information to
              Facebook.
            </p>
            <p class="w-auto mt-2">
              By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies
              Policy. You may receive SMS notifications from us and can opt out at any
              time.
            </p>
          </div>
          <div class="flex justify-center items-center mt-3">
            <button
              type="submit"
              class="bg-green-600 text-white text-xl font-semibold rounded-[6px] w-[50%] py-[4px] text-center"
              :disabled="form.processing"
            >
              Sign Up
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { defineEmits } from "vue";
import { useForm } from "@inertiajs/vue3";
const emits = defineEmits(["close"]);

const form = useForm({
  first_name: "",
  last_name: "",
  email: "",
  password: "",
  birth_date: null,
  gender: null,
});

const register = () => {
  form.post("/register", {
    onError: () => form.reset("password"),
  });
};
</script>

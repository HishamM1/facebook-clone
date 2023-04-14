<script setup>
import { ref } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";
const emits = defineEmits(["cancelPost"]);

console.log(usePage().props.user);
const postForm = useForm({
  content: "",
  visibility: "public",
  image: null,
});

const createPost = () => {
  postForm.post(route("post.store"), {
    forceFormData: true,
    preserveScroll: true,
    onSuccess: () => {
      postForm.reset();
      emits("cancelPost");
    },
  });
};

const user = usePage().props.auth.user;
const imageDisplay = ref(null);

const getUploadedImage = (e) => {
  imageDisplay.value = URL.createObjectURL(e.target.files[0]);
  postForm.image = e.target.files[0];
};
const clearImage = () => {
  imageDisplay.value = null;
  postForm.image = null;
};
</script>

<template>
  <div
    class="fixed top-0 bottom-0 left-0 right-0 flex justify-center bg-white bg-opacity-80 overflow-y-auto pb-4"
  >
    <div class="shadow-2xl bg-white h-fit w-[30%] mt-[10%] rounded-[8px] relative p-4">
      <img
        class="w-[24px] absolute top-[15px] right-[15px] cursor-pointer"
        src="https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/zgulV2zGm8t.png"
        alt="close"
        @click="emits('cancelPost')"
      />
      <div class="pb-[10px] flex items-center justify-center">
        <h2 class="font-bold text-[20px]">Create post</h2>
      </div>
      <hr class="h-px bg-gray-200 border-0" />
      <form @submit.prevent="createPost()">
        <div class="flex items-center gap-3 pt-4">
          <div>
            <img
              class="rounded-full min-w-[8%] max-h-[40px] cursor-pointer inline-block"
              :src="user.profile_picture"
              alt=""
            />
          </div>
          <div class="flex flex-col">
            <p class="font-semibold">{{ user.first_name }} {{ user.last_name }}</p>
            <select
              name="visibility"
              class="bg-[#e3e5ea] outline-none px-[2px] py-[1px] rounded-[8px]"
              v-model="postForm.visibility"
            >
              <option value="public">Public</option>
              <option value="friends">Friends</option>
              <option value="private">Private</option>
            </select>
          </div>
        </div>
        <div>
          <textarea
            name="content"
            class="w-full h-40 outline-none p-[16px] scrollbar-hide placeholder:text-3xl"
            placeholder="What is in your mind?"
            v-model="postForm.content"
          ></textarea>
        </div>
        <div v-if="postForm.image" class="p-2 border border-gray-300 rounded-lg relative">
          <img
            class="w-[24px] absolute top-[15px] right-[15px] cursor-pointer"
            src="https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/zgulV2zGm8t.png"
            alt="close"
            @click="clearImage()"
          />
          <img class="rounded-lg mx-auto" :src="imageDisplay" alt="" />
        </div>
        <div v-if="imageDisplay == null">
          <div class="flex items-center justify-center w-full">
            <label
              for="dropzone-file"
              class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
            >
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg
                  aria-hidden="true"
                  class="w-10 h-10 mb-3 text-gray-400"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                  ></path>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                  <span class="font-semibold">Click to upload</span> or drag and drop
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-400">
                  SVG, PNG, JPG or GIF (MAX. 800x400px)
                </p>
              </div>
              <input
                id="dropzone-file"
                type="file"
                class="hidden"
                @input="getUploadedImage($event)"
              />
            </label>
          </div>
        </div>
        <div class="pt-4">
          <button
            type="submit"
            class="bg-blue-500 text-white rounded-[8px] px-4 py-2 w-full"
            :disabled="
              postForm.processing ||
              (postForm.content.length === 0 && postForm.image === null)
            "
            :class="{
              'opacity-25 cursor-not-allowed':
                postForm.processing ||
                (postForm.content.length === 0 && postForm.image === null),
            }"
          >
            Post
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

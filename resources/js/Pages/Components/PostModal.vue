<script setup>
import { usePage, useForm, Link } from "@inertiajs/vue3";
import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";
dayjs.extend(relativeTime);
const user = usePage().props.auth.user;

const props = defineProps(["post", "isLiked"]);

console.log(props.isLiked.value);
const emits = defineEmits(["close-post"]);

const commentForm = useForm({
  content: "",
  image: null,
  post_id: props.post.id,
});

const writeComment = () => {
  commentForm.post(route("comment.store"), {
    onSuccess: () => {
      commentForm.reset();
    },
    preserveScroll: true,
    preserveState: true,
  });
};
</script>

<template>
  <div
    class="fixed top-0 bottom-0 left-0 right-0 flex justify-center bg-white bg-opacity-80 overflow-y-auto pb-4"
    @click.self="emits('close-post')"
  >
    <div class="shadow-2xl bg-white h-fit w-[50%] mt-[2%] rounded-[8px] relative p-4">
      <div>
        <div class="flex items-center">
          <button class="mr-2">
            <img
              :src="post.user.profile_picture"
              alt="not found"
              class="rounded-full ml-1 min-w-[42px] max-h-[42px]"
            />
          </button>
          <div class="flex items-center justify-between rounded-full w-full">
            <div>
              <div class="font-semibold text-[15px]">
                {{ post.user.first_name }} {{ post.user.last_name }}
              </div>
              <div class="flex items-center text-xs text-gray-600">
                {{ dayjs(post.created_at).fromNow() }}
                <!-- <AccountMultiple :size="15" class="ml-1" fillColor="#64676B" /> -->
              </div>
            </div>
            <div class="flex items-center">
              <button
                class="rounded-full cursor-pointer hover:bg-[#F2F2F2]"
                @click="emits('close-post')"
              >
                <div class="p-2">
                  <div>
                    <div
                      aria-expanded="false"
                      aria-haspopup="menu"
                      aria-label="Actions for this post"
                      role="button"
                      tabindex="0"
                    >
                      <svg
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        width="1em"
                        height="1em"
                      >
                        <g fill-rule="evenodd" transform="translate(-446 -350)">
                          <path
                            d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"
                          ></path>
                        </g>
                      </svg>
                      <div data-visualcompletion="ignore" style="inset: -8px"></div>
                    </div>
                  </div>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div v-if="post.content" class="my-2">{{ post.content }}</div>

      <div class="w-full">
        <img
          v-if="post.image"
          :src="`storage/images/` + post.image"
          alt="no image"
          class="block my-4 mx-auto w-full max-h-[1000px] max-w-[700px] object-cover"
        />
      </div>
      <hr class="h-px bg-gray-200 border-0" />

      <div class="flex items-center justify-around py-1">
        <Link
          class="flex items-center gap-1 hover:bg-[#e4e6e9] rounded-[20px] cursor-pointer"
          method="post"
          as="button"
          :href="route('like.store', { post_id: post.id })"
          preserve-scroll
        >
          <div
            class="flex items-center gap-1 hover:bg-[#e4e6e9] px-[35px] py-[4px] rounded-[20px] cursor-pointer"
          >
            <span :class="{ 'text-[#3786e4]': isLiked }"> Like</span>
          </div>
        </Link>
        <div
          class="flex items-center gap-1 px-[35px] py-[4px] hover:bg-[#e4e6e9] rounded-[20px] cursor-pointer"
        >
          <span>Comment</span>
        </div>
        <div
          class="flex items-center gap-1 px-[35px] py-[4px] hover:bg-[#e4e6e9] rounded-[20px] cursor-pointer"
        >
          <span>Share</span>
        </div>
      </div>

      <hr class="h-px bg-gray-200 border-0" />

      <form class="sticky bottom-[-16px]" @submit.prevent="writeComment()">
        <label for="chat" class="sr-only">Your message</label>
        <div class="flex items-center px-3 py-2 bg-white">
          <label for="dropzone-file">
            <button
              class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100"
            >
              <svg
                aria-hidden="true"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <span class="sr-only">Upload image</span>
            </button>
            <input id="dropzone-file" type="file" class="hidden" />
          </label>
          <textarea
            id="chat"
            rows="1"
            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-[#f0f2f5] rounded-[8px] border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
            placeholder="Write a comment..."
            v-model="commentForm.content"
          ></textarea>
          <button
            type="submit"
            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600"
            :disabled="
              commentForm.processing ||
              (commentForm.content.length === 0 && commentForm.image === null)
            "
            :class="{
              'opacity-25 cursor-not-allowed':
                commentForm.processing ||
                (commentForm.content.length === 0 && commentForm.image === null),
            }"
          >
            <svg
              aria-hidden="true"
              class="w-6 h-6 rotate-90"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"
              ></path>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

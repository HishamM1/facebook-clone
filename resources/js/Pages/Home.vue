<template>
  <nav
    id="MainNav"
    class="fixed top-0 left-0 z-50 w-full flex items-center justify-between h-[56px] bg-white shadow-sm border-b"
  >
    <div class="flex items-center justify-start w-[260px]">
      <div class="pl-3 min-w-[55px]">
        <img
          class="w-[50px]"
          src="https://img.icons8.com/fluency/48/null/facebook-new.png"
        />
      </div>
      <label
        class="flex items-center justify-center bg-[#EFF2F5] p-1 rounded-full h-[40px] ml-2"
      >
        <span class="px-2"
          ><svg
            fill="currentColor"
            viewBox="0 0 16 16"
            width="1em"
            height="1em"
            class="text-[#65676b]"
          >
            <g fill-rule="evenodd" transform="translate(-448 -544)">
              <g fill-rule="nonzero">
                <path
                  d="M10.743 2.257a6 6 0 1 1-8.485 8.486 6 6 0 0 1 8.485-8.486zm-1.06 1.06a4.5 4.5 0 1 0-6.365 6.364 4.5 4.5 0 0 0 6.364-6.363z"
                  transform="translate(448 544)"
                ></path>
                <path
                  d="M10.39 8.75a2.94 2.94 0 0 0-.199.432c-.155.417-.23.849-.172 1.284.055.415.232.794.54 1.103a.75.75 0 0 0 1.112-1.004l-.051-.057a.39.39 0 0 1-.114-.24c-.021-.155.014-.356.09-.563.031-.081.06-.145.08-.182l.012-.022a.75.75 0 1 0-1.299-.752z"
                  transform="translate(448 544)"
                ></path>
                <path
                  d="M9.557 11.659c.038-.018.09-.04.15-.064.207-.077.408-.112.562-.092.08.01.143.034.198.077l.041.036a.75.75 0 0 0 1.06-1.06 1.881 1.881 0 0 0-1.103-.54c-.435-.058-.867.018-1.284.175-.189.07-.336.143-.433.2a.75.75 0 0 0 .624 1.356l.066-.027.12-.061z"
                  transform="translate(448 544)"
                ></path>
                <path
                  d="m13.463 15.142-.04-.044-3.574-4.192c-.599-.703.355-1.656 1.058-1.057l4.191 3.574.044.04c.058.059.122.137.182.24.249.425.249.96-.154 1.41l-.057.057c-.45.403-.986.403-1.411.154a1.182 1.182 0 0 1-.24-.182zm.617-.616.444-.444a.31.31 0 0 0-.063-.052c-.093-.055-.263-.055-.35.024l.208.232.207-.206.006.007-.22.257-.026-.024.033-.034.025.027-.257.22-.007-.007zm-.027-.415c-.078.088-.078.257-.023.35a.31.31 0 0 0 .051.063l.205-.204-.233-.209z"
                  transform="translate(448 544)"
                ></path>
              </g>
            </g></svg
        ></span>
        <input
          class="lg:block hidden border-none p-0 bg-[#EFF2F5] placeholder-[#64676B] ring-0 focus:ring-0 outline-none"
          placeholder="Search Facebook"
          type="text"
        />
      </label>
    </div>
    <div
      id="NavCenter"
      class="hidden lg:flex items-center ml-5 justify-center w-8/12 max-w-[600px]"
    >
      <div class="text-[#2374e1]">
        <svg viewBox="0 0 28 28" fill="currentColor" height="28" width="28">
          <path
            d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"
          ></path>
        </svg>
      </div>
    </div>
    <div class="flex items-center justify-end w-2/12 mr-4">
      <button class="rounded-full bg-[#E3E6EA] p-2 hover:bg-gray-300 mx-1 cursor-pointer">
        <svg
          fill="currentColor"
          viewBox="0 0 20 20"
          width="1em"
          height="1em"
          class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 x1qx5ct2 xw4jnvo"
        >
          <g fill-rule="evenodd" transform="translate(-446 -350)">
            <g fill-rule="nonzero">
              <path
                d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z"
                transform="translate(354.5 159.5)"
              ></path>
              <path
                d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z"
                transform="translate(354.5 159.5)"
              ></path>
            </g>
          </g>
        </svg>
      </button>
      <button class="rounded-full bg-[#E3E6EA] p-2 hover:bg-gray-300 mx-1 cursor-pointer">
        <svg
          viewBox="0 0 28 28"
          alt=""
          class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0"
          fill="currentColor"
          height="20"
          width="20"
        >
          <path
            d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"
          ></path>
        </svg>
      </button>
      <button class="rounded-full bg-[#E3E6EA] p-2 hover:bg-gray-300 mx-1 cursor-pointer">
        <svg
          viewBox="0 0 28 28"
          alt=""
          class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0"
          fill="currentColor"
          height="20"
          width="20"
        >
          <path
            d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"
          ></path>
        </svg>
      </button>
      <div class="flex items-center justify-center relative">
        <button @click="showMenu = !showMenu">
          <img
            class="rounded-full ml-1 min-w-[40px] max-h-[40px] cursor-pointer"
            src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-1/242197165_4258717330873341_7535771958652654918_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=9nUu7lFgQsQAX8oGTZ2&_nc_ht=scontent-hbe1-1.xx&oh=00_AfCiJLgrXM2uVyLg_fXtlwEf_FDq_LuekwfM5TrASEj7zw&oe=642CDEBF"
          />
        </button>
        <div
          v-if="showMenu"
          class="absolute bg-white shadow-xl top-10 right-0 w-[330px] rounded-lg p-1 border mt-1"
        >
          <Link @click="showMenu = !showMenu">
            <div class="flex items-center gap-3 hover:bg-gray-200 p-2 rounded-lg">
              <img
                class="rounded-full ml-1 min-w-[35px] max-h-[35px] cursor-pointer"
                src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-1/242197165_4258717330873341_7535771958652654918_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=9nUu7lFgQsQAX8oGTZ2&_nc_ht=scontent-hbe1-1.xx&oh=00_AfCiJLgrXM2uVyLg_fXtlwEf_FDq_LuekwfM5TrASEj7zw&oe=642CDEBF"
              />
              <span>user name</span>
            </div>
          </Link>
          <Link class="w-full" as="button" method="post">
            <div class="flex items-center gap-3 hover:bg-gray-200 px-2 py-2.5 rounded-lg">
              <Logout class="pl-2" :size="30" />
              <span>Logout</span>
            </div>
          </Link>
          <div class="text-xs font-semibold p-2 pt-3 border-t mt-1">
            Privacy · Terms · Advertising · Ad Choices · Cookies · Meta © 2023
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="mt-[80px] flex flex-col items-center gap-6">
    <div class="border-[px] border-black shadow-md w-[50%] bg-white p-3 rounded-[10px]">
      <div>
        <img
          class="rounded-full ml-1 min-w-[8%px] max-h-[40px] cursor-pointer inline-block"
          src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-1/242197165_4258717330873341_7535771958652654918_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=9nUu7lFgQsQAX8oGTZ2&_nc_ht=scontent-hbe1-1.xx&oh=00_AfCiJLgrXM2uVyLg_fXtlwEf_FDq_LuekwfM5TrASEj7zw&oe=642CDEBF"
        />
        <div
          class="border rounded-[25px] px-2 py-[4px] ml-2 w-[92%] inline-block bg-[#F0F2F5] hover:bg-[#e4e6e9] cursor-pointer"
        >
          <span class="text-[#606266] text-lg">What's on your mind?</span>
        </div>
      </div>
    </div>

    <!-- posts -->
    <div class="border-[px] border-black shadow-md w-[50%] bg-white p-3 rounded-[10px]">
      <div>
        <img
          class="rounded-full ml-1 min-w-[8%px] max-h-[40px] cursor-pointer inline-block"
          src="https://scontent-hbe1-1.xx.fbcdn.net/v/t39.30808-1/242197165_4258717330873341_7535771958652654918_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=9nUu7lFgQsQAX8oGTZ2&_nc_ht=scontent-hbe1-1.xx&oh=00_AfCiJLgrXM2uVyLg_fXtlwEf_FDq_LuekwfM5TrASEj7zw&oe=642CDEBF"
        />
        <span>Name</span>
        <div>Time</div>
      </div>

      <div>Text</div>
      <div>Image <img src="" class="w-full" /></div>
      <hr class="h-px bg-gray-200 border-0" />

      <div class="flex items-center justify-around gap-3 pt-2">
        <div
          class="flex items-center gap-1 hover:bg-[#e4e6e9] px-[90px] py-[4px] rounded-[20px] cursor-pointer"
        >
          <span>Like</span>
        </div>
        <div
          class="flex items-center gap-1 px-[90px] py-[4px] hover:bg-[#e4e6e9] rounded-[20px] cursor-pointer"
        >
          <span>Comment</span>
        </div>
        <div
          class="flex items-center gap-1 px-[90px] py-[4px] hover:bg-[#e4e6e9] rounded-[20px] cursor-pointer"
        >
          <span>Share</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
const showMenu = ref(false);
</script>

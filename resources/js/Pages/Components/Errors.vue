<template>
  <div class="text-center bg-red-200 border-red-600 border-2 mb-4 py-3 rounded-[6px]">
    <p v-for="error in errors">{{ error }}</p>
  </div>
</template>

<script setup>
const props = defineProps({
  errors: {
    type: Array,
    required: true,
  },
});
</script>

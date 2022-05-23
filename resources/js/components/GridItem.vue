<script setup>
 import { computed } from 'vue';
import md5 from "md5";

const props = defineProps(["name", "email", "role", "phoneNumber"]);

 const gravatar = computed(()=>{
   const hash = md5(props.email.trim().toLowerCase());
   return `https://www.gravatar.com/avatar/${hash}`;
 });
</script>

<template>
  <div class='bg-white dark:bg-gray-800 rounded-lg drop-shadow-md'>
      <div class='flex justify-between items-center p-6'>
        <div>
          <p>
            {{ name }}
            <span
              class='ml-4 px-2 rounded-full bg-green-200 font-bold text-green-700'
              :class="{ 'bg-red-200': role == 'admin', 'text-red-700': role == 'admin' }"
            >
              {{ role }}
            </span>
          </p>
          <p class='text-gray-500'>{{ email }}</p>
        </div>
        <div>
          <img class="rounded-full h-14 w-14" :src="gravatar" :alt="name" />
        </div>
      </div>
      <div class='flex justify-around border-t-2 dark:border-gray-700'>
        <div class='w-full border-r-2 dark:border-gray-700'>
          <a :href="`mailto:${email}`" class='flex items-center justify-center py-4 h-full w-full hover:bg-gray-200'>
            Email
          </a>
        </div>
        <div class='w-full'>
          <a :href="`tel:${phoneNumber}`" class='flex items-center justify-center py-4 h-full w-full hover:bg-gray-200'>
            <p>call</p>
          </a>
        </div>
      </div>
  </div>
</template>

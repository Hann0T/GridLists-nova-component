<template>
  <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-3 ">
    <GridItem
        v-for="user in users"
        :key="user.id"
        :name="user.name"
        :email="user.email"
        :role="user.role"
        :phoneNumber="user.phone_number"
    />
  </div>
</template>

<script setup>
 import { ref } from 'vue';
 import GridItem from "../components/GridItem.vue";

 const users = ref([]);

 Nova.request().get('/nova-vendor/grid-lists/users').then(response => {
   users.value = response.data;
     console.log(users.value[0].phone_number);
 });
</script>

<style>
/* Scoped Styles */
</style>

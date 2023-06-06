<script setup>
import { router } from "@inertiajs/vue3";
defineProps({
    id : String,
    blog: Object
})

const deleteConfirm = id => {
    router.delete(`/inertia/${id}`, {
      onBefore: () => confirm('マジさく?'),
})
}
</script>
<template>
    <div class="m-4 p-4">
    <div>id : {{ id }}</div>
    <div>title : {{ blog.title }}</div>
    <button @click="deleteConfirm(blog.id)">削除する</button>
</div>
</template>
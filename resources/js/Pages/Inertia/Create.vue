<template>
    <div class="m-4">
        <form action="" @submit.prevent="submitFunction">
            <div class="block"><label for="title">タイトル</label><input type="text" name="title" v-model="form.title"
                    id="title" class="m-4"></div>
            <p v-if="errors.title" class="text-red-700">{{ errors.title }}</p>
            <div class="block"><label for="content">本文</label><input type="text" name="content" v-model="form.content"
                    id="content" class="m-4"></div>
            <p v-if="errors.content" class="text-red-700">{{ errors.content }}</p>
            <button>送信</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
    errors: Object
})

const form = reactive({
    title: null,
    content: null
})

const submitFunction = () => {
    router.post('/inertia', form)
}
</script>

<style lang="scss" scoped></style>

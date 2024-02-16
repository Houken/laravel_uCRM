<template>
    <div>
        <h1 class="text-xl m-4 font-black">Inertiaテストです</h1>
        <p class="my-4 ml-8"><a href="/" class="font-bold bg-gray-200 p-1">a</a>タグでWelcomeに移動</p>
        <p class="my-4 ml-8">
            <Link :href="route('inertia.index')" class="font-bold bg-gray-200 p-1">Link</Link>でWelcomeに移動
        </p>
        <p class="my-4 ml-8">
            <Link :href="route('inertia.show', { id: 1 })" class="font-bold bg-gray-200 p-1">Button</Link>
        </p>

        <div class="m-4">
            <p><input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}</p>
            <p><input type="text" name="newContent" v-model="newContent">{{ newContent }}</p>
            <p>
                <Link as="button" method="post" :href="route('inertia.store')"
                    :data="{ title: newTitle, content: newContent }">保存テスト</Link>
            </p>
        </div>

    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')
</script>

<style lang="scss" scoped></style>

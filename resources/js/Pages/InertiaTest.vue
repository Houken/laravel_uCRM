<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from 'vue'

const newTitle = ref('')
const newContent = ref('')
</script>

<template>
    <div class="p-4 mb-8">
        <h1>Inertiaのテストです。</h1>
        <ul>
            <li><a href="/">aタグ経由です</a></li>
            <li>
                <Link href="/">Link経由です。</Link>
            </li>
            <li>
                <Link :href="route('inertia.index')">名前付きルート</Link>
            </li>
            <li>
                <Link :href="route('inertia.show', { id: 33 })">ルートパラメータのテスト</Link>
            </li>
        </ul>
        <div class="p-8">
            <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
            <input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
            <Link as="button" method="post" :href="route('inertia.store')" :data="{ title: newTitle, content: newContent }">
            保存テスト
            </Link>
        </div>
    </div>
</template>

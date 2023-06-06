<script setup>
    //　Vueからreactiveをインポート 
    import { reactive } from "vue";
    // Inertiaからrouterをインポート
    import { router } from "@inertiajs/vue3";

    defineProps({
        errors: Object
    })
    // 再代入のできないformオブジェクトを定義
    // 入力・変更に応じて値が変化
    // プロパティは変更可能
    const form = reactive({
        title: null,
        content: null
    })

    // submitFunction関数を定義
    // 引数はなし
    // formをデータとして、/inertiaに遷移
    const submitFunction = () => {
        router.post('/inertia', form)
    }
</script>

<template>
    <!--  -->
    <form @submit.prevent="submitFunction" class="p-4">
        <div v-if="errors.title">{{ errors.title }}</div>
        <div class="mb-4"><input type="text" name="title" v-model="form.title"></div>
        <div v-if="errors.content">{{ errors.content }}</div>
        <div><input type="text" name="content" v-model="form.content"></div>
        <button type="submit" class="rounded border-2 py-1 px-2 my-1">送信</button>
    </form>
</template>

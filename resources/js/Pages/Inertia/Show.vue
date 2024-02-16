<template>
    <div class="p-4">
        <div>
            <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
        </div>
        <h1>ID: {{ id }}</h1>
        <h2>blog: {{ blog.id }}</h2>
        <h3>title: {{ blog.title }}</h3>
        <p>本文: {{ blog.content }}</p>
        <button
            @click="deleteConfirm(blog.id)"
            class="outline p-2 my-4 rounded"
        >削除</button>
        <!-- ボタンがクリックされたら、deleteConfirmメソッドをコール -->
        <!-- 引数はblog.id -->
        <!-- blogはオブジェクトとして親コンポーネントから受け取っている -->
        <!-- 親コンポーネントは、InertiaTestController -->
    </div>
</template>

<script setup>
import { router } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    id: String,
    blog: Object
})
// InertiaTestControllerのshowメソッドから受け取ったパラメータ
// idは元々、index.vueからルートパラメータ経由で渡されたblog.id
// blogはidと対応するInertiaTestモデルのインスタンス

const deleteConfirm = id => {
    router.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })
}
// アロー関数deleteConfirm 引数は1つなので括弧は省略
// ボタンからidを受け取って、deleteメソッドで/inertia/idに遷移。
// web.phpの設定で、InertiaTestControllerのdeleteメソッドをコール
</script>

<style lang="scss" scoped></style>

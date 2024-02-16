<template>
    <div>
        <!-- flash.messageプロップがある場合に、それを表示する。 -->
        <div
            v-if="$page.props.flash.message"
            class="font-bold bg-blue-300"
        >
            {{ $page.props.flash.message }}
        </div>
        <div>
            <h1>ブログリスト</h1>
            <ul>
                <li
                    v-for="blog in  blogs "
                    :key="blog.id"
                >
                    件名:
                    <Link
                        class="text-blue-400"
                        :href="route('inertia.show', { id: blog.id })"
                    >{{ blog.title }}</Link>,
                    本文: {{ blog.content }}
                </li>
                <!-- Show.vueへ繋がるルートを呼び出している。引数としてblog.idを渡している -->
                <!-- この引数はルートパラメータとして渡される。 -->
                <!-- web.phpでコントローラのshowメソッドが呼び出される -->
                <!-- showメソッドでidに対応するモデルのインスタンスが，Show.vueに渡される -->
                <!-- Vue.jsでデータのやりとりをするのではなく、routerの処理を挟むことで対応するデータを取得している -->
                <!-- Show.vueはblogの中身を表示するのだから、パラメータとしてidを渡して、それをキーとしてデータベースから対応するレコードを取得する -->
                <!-- そういった処理が行われるのは必ずPHP側。routeメソッドで名前付きルートinertia.showを呼び出し、 -->
                <!-- web.phpで、InertiaTestControllerのshowメソッドが呼び出され、そこでモデルのインスタンスが取得される -->
                <!-- 取得されたレコードが、Inertia::renderメソッドで、idとともに渡される。 -->
                <!-- 受け取ったShow.vueでは、definePropsで型宣言をしつつ宣言する。 -->
            </ul>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
// コントローラから受け取る変数の宣言
defineProps({
    blogs: Array // モデル経由で受け取ったデータなので、コレクションだがVue.jsでは配列で扱う
})
</script>

<style lang="scss" scoped></style>

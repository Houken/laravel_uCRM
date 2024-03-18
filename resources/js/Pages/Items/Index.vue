<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import FlashMessage from '@/Components/FlashMessage.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    items: {
        type: Array
    }
})
</script>

<template>

    <Head title="商品一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <FlashMessage />
                            <div class="flex flex-col text-center w-full mb-8">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-0 text-gray-900">商品一覧</h1>

                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <Link
                                    as="button"
                                    :href="route('items.create')"
                                    class="flex w-40 ml-auto mb-4 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                >商品登録</Link>
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                id</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                商品名</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                価格</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                販売状況</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="item in items"
                                            :key="item.id"
                                        >
                                            <td class="px-4 py-3 border-t border-b border-gray-200">
                                                <Link
                                                    :href="route('items.show', { item: item.id })"
                                                    class="text-blue-400"
                                                >{{ item.id }}</Link>
                                            </td>
                                            <td class="px-4 py-3 border-t border-b border-gray-200">{{ item.name }}</td>
                                            <td class="pl-0 pr-12 py-3 text-right border-t border-b border-gray-200">¥
                                                {{
                                        item.price.toLocaleString() }}
                                            </td>
                                            <td
                                                class="px-4 py-3 text-lg text-gray-900 border-t border-b border-gray-200">
                                                <span v-if="item.is_selling">販売中</span>
                                                <span v-else>販売停止中</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { nl2br } from '@/common';
import { Head, Link, router } from '@inertiajs/vue3';

defineProps({
    item: Object
})

const deleteItem = id => {
    router.delete(route('items.destroy', { item: id }), {
        onBefore: () => confirm('本当に削除しますか？')
    })
}
</script>

<template>

    <Head title="商品詳細" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">商品詳細</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <img
                                    alt="ecommerce"
                                    class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                                    src="https://dummyimage.com/400x400"
                                >
                                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">uCRM</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ item.name }}</h1>
                                    <p
                                        class="leading-relaxed"
                                        v-html="nl2br(item.memo)"
                                    ></p>
                                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                        <div class="flex">
                                            <span
                                                v-if="item.is_selling"
                                                class="text-gray-800"
                                            >販売中</span>
                                            <span
                                                v-else
                                                class="text-gray-400"
                                            >販売停止中</span>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <Link
                                            as="button"
                                            :href="route('items.edit', { item: item.id })"
                                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                        >編集する</Link>
                                    </div>
                                    <div class="mt-8 p-2 w-full">
                                        <button
                                            @click="deleteItem(item.id)"
                                            class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"
                                        >削除する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({ blogs: Array })
</script>
<template>
    <div>
        <div v-if="$page.props.flash.message" class="bg-blue-300">
            {{ $page.props.flash.message }}
        </div>
        <ul class="p-4">
            <li v-for="blog in blogs" :key="blog.id" class="mb-4">
                <h1>件名 :
                    <Link class="text-blue-400" :href="route('inertia.show', { id: blog.id })">{{ blog.title }}</Link>
                </h1>
                <p>本文 : {{ blog.content }}</p>
            </li>
        </ul>
    </div>
</template>

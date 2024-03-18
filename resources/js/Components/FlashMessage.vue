<template>
    <div
        v-if="$page.props.flash.status === 'success'"
        class="bg-blue-300 text-white my-4 p-4"
    >
        {{ $page.props.flash.message }}
    </div>
</template>

<script setup>

</script>

<style
    lang="scss"
    scoped
></style>

<template>
    <GuestLayout>
        <Label value="value属性で渡すとコンテンツより優先される。">タイトル</Label>
        <Input
            modelValue="初期値"
            @update:modelValue="emitTest"
        >ここに書くとどうなる</Input>
    </GuestLayout>
</template>

<script setup>
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'

const emitTest = e => console.log(e)
</script>

<style lang="scss" scoped></style>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'

const emitTest = e => console.log(e)
</script>

<template>
    <GuestLayout>
        <Label value="件名">タイトル</Label>
        <Input modelValue="初期値の表示" @update:modelValue="emitTest"></Input>
        <p>こちらがGuestLayoutのタグの中身です。GuestLayout.vueから持ってきたGuestLayoutの&lt;slot/&gt;の部分に差し込まれます。</p>
    </GuestLayout>
</template>